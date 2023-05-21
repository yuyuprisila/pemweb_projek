<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TAAM - DARURRAHMAH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="index.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <!-- <i class="flaticon-043-teddy-bear"></i> -->
                <img style="align-content: center;" src="img/Logo.png" href="index.php">    
                <span class="text-primary">DARURRAHMAH</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">Profil</a>
                    <a href="team.php" class="nav-item nav-link">Pengajar</a>
                    <a href="gallery.php" class="nav-item nav-link active">Galeri</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.php" class="dropdown-item">Blog Kilasan</a>
                            <a href="single.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Kontak</a>
                </div>
                <a href="class.php" class="btn btn-primary px-4">Daftar sekarang</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Galeri</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Galeri</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container"> 
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Galeri Kami</span></p>
                <h1 class="mb-4">Foto Kegiatan</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">Semua</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Bermain</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Kreatif</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Belajar</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Playing1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Playing1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Kreatif1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Kreatif1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Belajar1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Belajar1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Playing2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Playing2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Kreatif2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Kreatif2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/Belajar2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/Belajar2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.php" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 25px; line-height: 40px;">
                    <!-- <i class="flaticon-043-teddy-bear"></i> -->
                    <img style="align-content: center;" src="img/Logo.png" href="index.php">    
                    <span class="text-white">DARURRAHMAH</span>
                </a>
                <p>Kami selalu terbuka untuk melayani pertanyaan dan saran dari Orang Tua, silakan sampaikan melalui media sosial kami.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://youtube.com/@taamdarurrahmah4259"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Tetap Terhubung</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Alamat</h5>
                        <p>Jl. Ir. Haji Juanda Gg. Makam No.4, Sarimulya, Kec. Kota Baru, Kabupaten Karawang, Jawa Barat 41374</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>taamdarurrahmah@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Telepon</h5>
                        <p>+6281310564107</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Tautan</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>Profil</a>
                    <a class="text-white mb-2" href="team.php"><i class="fa fa-angle-right mr-2"></i>Pengajar</a>
                    <a class="text-white mb-2" href="gallery.php"><i class="fa fa-angle-right mr-2"></i>Galeri</a>
                    <a class="text-white mb-2" href="blog.php"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="index.php">DARURRAHMAH</a>. All Rights Reserved. Designed
                by KelompokD08
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>