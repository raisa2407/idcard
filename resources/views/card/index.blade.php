@extends('layouts.main')

@section('container')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Generate ID Card</h1>
                    <p>MAGANG PTPN IV REGIONAL III</p>
                    <p class="mb-4">Pastikan untuk mengisi data secara benar agar hasil ID Card sesuai dengan identitas anda</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-2 px-3" href="#generateIDCard">Get Your ID Card</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                {{-- <img class="rounded-circle flex-shrink-0" src="img/<?= $image; ?>" alt="<?= $name; ?>" style="width: 45px; height: 45px;">
                                <div class="ms-3"> --}}
                                    {{-- <h6 class="text-primary mb-1">{{ $name }}</h6>
                                    <small>{{ $email }}</small> --}}
                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                        <img class="img-fluid w-75 rounded-circle bg-light p-3" src="https://source.unsplash.com/2000x2000?blog" alt="blog">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="https://source.unsplash.com/1000x1000?website" alt="website">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="https://source.unsplash.com/1000x1000?design" alt="design">
                        </div>
                    </div>
                </div>
            </div>
       
            <form action="{{ route('buat') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="generateIDCard" class="mt-10 bg-light rounded">
                <div class="row g-0">
                    <div class="wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Generate ID Card</h1>
                     
                                <div class="row g-3">
                                    <div class="col-sm-6"> 
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nama Lengkap</label>
                                        <div class="form-floating"> 
                                            <input type="text" name="nama" class="form-control border-0" id="nama" placeholder="Nama Lengkap">
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">No Pengajuan</label>
                                        <div class="form-floating"> 
                                            <input type="text" name="nomor" class="form-control border-0" id="nomor" placeholder="Nomor Pengajuan">
                                            <label for="nomor">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Asal Instansi</label>
                                        <div class="form-floating">
                                            <input type="text" name="univ" class="form-control border-0" id="univ" placeholder="Asal Sekolah/Universitas">
                                            <label for="univ">Asal Sekolah/Universitas</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Divisi Magang</label>
                                        <div class="form-floating">
                                            <input type="text" name="divisi" class="form-control border-0" id="divisi" placeholder="Child Name">
                                            <label for="divisi">Divisi Magang</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Tanggal Mulai</label>
                                        <div class="form-floating">
                                            <input class="form-control" id="tanggal_mulai" name="tanggal_mulai" type="date" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Tanggal Selesai</label>
                                        <div class="form-floating">
                                            <input class="form-control" id="tanggal_selesai" name="tanggal_selesai" type="date" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="mb-2 fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Input Foto</label>
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image" onchange="previewImage()">
                                                    @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <label class="mb-1" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Background gambar harus dihapus terlebih dahulu, dan ukuran foto wajib 4x6</label>
                                                </div>
                                                <div class="col-sm-6 ml-4 mb-2">
                                                    <img class="img-preview img-fluid d-block" style="height: 5cm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(){
    
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
        }
      </script>
@endsection