<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        Welcome | Absensi App
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_URL(); ?>assets/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_URL(); ?>assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_URL(); ?>assets/css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_URL(); ?>assets/favicon.ico" />
    <style>
    #mobile-view {
        display: none;
    }

    @media (max-width: 992px) {
        #mobile-view {
            display: flex;
            justify-content: center;
        }
    }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="./">
                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/logo-cover.png" width="150px"
                            alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">SOP </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="furniture.html"> Furniture </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-view" href="login">Login</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="?hlm=login">
                                <img loading="lazy" src="images/user.png" alt="">
                                <span>
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">
                                </span>
                                <span class="s-2">
                                </span>
                                <span class="s-3">
                                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="scan">
                    <img loading="lazy" src="<?= base_URL(); ?>assets/images/play.png" alt="">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            System
                                            <span>
                                                Absensi
                                            </span>
                                        </h1>
                                        <p>
                                            Sederhanakan Pencatatan Absensi Sekolah dan Tingkatkan Efisiensi dengan
                                            Solusi Yang Inovatif!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/slide-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Modern
                                            <span>
                                                & Canggih
                                            </span>
                                        </h1>
                                        <p>
                                            Optimalkan pengelolaan absensi sekolah Anda dengan sistem absensi yang
                                            menggunakan teknologi modern dan canggih!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/slide-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Easy
                                            <span>
                                                & Fun
                                            </span>
                                        </h1>
                                        <p>
                                            Absen menggunakan Kartu Pelajar lebih praktis dan menyingkat waktu, serta
                                            memberi pengalaman menyenangkan bagi Siswa!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/slide-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Sekolah
                                            <span>
                                                Modern 2.0
                                            </span>
                                        </h1>
                                        <p>
                                            Memajukan Pendidikan modern 2.0 dengan Teknologi Revolusioner & mendukung
                                            Efesiensi Pengarsipan Absen Siswa!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/slide-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>
   <!-- Section cari siswa -->
<section class="about_section layout_padding">
    <div class="container">
        <h2 style="text-align: center;">Pencarian Data Siswa</h2>
        <form method="GET" action="" class="search-form">
            <input type="text" name="keyword" placeholder="Masukkan kata kunci pencarian">
            <input type="submit" value="Cari">
        </form>
        <?php
        // Data siswa
        $siswa = array(
            array('No' => '1', 'Nama' => 'John Doe', 'Kelas' => 'XII A', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-01'),
            array('No' => '2', 'Nama' => 'Jane Smith', 'Kelas' => 'XI B', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-02'),
            array('No' => '3', 'Nama' => 'David Williams', 'Kelas' => 'X A', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-03')
        );

        // Cek apakah terdapat kata kunci pencarian
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];

            // Filter data siswa berdasarkan kata kunci
            $filtered_siswa = array_filter($siswa, function ($item) use ($keyword) {
                return (stripos($item['No'], $keyword) !== false) ||
                    (stripos($item['Nama'], $keyword) !== false) ||
                    (stripos($item['Kelas'], $keyword) !== false) ||
                    (stripos($item['Absen'], $keyword) !== false) ||
                    (stripos($item['Tanggal Absen'], $keyword) !== false);
            });

            // Tampilkan data siswa yang terfilter
            if (!empty($filtered_siswa)) {
                echo '<table>';
                echo '<tr><th>No</th><th>Nama</th><th>Kelas</th><th>Absen</th><th>Tanggal Absen</th></tr>';
                foreach ($filtered_siswa as $siswa) {
                    echo '<tr>';
                    echo '<td>' . $siswa['No'] . '</td>';
                    echo '<td>' . $siswa['Nama'] . '</td>';
                    echo '<td>' . $siswa['Kelas'] . '</td>';
                    echo '<td>' . substr($siswa['Absen'], 0, 1) . '</td>';
                    echo '<td>' . $siswa['Tanggal Absen'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo 'Data siswa tidak ditemukan.';
            }
        }
        ?>
    </div>
</section>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tentang Kami
                            </h2>

                        </div>
                        <p style="text-align: justify;">
                            Temukan Potensi Terbaikmu di Sekolah Kami! Kami adalah sekolah yang berdedikasi untuk
                            memberikan pendidikan yang inspiratif,
                            berkualitas, dan inklusif. Dengan staf pengajar yang berpengalaman dan peduli, kami
                            berkomitmen untuk mencetak generasi muda yang cerdas, kreatif, dan berintegritas.
                            Kurikulum kami didesain untuk mengembangkan potensi siswa secara holistik, baik dalam bidang
                            akademik maupun karakter. Fasilitas modern kami menciptakan lingkungan belajar yang
                            kondusif, memberikan siswa pengalaman belajar yang nyaman dan menarik. Kami juga menawarkan
                            beragam kegiatan ekstrakurikuler yang memperkaya pengalaman siswa dalam bidang seni,
                            olahraga, dan kegiatan sosial. Bergabunglah dengan kami dan jadilah bagian dari komunitas
                            yang mendukung perkembangan penuh potensi siswa.
                            Daftarkan dirimu sekarang dan mulailah perjalanan menuju masa depan yang sukses! </p>
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img loading="lazy" src="<?= base_URL(); ?>images/cover/tentang.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- trending section -->

    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Sering Terlambat Bulan ini
                                </h2>
                            </div>
                            <div class="tab_container">
                                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <div class="number">
                                        <h5>
                                            01
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Yoga
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="number">
                                        <h5>
                                            02
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Rina
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <div class="number">
                                        <h5>
                                            03
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Yogi
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            04
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Rani
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>assets/images/telat1.jpg"
                                            style="width: 300px; " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>assets/images/telat2.jpg"
                                            style="width: 300px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>assets/images/telat3.jpg"
                                            style="width: 300px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img loading="lazy" src="<?= base_URL(); ?>assets/images/telat4.jpg"
                                            style="width: 300px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end trending section -->

    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container ">
            <div class="heading_container">
                <h2 class="">
                    Hubungi Kami
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <form method="post" action="proses_form.php">
                <!-- Isi form di sini -->
                    <div>
                        <input type="text" placeholder="Nama" name="nama" required />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div>
                        <input type="text" placeholder="No Telepon" name="no_telepon" required />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Tulis Pesan" />
                    </div>
                    <div class="d-flex">
                        <button type="submit" name="submit">KIRIM</button>
                    </div>
            </form>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8291865534916!2d111.92140207424845!3d-7.260272271328159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e782b12c820314d%3A0x9ed7d5c71ba0009e!2sMA%20Al-Abror%20Sukosewu!5e0!3m2!1sid!2sid!4v1687599301770!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_logo">
                <h2>
                    Absensi Siswa
                </h2>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="info_contact">
                        <h5>
                            Tentang Kami
                        </h5>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/location-white.png"
                                    width="18px" alt="">
                            </div>
                            <p>
                                Jl Raya Sukosewu No. 147 
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/telephone-white.png"
                                    width="12px" alt="">
                            </div>
                            <p>
                            0822-4749-2922
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/envelope-white.png"
                                    width="18px" alt="">
                            </div>
                            <p>
                            maalabrorsukosewu00@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info_info">
                        <h5>
                            Informasi
                        </h5>
                        <p>
                            Adalah salah satu satuan pendidikan dengan jenjang MA di Sukosewu, Kec. Sukosewu, Kab. Bojonegoro, Jawa Timur. Dalam menjalankan kegiatannya, MAS AL ABROR berada di bawah naungan Kementerian Agama.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info_form ">
                        <h5>
                            Sosial Media
                        </h5>

                        <div class="social_box">
                            <a href="https://www.instagram.com/malabrortv/?hl=id">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/instagram.png" alt="malabrortv">
                            </a>
                            <a href="https://www.tiktok.com/@malabrortv?_t=8dQoJthbEYs&_r=1">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/tiktok.png" alt="@malabrortv">
                            </a>
                            <a href="https://www.youtube.com/@malabror_tv">
                                <img loading="lazy" src="<?= base_URL(); ?>assets/images/youtube.png" alt="malabror_tv">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; 2019 All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->

    <script type="text/javascript" src="<?= base_URL(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_URL(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            1000: {
                items: 5
            }
        }

    });
    </script>
    <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function(e) {

        e.preventDefault();
        nav.toggleClass("lg_nav-toggle");
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
    </script>
    <script>
    $('.carousel').on('slid.bs.carousel', function() {
        $(".indicator-2 li").removeClass("active");
        indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
    })
    </script>

</body>
</body>

</html>