<?php
include("koneksi.php");

// SELECT DATA FROM DATABASE
$sql = "SELECT * FROM chart_news";
$result2 = $conn->query($sql);

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TechReview News</title>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor Adobe Premiere Pro Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main Adobe Premiere Pro File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">TechReview</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">News</a></li>
                    <li><a class="nav-link scrollto" href="login.php" onclick="return confirmNavigation()"" class=" details-link" title="More Details"><i></i>Review</a></li>
                    <br>
                    <li class="dropdown"><a href="#"><span>Masuk</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="login.php">Sign In</a></li>
                            <li><a href="register.php">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>News</li>
                </ol>
                <h2>Berita Smartphone Terbaru!</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <section id="news" class="services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <br>
                            <h2>Tech Review News</h2>
                            <p>Kabar baik buat penggemar smartphone! Jika kamu tak sabar menantikan yang terbaru,
                                sementara ini
                                cobalah menyapa smartphone lama dengan penuh kasih sayang. Siapa tahu dia akan
                                memberikan sinyal
                                yang lebih baik sebagai ungkapan terima kasih!</p>
                        </div>

                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All News</li>
                            <!-- <li data-filter=".filter-app">Terbaru</li>
                            <li data-filter=".filter-card">Terlama</li> -->
                        </ul>

                        <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Vivo X90 News.php">Vivo X90 News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/VivoX90_News.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>vivo X90 gets May 2023 Android security patch and camera optimizations with new software
                                update</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Galaxy Z Fold5 News.php">Galaxy Z Fold5 News</a>
                            </h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/Galaxy Z Fold5_News.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Galaxy Z Fold5 and Z Flip5 may get separate launch event for North America in August</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Infinix Note 30 5G.php">Infinix Note 30 News</a>
                            </h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_000.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Infinix Note 30 5G with bypass charging to be priced under INR 15000 in India</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Vivo.php">Vivo News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_01.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>vivo closes its German online store</p>
                        </div>
                    </div>

                </div>
                <br>

                <div class="container" data-aos="fade-up"></div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Galaxy S23 FE.php">Galaxy S23 News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_002.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Galaxy S23 FE battery certification suggests approaching announcement</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Apple's Vision Pro.php">Apple News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_003.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Mark Zuckerberg shares his thoughts on the Apple's Vision Pro</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Realme 11 Pro.php">Realme 11 Pro News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_004.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Realme 11 Pro in for review</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <h4 class="text-center"><a href="in-news-Android 14 Beta.php">Android 14 News</a></h4>
                            <div class="col-lg-14">
                                <img src="assets/img/clients/gsmarena_005.png" class="img-fluid" alt="">
                            </div>
                            <br>
                            <p>Android 14 Beta 3 packs new stylus-specific features</p>
                        </div>
                    </div>

                </div>
                        <br>

                        <div class="container" data-aos="fade-up"></div>
                        <br>
                </section>

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
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#review">Review</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#review">Video</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#footer">Kontak</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Top Brand Review</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.apple.com/id/">Apple</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.samsung.com/id/smartphones/galaxy-a/galaxy-a04e-light-blue-32gb-sm-a042flbdxid/buy/?cid=id_pd_display_forkmediaasia_a04e_sustenance_046-mx-a04e-23q2-ss-r8-fork-none-w-broad-static-300x250-promotional_image_300x250_20230511_none">Samsung</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://event.mi.co.id/id/Xiaomi66MegaSalesDay?utm_campaign=micom_id&utm_channel=search&utm_source=google&utm_medium=paid-search&utm_type=1&utm_content=66sale&utm_id=588&gad=1&gclid=CjwKCAjwvpCkBhB4EiwAujULMrqaYtGvpskEC4cEtoCmZcDS4bxihMFqAG7xTsByebIB69kgklX0SRoC8J0QAvD_BwE">Xiaomi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.asus.com/id/laptops/for-home/zenbook/filter?Series=Zenbook&SubSeries=Zenbook-Pro,Zenbook-S,Zenbook,Zenbook-Flip,Zenbook-Duo&utm_source=google&utm_source=google&utm_medium=cpc&utm_campaign=23q2_zenbooksemaon_05210630_js&gclid=CjwKCAjwvpCkBhB4EiwAujULMoIgEvGHzqXBcViV-2LZ-LfsQc1VrfhfsVbg5NAX_G6H2DxFCZKM1BoCBSwQAvD_BwE">Asus</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Kenal kami lebih dalam agar bisa mendapat informasi seputar Tech Review lebih cepat </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/?lang=id" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://id-id.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://myaccount.google.com/profile" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=0CAIQw7AJahcKEwjw86ijnrn_AhUAAAAAHQAAAAAQAw&url=https%3A%2F%2Fid.linkedin.com%2F&psig=AOvVaw16dO8DSS3cmqb-1_vYl7-7&ust=1686504826063969" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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