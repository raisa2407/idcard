<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use SimpleSoftwareIO\QrCode\Facades\QrCode as QrCodeGenerator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateController extends Controller
{
    public function process(Request $request){
        $nama = $request->post('nama');
        $divisi = $request->post('divisi');
        $univ = $request->post('univ');
        $image = $request->file('image');
        $nomor = $request->post('nomor');
        $qrCodePath = public_path('qr_codes') . '/' . time() . '_qrcode.png';
        $tanggal_selesai = $request->post('tanggal_selesai');
      
        // $nama = 'Angelina Putri Ramadhani';
        // $divisi = 'Bag. Tekpol';
        // $univ = 'Universitas Islam Riau';
        $image = $request->file('image');
        
        $fileName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/foto', $fileName); // Store the image in storage/app/public/foto
        $fotoPath = 'storage/foto/' . $fileName; // Path to the saved image

        $outputfile = public_path() . '/idcard.pdf';
        $this->fillPDF(public_path() . '/master/idcard.pdf', $outputfile, $nama, $univ, $divisi, $fotoPath, $nomor, $tanggal_selesai, $qrCodePath);

        return response()->file($outputfile);
    
    }
    public function fillPDF($file, $outputfile, $nama, $univ, $divisi, $image, $nomor, $tanggal_selesai, $qrCodePath)
    {
        $fpdi = new FPDI();
        $fpdi->setSourceFile($file);
        
        // Halaman 1
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
    
        $name = $nama;
        $div =  $divisi;
        $asal = $univ;
        $foto = $image;
        $tgl = $tanggal_selesai;
        $no = $nomor;
    
        $fpdi->Image($foto, 16, 23.6, 20, 28);
    
        $fpdi->SetFont('Helvetica', '', 13);
        $fpdi->SetTextColor(255, 255, 255);
        $textWidth = $fpdi->GetStringWidth($name);
        $xPos = (50 - $textWidth) / 2;
        $fpdi->Text($xPos, 56.6, $name);
    
        $fpdi->SetFont('Arial', '', 13);
        $fpdi->SetTextColor(255, 255, 255);
        $textWidth = $fpdi->GetStringWidth($div);
        $xPos = (50 - $textWidth) / 2;
        $fpdi->Text($xPos, 64, $div);
    
        $fpdi->SetFont('Helvetica', '', 13);
        $fpdi->SetTextColor(255, 255, 255);
        $textWidth = $fpdi->GetStringWidth($asal);
        $xPos = (50 - $textWidth) / 2;
        $fpdi->Text($xPos, 77.5, $asal);
    
        // Halaman 2
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $template = $fpdi->importPage(2);
        $fpdi->useTemplate($template);
    
        $fpdi->SetFont('Helvetica', '', 10);
        $fpdi->SetTextColor(255, 255, 255);
        $textWidth = $fpdi->GetStringWidth($tgl);
        $xPos = (50 - $textWidth) / 2;
        $fpdi->Text($xPos, 54, $tgl);
    
        $qrUrl = "http://118.97.163.52:8182/magang/tracking-pengajuan?kode_pengajuan=" . $no;
        QrCode::size(500)->format('png')->margin(2)->generate($qrUrl, $qrCodePath);
        
        $fpdi->Image($qrCodePath, 15, 56, 20, 20);
        
        return $fpdi->Output($outputfile, 'F');
    }
    
      
    }


