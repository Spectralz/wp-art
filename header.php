<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<head>
    <base href="<?php echo home_url(); ?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Watch shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/castom.css">
</head>

<body>

<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="/"><?php _e( 'Главная', 'rus');?></a></li>
                                <li><a href="/blog/"><?php _e( 'Блог', 'rus');?></a></li>
                                <li><a href="/news/"><?php _e( 'Новости', 'rus');?></a></li>
                                <li><a href="/contact/"><?php _e( 'Контакты', 'rus');?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                            <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>