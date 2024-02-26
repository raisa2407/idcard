<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ID Card | PTPN IV REGIONAL III</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href={{ @asset('lib/animate/animate.min.css') }} rel="stylesheet">
    <link href={{ @asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ @asset('css/bootstrap.min.css') }} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{ @asset('css/style.css') }} rel="stylesheet">

</head>

<body>
    @include ('layouts.navbar')

    <div class="container-xxl bg-white p-0 mt-4" style="min-height: 540px;">
        @yield('container')

    </div>
    <div class="container-fluid text-white-50 footer pt-3 mt-5 wow fadeIn text-center" data-wow-delay="0.1s">
        &copy; <a class="border-bottom text-white" href="/">PTPN IV REGIONAL III</a>, All Right Reserved.
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed By <a class="border-bottom" href="https://htmlcodex.com" style="text-white">HTML Codex</a>
    </div>
    </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src={{ @asset('js/main.js') }}></script>
</body>
</html>
