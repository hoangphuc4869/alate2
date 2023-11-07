<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

            <a href="tel: 0909009009">
                <i class="fa-solid fa-phone"></i>
                <span>0909 009 009</span>
            </a>
            <?php echo do_shortcode('[language-switcher]') ?>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>

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