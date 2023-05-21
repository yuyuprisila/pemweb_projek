<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
  header("location:../class.php?message=silahkan login terlebih dahulu");
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("location:../class.php?message=keluar dari akun");
}

?>

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
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">DARURRAHMAH</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                </div>
                <form action="" method="POST">
                    <a name='logout' href="logout.php" class="btn btn-primary px-4" type="submit">Keluar</a>
                </form>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">PENDAFTARAN</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Pendaftaran</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card border-0">
                        <p class="section-title pr-5"><span class="pr-2">Data Diri Peserta Didik</span></p>
                        <h1 class="mb-5">Lengkapi data dibawah ini</h1>
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Peserta Didik</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="id_peserta" placeholder="ID Peserta" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="nama" placeholder="Nama Peserta" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control border-0 p-4" name="umur" placeholder="Umur" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="tempat_lhr" placeholder="Tempat Lahir" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="date" name="ttl" class="form-control border-0 p-4"  required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="jk">
                                        <option required="required" selected>Gender</option>
                                        <option value="P">Perempuan</option>
                                        <option value="L">Laki-laki</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" name="kelas" style="height: 47px;" >
                                        <option required="required" selected >Pilih Kelas</option >
                                        <option value="a">Kelas A</option>
                                        <option value="b">Kelas B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="namawali" placeholder="Nama Orang Tua" required="required" />
                                </div>
                                <div class="form-group" for="option">
                                    <select name="pekerjaan_ortu" id="option" onchange="showInput()" class="custom-select border-0 px-4" style="height: 47px;" >
                                        <option required="required" selected>Pekerjaan Orang Tua</option>
                                        <option value="pns">Pegawai Negeri Sipil (PNS)</option>
                                        <option value="swasta">Swasta</option>
                                        <option value="wiraswasta">Wiraswasta</option>
                                        <option value="pengusaha">Pengusaha</option>
                                        <option value="petani">Petani</option>
                                        <option value="ptt">Pegawai Tidak Tetap (PTT)</option>
                                        <option value="pengajar">Tenaga Pengajar</option>
                                        <option value="tidakbekerja">Tidak Bekerja</option>
                                        <option required="required" value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div id="input-container" class="form-group" style="display: none;">
                                    <label for="other-option">Masukkan opsi lainnya:</label>
                                    <input type="text" id="other-option"  name="pekerjaan_lainnya" required="required">
                                </div>
                                <script>
                                    function showInput() {
                                        var select = document.getElementById("option");
                                        var inputContainer = document.getElementById("input-container");
                                        var selectedOption = select.options[select.selectedIndex].value;
                                        
                                        if (selectedOption === "lainnya") {
                                            inputContainer.style.display = "block";
                                            document.getElementById("other-option").readOnly = false;
                                        } else {
                                            inputContainer.style.display = "none";
                                            document.getElementById("other-option").readOnly = true;
                                        }
                                    }
                                </script>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="alamat" placeholder="Alamat" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="_kirim" value="KIRIM DATA DIRI" class="btn btn-primary mt-1 py-2 px-8">
                                </div>
                                <!-- <button class="btn btn-primary mt-1 py-2 px-8" name="_kirim" type = 'submit'>KIRIM DATA DIRI</button> -->
                            </form>
                        </div>
                    </div>
                    <?php
                    include("../database.php");
                    
                    if (isset($_POST['_kirim'])) {
                        
                        global $conn;

                        $no_hp = $_SESSION['no_hp'];

                        $id_peserta = $_POST["id_peserta"];
                        $nama = $_POST["nama"];
                        $umur = $_POST["umur"];
                        $tempat_lhr = $_POST["tempat_lhr"];
                        $ttl = $_POST["ttl"];
                        $jk = $_POST["jk"];
                        $kelas = $_POST["kelas"];
                        $namawali = $_POST["namawali"];
                        $pekerjaan_ortu = $_POST["pekerjaan_ortu"];
                        if ($pekerjaan_ortu === 'lainnya') {
                            $pekerjaan_lainnya = $_POST['pekerjaan_lainnya']; // Mendapatkan nilai pekerjaan_lainnya dari input teks
                            // Memperbarui nilai pekerjaan_ortu dengan pekerjaan_lainnya
                            $pekerjaan_ortu = $pekerjaan_lainnya;
                        }
                        $alamat = $_POST["alamat"];
                        
                        $check_data = "SELECT nama FROM peserta WHERE no_hp=$no_hp AND nama='$nama'";
                        $check = $conn->query($check_data);
                        
                        if ($check->num_rows > 0) {
                            echo "<script>alert('Data Anak sudah ada');
                            document.location.href = 'registrasi.php'</script>";
                        } else {

                            $sql = "INSERT INTO peserta (id_peserta, nama, umur, tempat_lhr, ttl, jk, kelas, namawali, pekerjaan_ortu, alamat, no_hp) VALUES ('$id_peserta', '$nama', '$umur', '$tempat_lhr', '$ttl', '$jk', '$kelas', '$namawali', '$pekerjaan_ortu', '$alamat', '$no_hp')";
                            mysqli_query($conn, $sql);

                            $kirim = "SELECT * FROM peserta WHERE no_hp=$no_hp AND nama='$nama'";
                            $result = $conn->query($kirim);

                            while ($row = $result->fetch_assoc()) {
                                $_SESSION['id_peserta'] = $row['id_peserta'];
                            }

                            if (mysqli_affected_rows($conn)) {
                                echo "<script>alert('Update Data Berhasil, Silahkan Isi Berkas terlebih dahulu');
                                document.location.href = 'aploadokumen.php'</script>";
                            } else {
                                echo "<script>alert('Update Data Gagal, Silahkan Isi Kembali');
                                document.location.href = 'registrasi.php'</script>";
                            }
                        }

                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">KidKinder</span>
                </a>
                <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
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