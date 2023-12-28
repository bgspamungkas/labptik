<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Laboratorium PTIK</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/fontawesome-all.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/swiper.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/magnific-popup.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/styles.css") ?>" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url("homepage/images/UNS V1.png"); ?> ">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/keluar"><img src="<?php echo base_url('homepage/images/UNS V1.png'); ?> " height="25" alt="" loading="lazy" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#booking">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#laboratory">Laboratory</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/otentikasi">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Booking Laboratory PTIK</h1>
                            <p class="p-large">Want to Booking Laboratory ? </p>
                            <a class="btn-solid-lg page-scroll" href="/otentikasi">Login</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="homepage/images/header-software-app.png" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310">
        <defs>
            <style>
                .cls-1 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>header-frame</title>
        <path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
    </svg>
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="homepage/images/uns.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="homepage/images/Composed-Logo.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="homepage/images/uns.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="homepage/images/Composed-Logo.png" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Description -->
    <div id="booking" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Booking</div>
                    <h2 class="h2-heading">How to booking Laboratory PTIK UNS ?</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="homepage/images/description-1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Check the lab usage schedule through the search field</h4>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="homepage/images/description-2.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Register to become a member and wait for validation from the admin</h4>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="homepage/images/description-3.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Once confirmed, login and booking laboratory </h4>
                        </div>
                    </div>
                    <!-- end of card -->
                    <a class="btn-solid-lg page-scroll" href="/otentikasi">Login</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- menampilkan jadwal -->
    <div class="card shadow mb-4">
        <div class="table-responsive">
            <div class="custom-block-overlay-text d-flex">
                <div class="m-0 font-weight-bold text-primary col-12 text-center">
                    <h3 class="text-black mb-2 text-center">Jadwal Laboratorium PTIK</h3>
                    <br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ruangan</th>
                                <th>Jam Mulai</th>
                                <th>Jam Berakhir</th>
                                <th>Tanggal Digunakan</th>
                                <th>Status Ruangan</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        $tanggal_pemakaian = $_GET['tanggal_pemakaian'] ?? null; // Ambil nilai tanggal dari inputan form
                        foreach ($ruangan as $u) {
                            $tanggal_data = date('Y-m-d', strtotime($u['tanggal'])); // Ubah format tanggal
                            if ($tanggal_pemakaian && $tanggal_data !== $tanggal_pemakaian) {
                                continue; // Lewati data yang tidak sesuai dengan tanggal yang dipilih
                            }
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $u['nama_ruangan']; ?></td>
                                <td><?php echo $u['jam_mulai']; ?></td>
                                <td><?php echo $u['jam_berakhir']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($u['tanggal'])); ?></td>
                                <td>
                                    <?php
                                    switch ($u['status_jadwal']) {
                                        case 1:
                                            echo "<span class='text-success text-bold'>Sedang berlangsung...</span>";
                                            break;
                                        case 2:
                                            echo "<span class='text-primary text-bold'>Akan datang...</span>";
                                            break;
                                        case 3:
                                            echo "<span class='text-danger text-bold'>Sudah lewat, harap hapus jadwal ini..</span>";
                                        default:
                                            break;
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Features -->
    <div id="laboratory" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">FEATURES</div>
                    <h2 class="h2-heading">Laboratory PTIK part of University Sebelas Maret</h2>
                    <p class="p-heading">Take your business strategy to the next level and automatize your marketing tasks to save time for product development. Tivo can provide results in less than 2 weeks</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>Laboratory Software </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>Multimedia Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i>Laboratory Computer Network </a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="homepage/images/coding.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Laboratory Software Engineering</h3>
                                        <p>It's very easy to start using Tivo. You just need to fill out and submit the <a class="blue page-scroll" href="sign-up.html">Sign Up Form</a> and you will receive access to the app and all of its features in no more than 24h.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Create and embed on websites newsletter sign up forms</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Manage forms and landing pages for your services</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Add and remove subscribers using the control panel</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="homepage/images/mulmed.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Multimedia Studio</h3>
                                        <p>Campaigns monitoring is a feature we've developed since the beginning because it's at the core of Tivo and basically to any marketing activity focused on results.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Easily plan campaigns and schedule their starting date</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Start campaigns and follow their evolution closely</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Evaluate campaign results and optimize future actions</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="homepage/images/jaringan.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Laboratory Computer Network and Instrumentation</h3>
                                        <p>Analytics control panel is important for every marketing team so it's beed implemented from the begging and designed to produce reports based on very little input information.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">If you set it up correctly you will get acces to great intel</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Easy to integrate in your websites and landing pages</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">The generated reports are important for your strategy</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->

    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
        <defs>
            <style>
                .cls-2 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>footer-frame</title>
        <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)" />
    </svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>About Us </h4>
                        <p class="p-small">Laboratory PTIK part of University Sebelas Maret</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Jl. A. Yani No.200, Dusun II, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57161, Indonesia</div>
                                <!-- <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.144545460616!2d110.77181747504986!3d-7.559214292454665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14450edd210d%3A0xa6ea1f9494841e84!2sFKIP%20JPTK%20UNS%20Kampus%20V!5e0!3m2!1sid!2sid!4v1698589552254!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div> -->
                            </li>
                            <!-- <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@tivo.com">contact@tivo.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.tivo.com</a></div>
                            </li> -->
                        </ul>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2023</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?php echo base_url("homepage/js/jquery.min.js") ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url("homepage/js/popper.min.js") ?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url("homepage/js/bootstrap.min.js") ?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url("homepage/js/jquery.easing.min.js") ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url("homepage/js/swiper.min.js") ?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url("homepage/js/jquery.magnific-popup.js") ?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url("homepage/js/validator.min.js") ?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url("homepage/js/scripts.js") ?>"></script> <!-- Custom scripts -->
</body>

</html>