<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">



    <title><?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>

    <div class="sub-header-wrap">
        <div class="sub-header container">

            <a href="tel: 0909009009" class="wow animate__animated animate__swing">
                <i class="fa-solid fa-phone"></i>
                <span>0909 009 009</span>
            </a>
            <?php echo do_shortcode('[language-switcher]') ?>
            <a href="#"><i class="fa-brands fa-facebook wow animate__animated animate__swing"></i></a>

        </div>
    </div>
    <div class="main-menu-wrap">
        <div class="main-menu container">
            <div class="logo">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_field('logo', 'option')?>" alt="">
                </a>

            </div>
            <div class="menu-wrap">
                <?php wp_nav_menu (
                         array(
                            'theme_location' => 'menu-1', 
                            'menu_class' => 'menu-pc'));
                ?>
            </div>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <?php if(!is_front_page()){ ?>
    <div class="breadcr">
        <div class="container breadcrumb-sec d-flex">
            <span class="first-sep">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="71" viewBox="0 0 75 71" fill="none">
                    <path d="M74.2451 43.7422L74.2451 27.3876L0.000121344 54.3857L0.00012207 71L74.2451 43.7422Z"
                        fill="#FAFAFB" />
                    <path d="M74.2451 27.3876L71.7789 26.0896L0.000121974 52.1792L0.00012207 54.3857L74.2451 27.3876Z"
                        fill="#8C6213" />
                    <path
                        d="M66.617 26.2784L9.81242e-05 2.07679L9.80335e-05 4.9371e-06L69.3127 25.181L69.3127 25.2986L66.617 26.2784Z"
                        fill="#E6F0FF" />
                    <path d="M46.7368 33.5752L9.4626e-05 16.6143L9.45353e-05 14.5375L49.5959 32.536L46.7368 33.5752Z"
                        fill="#E6F0FF" />
                    <path d="M51.7403 31.7566L8.31026e-05 12.9799L8.30118e-05 10.9031L54.5994 30.7174L51.7403 31.7566Z"
                        fill="#E6F0FF" />
                    <path d="M56.7437 29.9379L6.77644e-05 9.34546L6.76736e-05 7.26868L59.6028 28.8987L56.7437 29.9379Z"
                        fill="#E6F0FF" />
                    <path
                        d="M61.7471 28.1193L9.05732e-05 5.71113L9.04825e-05 3.63434L64.3804 26.9981L64.3804 27.1622L61.7471 28.1193Z"
                        fill="#E6F0FF" />
                </svg></span>
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
        </div>
    </div>

    <?php } ?>