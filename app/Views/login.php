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
    <link href="<?php echo base_url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext") ?> rel=" stylesheet">
    <link href="<?php echo base_url("homepage/css/bootstrap.css")  ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/fontawesome-all.css")  ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/swiper.css")  ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/magnific-popup.css")  ?>" rel="stylesheet">
    <link href="<?php echo base_url("homepage/css/styles.css")  ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url("homepage/images/UNS V1.png") ?>" />

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url("homepage/images/UNS V1.png"); ?> ">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="#"><img src="homepage/images/UNS V1.png" alt="alternative"></a>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div id="viewmodal">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sign In</h1>
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
                                    <input type="text" class="form-control-input" id="lemail" name="username" placeholder="Username" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control-input" id="lpassword" name="password" placeholder="Password" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember-me">
                                            Keep me signed in
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">Sign In</button>
                                </div>
                                <div class="form-message">
                                    <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                                <div class="text-center mt-4 fw-light">
                                    You don't have a account? Then please <a href="#" id="signup" onclick="signup()" class="text-primary">Sign Up</a>
                                </div>
                            </form>
                        </div>
                        <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="<?php echo base_url("homepage/js/jquery.min.js") ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url("homepage/js/popper.min.js") ?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url("homepage/js/bootstrap.min.js") ?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url("homepage/js/jquery.easing.min.js") ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url("homepage/js/swiper.min.js") ?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url("homepage/js/jquery.magnific-popup.js") ?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url("homepage/js/validator.min.js") ?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url("homepage/js/scripts.js") ?>"></script> <!-- Custom scripts -->

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