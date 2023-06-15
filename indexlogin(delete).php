<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TechReview</title>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                    <li><a class="nav-link scrollto" href="#video">Video</a></li>
                    <li><a class="nav-link scrollto" href="#">
                            <?php
                        session_start();
                        if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
                            $email = $_SESSION['email'];
                            echo "$email";
                        } else {
                            header("Location: login.php");
                            exit();
                        }
                        ?>
                        </a></li>
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
                        <a href="#" class="btn-get-started scrollto">Teknologi Viral</a>
                        <p>
                            <a href="https://www.youtube.com/watch?v=D-DVGjTwuxo" class="glightbox btn-watch-video"><i
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



                <div class="card-body">
                    <div id="chartContainer2" style="width: 700px; height: 600px;"></div>
                    <div>
                        <canvas id="myAreaChart"></canvas>
                        <script>
                                                            <?php
                                                            // Mendapatkan data utama dari database MySQL
                                                            include 'koneksi.php';
                                                            include 'ambil_click.php';
                                                            ?>

                                                            // Membuat grafik dengan interaksi drilldown
                                                            var chart = Highcharts.chart('chartContainer2', {
                                                                chart: {
                                                                    type: 'column',
                                                                    options3d: {
                                                                        enabled: true,
                                                                        alpha: 15,
                                                                        beta: 15,
                                                                        depth: 50,
                                                                        viewDistance: 25,
                                                                        frame: {
                                                                            bottom: { size: 1, color: 'rgba(0,0,0,0.02)' },
                                                                            back: { size: 1, color: 'rgba(0,0,0,0.04)' },
                                                                            side: { size: 1, color: 'rgba(0,0,0,0.06)' }
                                                                        }
                                                                    }
                                                                },
                                                                title: {
                                                                    text: 'Jumlah Click Tiap Brand',
                                                                    style: {
                                                                        fontSize: '18px',
                                                                        fontWeight: 'bold'
                                                                    }
                                                                },
                                                                plotOptions: {
                                                                    series: {
                                                                        dataLabels: {
                                                                            enabled: true,
                                                                            style: {
                                                                                fontSize: '12px'
                                                                            }
                                                                        },
                                                                        depth: 25,
                                                                        borderColor: 'transparent'
                                                                    }
                                                                },
                                                                legend: {
                                                                    enabled: false
                                                                },
                                                                xAxis: {
                                                                    categories: <?php echo json_encode($nama_konten); ?>,
                                                                title: {
                                                                    text: 'Brand',
                                                                    style: {
                                                                        fontSize: '14px'
                                                                    }
                                                                },
                                                                labels: {
                                                                    style: {
                                                                        fontSize: '12px'
                                                                    }
                                                                }
                                                            },
                                                                yAxis: {
                                                                title: {
                                                                    text: 'Jumlah Click',
                                                                    style: {
                                                                        fontSize: '14px'
                                                                    }
                                                                },
                                                                labels: {
                                                                    style: {
                                                                        fontSize: '12px'
                                                                    }
                                                                }
                                                            },
                                                                series: [{
                                                                    name: 'Click',
                                                                    colorByPoint: true,
                                                                    data: mainChartDataC
                                                                }]
                                                    });
                        </script>
                    </div>
                </div>


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
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=1&nama_konten=asus">dsa Development</a></h4>
                            <p>Website Development: Pembuatan dan pengembangan situs web dengan bahasa pemrograman
                                seperti HTML, CSS, dan JavaScript.</p>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=2&nama_konten=faa">Mobile Development</a></h4>
                            <p>Mobile Development: Pembuatan dan pengembangan aplikasi seluler dengan bahasa pemrograman
                                seperti Java, Kotlin, dan Swift.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=3">Data Science</a></h4>
                            <p>Data Science: Pengumpulan, analisis, dan interpretasi data menggunakan teknik dan
                                algoritma statistik dengan bahasa pemrograman seperti Python dan R.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=4">Design Expert</a></h4>
                            <p>Expert Design: Pembuatan desain yang menarik, fungsional, dan efektif dengan menggunakan
                                alat seperti Adobe Photoshop dan Illustrator.</p>
                        </div>
                    </div>

                </div>
                <br>

                <div class="container" data-aos="fade-up"></div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=5">Website Development</a></h4>
                            <p>Website Development: Pembuatan dan pengembangan situs web dengan bahasa pemrograman
                                seperti HTML, CSS, dan JavaScript.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=6">Mobile Development</a></h4>
                            <p>Mobile Development: Pembuatan dan pengembangan aplikasi seluler dengan bahasa pemrograman
                                seperti Java, Kotlin, dan Swift.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=7">Data Science</a></h4>
                            <p>Data Science: Pengumpulan, analisis, dan interpretasi data menggunakan teknik dan
                                algoritma statistik dengan bahasa pemrograman seperti Python dan R.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="rekam_klik.php?konten_id=8">Design Expert</a></h4>
                            <p>Expert Design: Pembuatan desain yang menarik, fungsional, dan efektif dengan menggunakan
                                alat seperti Adobe Photoshop dan Illustrator.</p>
                        </div>
                    </div>

                </div>

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
                        <a class="cta-btn align-middle" href="#">More News</a>
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

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
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
                        <a class="cta-btn align-middle" href="#">More Videos</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Test ======= -->

        <!-- <br>
        <section id="video" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Video</h2>
                    <p>Di dunia teknologi, review adalah sahabat sejati, Menyuguhkan informasi yang berharga dan tak
                        terganti. Dari smartphone hingga laptop, semua ada di sini, Mari kita berkelana dan temukan yang
                        terbaik untuk kita..</p>
                </div>

                <div class="row g-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="icon-box">
                            <div class="icon"><i class="size_gambar"></i></div>
                                <a href="https://www.youtube.com/watch?v=BGAw92G3hJk" target="_blank">
                                    <img src="https://img.youtube.com/vi/BGAw92G3hJk/maxresdefault.jpg"
                                        alt="Video Thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="size_gambar"><i class="size_gambar"></i></div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BGAw92G3hJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="size_gambar"><i class="size_gambar"></i></div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BGAw92G3hJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>    
                </div>
                    </div>    
                </div>
            </div>
        </section> -->


        <!-- <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider">
                            <a href="https://www.youtube.com/watch?v=BGAw92G3hJk" target="_blank">
                                <img src="https://img.youtube.com/vi/BGAw92G3hJk/maxresdefault.jpg"
                                    alt="Video Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="video" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider">
                            <a href="https://www.youtube.com/watch?v=BGAw92G3hJk" target="_blank">
                                <img src="https://img.youtube.com/vi/BGAw92G3hJk/maxresdefault.jpg"
                                    alt="Video Thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ======= Test ======= -->

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
                            <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active"
                                    href="#">Review</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Video</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active"
                                    href="#">Kontak</a></li>
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