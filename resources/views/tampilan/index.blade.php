@extends('layout')
@section('content')
<meta content="" name="description">
 <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet">

 <!-- =======================================================
 * Template Name: Eterna - v4.10.0
 * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 ======================================================== -->
</head>

<body>
  
 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
   <div class="container d-flex justify-content-center justify-content-md-between">
     <div class="contact-info d-flex align-items-center">
       <i class="bi bi-envelope d-flex align-items-center"><a href="prohumasi@smkwikrama.sch.id">prohumasi@smkwikrama.sch.id</a></i>
       <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0251) 8242411</span></i>
     </div>
     <div class="social-links d-none d-md-flex align-items-center">
       <a href="https://twitter.com/smkwikrama" class="twitter"><i class="bi bi-twitter"></i></a>
       <a href="https://id-id.facebook.com/smkwikrama/" class="facebook"><i class="bi bi-facebook"></i></a>
       <a href="https://www.instagram.com/smkwikrama/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
       <a href="https://www.youtube.com/results?search_query=smk+wikrama+bogor" class="youtube"><i class="bi bi-youtube"></i></a>
     </div>
   </div>
 </section>

 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
   <div class="container d-flex justify-content-between align-items-center">

     <div class="logo">
       <h1><a href="/">SMK Wikrama Bogor</a></h1>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
     </div>

     <nav id="navbar" class="navbar">
       <ul>
         <li><a class="active" href="#hero">Beranda</a></li>
         <li><a href="#about">Tentang Kami</a></li>
         <li><a href="#clients">Kerjasama</a></li>
         <li><a href="#footer">Hubungi Kami</a></li>
         <li><a href="{{route('login')}}">Login</a></li>
       </ul>
       <i class="bi bi-list mobile-nav-toggle"></i>
     </nav><!-- .navbar -->

   </div>
 </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <section id="hero">
   <div class="hero-container">
     <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

       <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

       <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="carousel-item active" style="background-image: url(assets/img/ppdb/gedungwk.jpg)">
           <div class="carousel-container">
             <div class="carousel-content">
               <h2 class="animate__animated animate__fadeInDown">PPDB Wikrama <span>TP 2023-2024</span></h2>
               <p class="animate__animated animate__fadeInUp">Ayo! segera daftarkan dirimu ke SMK Wikrama Bogor dengan cara klik Pendaftaran PPDB dibawah ini!<strong>&nbsp Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong></p>
               <a href="/register" class="btn-get-started animate__animated animate__fadeInUp">Pendaftaran PPDB</a>
             </div>
           </div>
         </div>

       
       </div>

       <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
       </a>

       <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
       </a>

     </div>
   </div>
 </section><!-- End Hero -->

 <main id="main">

   <!-- ======= Featured Section ======= -->
   <section id="featured" class="featured">
     <div class="container">

       <div class="row">
         <div class="col-lg-4">
           <div class="icon-box">
             <i class="bi bi-card-checklist"></i>
             <h3><a href="">MOTTO</a></h3>
             <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>
           </div>
         </div>
         <div class="col-lg-4 mt-4 mt-lg-0">
           <div class="icon-box">
             <i class="bi bi-bar-chart"></i>
             <h3><a href="">AFIRMASI</a></h3>
             <p>Padamu negeri-kami berjanji-lulus Wikrama siap membangun negeri.</p>
           </div>
         </div>
         <div class="col-lg-4 mt-4 mt-lg-0">
           <div class="icon-box">
             <i class="bi bi-binoculars"></i>
             <h3><a href="">ATITUDE</a></h3>
             <p>Aku ada lingkunganku bahagia</p>
           </div>
         </div>
       </div>

     </div>
   </section><!-- End Featured Section -->

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
     <div class="container">

       <div class="row">
         <div class="col-lg-6">
           <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/PMN.jpg" class="img-fluid" alt="">
         </div>
         <div class="col-lg-6 pt-4 pt-lg-0 content">
           <h3>About us</h3>
           <p class="fst-italic">
             SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa.Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang.
           </p>
           {{-- <ul>
             <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
             <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
             <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
           </ul> --}}
           <p>
             Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang. SMK Wikrama Bogor membuka 7 kompetensi keahlian, diantaranya (1) Otomatisasi dan Tata Kelola Perkantoran; (2) Teknik Komputer dan Jaringan; (3) Rekayasa Perangkat Lunak; (4) Multimedia; (5) Bisnis Daring dan Pemasaran; (6) Tata Boga; dan (7) Perhotelan.
           </p>
           <div class="row icon-boxes">
             <div class="col-md-6">
             <i class="bi bi-book"></i>
               <h4>Visi & Misi</h4>
               <p>Menjadi sekolah kejuruan teladan nasional yang berbudaya lingkungan, berkarakter kebangsaan, berbasis teknologi informasi dan mampu memenuhi kebutuhan dunia kerja.</p>
             </div>
             <div class="col-md-6 mt-4 mt-md-0">
               <i class="bi bi-paperclip"></i>
               <h4>Motto</h4>
               <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah.</p>
             </div>
         </div>
       </div>

     </div>
   </section><!-- End About Section -->

   {{-- <!-- ======= Services Section ======= -->
   <section id="services" class="services">
     <div class="container">

       <div class="row">
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
           <div class="icon-box">
             <div class="icon"><i class="bx bxl-dribbble"></i></div>
             <h4><a href="">Lorem Ipsum</a></h4>
             <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
           <div class="icon-box">
             <div class="icon"><i class="bx bx-file"></i></div>
             <h4><a href="">Sed ut perspiciatis</a></h4>
             <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
           <div class="icon-box">
             <div class="icon"><i class="bx bx-tachometer"></i></div>
             <h4><a href="">Magni Dolores</a></h4>
             <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
           <div class="icon-box">
             <div class="icon"><i class="bx bx-world"></i></div>
             <h4><a href="">Nemo Enim</a></h4>
             <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
           <div class="icon-box">
             <div class="icon"><i class="bx bx-slideshow"></i></div>
             <h4><a href="">Dele cardo</a></h4>
             <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
           <div class="icon-box">
             <div class="icon"><i class="bx bx-arch"></i></div>
             <h4><a href="">Divera don</a></h4>
             <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
           </div>
         </div>

       </div>

     </div>
   </section><!-- End Services Section --> --}}

   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
     <div class="container">

       <div class="section-title">
         <h2>Kerjasama</h2>
         <p>SMK Wikrama Bogor berusaha menjadi lembaga yang berperan mengoptimalkan penyaluran tamatan SMK dan sumber informasi untuk pencari kerja. Tidak mungkin bisa dilaksanakan proses pembelajaran yang mengarah kepada kompetensi jika tidak ada pasangan industri/usaha kerja, sebagai lingkungan kerja dimana siswa belajar keahlian dan profesional serta etos kerja sesuai dengan tuntutan dunia kerja. </p>
       </div>

       <div class="clients-slider swiper">
         <div class="swiper-wrapper align-items-center">
           <div class="swiper-slide"><img src="assets/img/clients/sakura.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/velo.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/nawatech.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/nutrifood.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/immobi.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/apji.jpg" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/telkom.png" class="img-fluid" alt=""></div>
           <div class="swiper-slide"><img src="assets/img/clients/astra1.jpg" class="img-fluid" alt=""></div>
         </div>
         <div class="swiper-pagination"></div>
       </div>

     </div>
   </section><!-- End Clients Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">

   <div class="footer-newsletter">
     <div class="container">
       <div class="row">
         <div class="col-lg-6">
           <h4>Our Newsletter</h4>
           <p>Join channel kami</p>
         </div>
         <div class="col-lg-6">
           <form action="" method="post">
             <input type="email" name="email"><input type="submit" value="Subscribe">
           </form>
         </div>
       </div>
     </div>
   </div>

   <div class="footer-top">
     <div class="container">
       <div class="row">

         <div class="col-lg-3 col-md-6 footer-links">
           <h4>Useful Links</h4>
           <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
           </ul>
         </div>

         <div class="col-lg-3 col-md-6 footer-links">
           <h4>Our Services</h4>
           <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
           </ul>
         </div>

         <div class="col-lg-3 col-md-6 footer-contact">
           <h3>SMK WIKRAMA</h3>
           <p>
             Sindangsari <br>
             Bogor Utara, Kota Bogor<br>
             <br><br>
             <strong>Phone:</strong> (0251) 8242411<br>
             <strong>Email:</strong> prohumasi@smkwikrama.sch.id<br>
             <strong>Website:</strong> <a href="https://smkwikrama.sch.id/">www.smkwikrama.sch.id</a><br>
           </p>
         </div>

         <div class="col-lg-3 col-md-6 footer-info">
           <h3>About Wikrama</h3>
           <p>SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD.</p>
           <div class="social-links mt-3">
             <a href="https://twitter.com/smkwikrama" class="twitter"><i class="bx bxl-twitter"></i></a>
             <a href="https://id-id.facebook.com/smkwikrama/" class="facebook"><i class="bx bxl-facebook"></i></a>
             <a href="https://www.instagram.com/smkwikrama/?hl=id" class="instagram"><i class="bx bxl-instagram"></i></a>
             <a href="https://www.youtube.com/results?search_query=smk+wikrama+bogor" class="youtube"><i class="bx bxl-youtube"></i></a>
           </div>
         </div>

       </div>
     </div>
   </div>

   <div class="container">
     <div class="copyright">
       &copy; Copyright <strong><span>Wikrama</span></strong>. All Rights Reserved
     </div>
     <div class="credits">
       <!-- All the links in the footer should remain intact. -->
       <!-- You can delete the links only if you purchased the pro version. -->
       <!-- Licensing information: https://bootstrapmade.com/license/ -->
       <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
       Designed by <a href="https://github.com/muhamadgildannr">Gildannr</a>
     </div>
   </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

@endsection