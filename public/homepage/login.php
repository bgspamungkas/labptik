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
    <title>Login Lab Peminjaman PTIK</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/bootstrap.css")  ?>>
    <link href=" <?php echo base_url("homepage/css/fontawesome-all.css")  ?>>
    <link href="<?php echo base_url("homepage/css/swiper.css")  ?>>
    <link href=" <?php echo base_url("homepage/css/magnific-popup.css")  ?>>
    <link href="<?php echo base_url("homepage/css/styles.css")  ?>>

    <!-- Favicon  -->
    <link rel=" icon href="homepage/images/favicon.png">
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
            <a class="navbar-brand logo-image" href="homepage/index.html"><img src="images/logo.svg" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#pricing">PRICING</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">LOG IN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Log In</h1>
                    <p>You don't have a password? Then please <a href="#" id="signup" onclick="signup()" class="text-primary">Sign Up</a></p>

                    <?php if (session()->getFlashdata('pesan') != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('sukses') != '') { ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('sukses'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('eror1') != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('eror1'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('eror2') != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('eror2'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('eror3') != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('eror3'); ?>
                        </div>
                    <?php } ?>
                    <?php if (session()->getFlashdata('eror4') != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('eror4'); ?>
                        </div>
                    <?php } ?>
                    <form class="pt-3 validate-form" method="POST" action="/masuk">

                        <!-- Sign Up Form -->
                        <div class="form-container">
                            <form id="logInForm" data-toggle="validator" data-focus="false">
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="lemail" required>
                                    <label class="label-control" for="lemail">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="lpassword" required>
                                    <label class="label-control" for="lpassword">Password</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">LOG IN</button>
                                </div>
                                <div class="form-message">
                                    <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </form>
                        </div> <!-- end of form container -->
                        <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="<?php echo base_url("homepage/js/jquery.min.js") ?>></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src=" <?php echo base_url("homepage/js/popper.min.js") ?>></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url("homepage/js/bootstrap.min.js") ?>></script> <!-- Bootstrap framework -->
    <script src=" <?php echo base_url("homepage/js/jquery.easing.min.js") ?>></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url("homepage/js/swiper.min.js") ?>></script> <!-- Swiper for image and text sliders -->
    <script src=" <?php echo base_url("homepage/js/jquery.magnific-popup.js") ?>></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url("homepage/js/validator.min.js") ?>></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src=" <?php echo base_url("homepage/js/scripts.js") ?>></script> <!-- Custom scripts -->

    <!-- Modal Register -->
    <script>
        function signup() {
            $.ajax({
                url: "<?= base_url('/signup') ?>",
                dataType: "json",
                success: function(response) {
                    $('#viewmodal').html(response.data).show();
                    $('#daftarmodal').modal('show');
                }
            });

        };
    </script>
</body>

</html>