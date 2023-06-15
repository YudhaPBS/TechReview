<?php
include("koneksi.php");

// SELECT DATA FROM DATABASE
$sql = "SELECT * FROM chart_hp";
$sql2 = "SELECT * FROM chart_news";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TechReview</title>
    <script>
        function confirmNavigation() {
            var result = confirm("Anda perlu login terlebih dahulu untuk mengakses kursus ini. Lanjutkan ke halaman login?");
            if (result) {
                window.location.href = "#";
            } else {
                return false;
            }
        }
    </script>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="#">TechReview</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto " href="#news">News</a></li>
                    <li><a class="nav-link scrollto" href="#review">Review</a></li>
                    <br>
                    <li class="dropdown"><a href="#"><span><?php echo $_SESSION['username']; ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Mau Beli Smartphone Baru Tapi Bingung Mau Yang Mana?</h1>
                    <h2>TechReview Membantu Anda Untuk Memilih dan Membandingkan Smartphone Yang Ingin Anda Beli.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="https://youtu.be/IjN3FWoXHjQ" class="btn-get-started scrollto">Teknologi Viral</a>
                        <p>
                            <a href="https://youtu.be/IjN3FWoXHjQ" class="glightbox btn-watch-video"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Cliens Section -->

        <section id="news" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>News</h2>
                    <p>Perlu diingat bahwa perkembangan teknologi terus berlangsung dengan cepat, jadi pastikan untuk
                        mengikuti berita terbaru untuk mendapatkan informasi yang lebih mendalam tentang tren dan
                        inovasi terkini.</p>
                </div>

                <div class="row">
                    <?php
                    while($row = $result2->fetch_assoc()) {
                    ?>
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="berita.php?id=<?php echo $row['id'] ?>"><?php echo $row['judul'] ?></a></h4>
                            <div class="col-lg-14">
                                <img src="<?php echo $row['url_gambar'] ?>" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p><?php echo $row['deskripsi'] ?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <br>
            </div>
            <br>
        </section>

        <!-- ======= Cta Section ======= -->
        <section id="news" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Mari Membaca Berita Bersama</h3>
                        <p> "Saat kita membaca review teknologi, mari kita selami dunia inovasi yang menakjubkan ini dan
                            merasakan kegembiraan seperti anak kecil yang baru mendapatkan mainan baru!"</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="news.php">More News</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Portfolio Section ======= -->
        <br>
        <section id="review" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Review</h2>
                    <p>Di dunia teknologi, review adalah sahabat sejati, Menyuguhkan informasi yang berharga dan tak
                        terganti. Dari smartphone hingga laptop, semua ada di sini, Mari kita berkelana dan temukan yang
                        terbaik untuk kita..</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All Brand</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="<?php echo $row['url_gambar'] ?>" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4> <?php echo $row['nama'] ?></h4>
                            <p>Review</p>
                            <a href="<?php echo $row['url_video'] ?>" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Review"><i class="bx bx-plus"></i></a>
                            <a href="produk.php?id=<?php echo $row['id_produk'] ?>" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            </div>
        </section>

        <!-- ======= Cta Section ======= -->
        <section id="news" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Mari Melihat Product Smartphone Bersama</h3>
                        <p> "Seperti melihat lukisan yang hidup, HP ini menyuguhkan layar yang memukau dan performa yang
                            tak tertandingi. Satu kata: spektakuler!"</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="brand.php">More Review</a>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <br>
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Tech Review</h3>
                        <p>
                            Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur <br><br>
                            <strong>Phone:</strong> +62 813 9999 9999<br>
                            <strong>Email:</strong> techreview@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#news">News</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active"
                                    href="#review">Review</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Video</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active"
                                    href="#">Beranda</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Top Brand Review</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Apple</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Samsung</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Xiaomi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Asus</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Kenal kami lebih dalam agar bisa mendapat informasi seputar Tech Review lebih cepat </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Tech Review</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>