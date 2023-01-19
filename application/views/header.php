<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('library/images/favicon.png'); ?>">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/meanmenu.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('library/includes/plugin/fancybox/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/plugin/masonry/labs.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/plugin/masonry/masonry.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('library/includes/plugin/owl-carousel/owl.carousel.css'); ?>" />

    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/default.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/custom.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('library/includes/css/media.css'); ?>">

    <script src="<?php echo base_url('library/includes/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('library/admin/js/jquery.validate.js'); ?>"></script>
</head>
<body>
    <!-- header-start -->
    <header id="home" class="fix_header header-sticky">
        <div class="header-area">
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="top-header-menu">
                                <ul>
                                    <li><a href="#">Download App</a></li>
                                    <li><a href="#">Digital</a></li>
                                    <li><a href="#">Distance Learning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-contact-info d-flex">
                                <div class="top_header_contact">
                                    <span>Admission Assistance :</span>
                                    <a href="tel:9828019432" class="phone-name">98280-19432</a>
                                    <span>(9 AM to 7 PM)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="<?php echo base_url('home/'); ?>">
                                    <img src="<?php echo base_url('library/images/logo/logo.png'); ?>" title="IMA Jodhpur" alt="IMA Jodhpur Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li><a href="<?php echo base_url('STHE/'); ?>" class="sthe_menu">STHE</a></li>
                                        <li>
                                            <a href="javascript:void(0)">About</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo base_url('about-ima/'); ?>">About IMA</a></li>
                                                <li><a href="<?php echo base_url('why-ima/'); ?>">Why IMA</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('courses/'); ?>">courses</a></li>
                                        <li><a href="<?php echo base_url('results/'); ?>">Results</a></li>
                                        <li>
                                            <a href="javascript:void(0)">Student's Hub</a>
                                            <ul class="submenu">
                                                <li class="menu_sub_drop">
                                                    <a href="javascript:void(0)">Lesson Planner <span class="ti-angle-right"></span></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url('studenthub/lessonplanner/1'); ?>">Medical</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/lessonplanner/2'); ?>">Engineering</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/lessonplanner/0'); ?>">Pre-Foundation</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_sub_drop">
                                                    <a href="javascript:void(0)">Book Solution <span class="ti-angle-right"></span></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url('studenthub/bookSolution/1'); ?>">Medical</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/bookSolution/2'); ?>">Engineering</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/bookSolution/0'); ?>">Pre-Foundation</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_sub_drop">
                                                    <a href="javascript:void(0)">Important Notes <span class="ti-angle-right"></span></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url('studenthub/impNotes/1'); ?>">Medical</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/impNotes/2'); ?>">Engineering</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/impNotes/0'); ?>">Pre-Foundation</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu_sub_drop">
                                                    <a href="javascript:void(0)">Entrance Test <span class="ti-angle-right"></span></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url('studenthub/entranceTest/1'); ?>">Medical</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/entranceTest/2'); ?>">Engineering</a></li>
                                                        <li><a href="<?php echo base_url('studenthub/entranceTest/0'); ?>">Pre-Foundation</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('facilities/'); ?>">Facilities</a></li>
                                        <li><a href="<?php echo base_url('image-gallery/'); ?>">Gallery</a></li>
                                        <li><a href="<?php echo base_url('contact-us/'); ?>">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12"><div class="mobile-menu"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
