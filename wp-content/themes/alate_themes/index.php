<?php get_header() ?>


<div class="heading-img container-fluid px-0">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php if(have_rows('heading-slide')): while(have_rows('heading-slide')): the_row(); ?>
            <div class="swiper-slide">
                <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100 img-slide" />
            </div>
            <?php endwhile;endif ?>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
    </div>
</div>

<div class="container searching-form">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-2">
            <div class="destination">
                <div class="search-item-title">
                    Điểm đến
                </div>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="destination">
                <div class="search-item-title">
                    Check-in
                </div>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="destination">
                <div class="search-item-title">
                    Check-out
                </div>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="destination">
                <div class="search-item-title">
                    Người lớn
                </div>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="destination">
                <div class="search-item-title">
                    Trẻ em
                </div>
                <input type="text" name="" id="">
            </div>
        </div>
        <div class="col-lg-2 d-flex justify-content-center align-items-center ">
            <input type="submit" value="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</div>

<div class="container intro-alate">
    <div class="intro-title"><?php echo get_field('alate-intro-text') ?></div>
    <div class="intro-text">
        <?php echo get_field('align-intro') ?>
    </div>
    <div class="row">
        <?php if(have_rows('img-intro')): while(have_rows('img-intro')): the_row(); ?>
        <div class="col-lg-4 intro-img">
            <img src="<?php echo get_sub_field('img')?>" alt="" class="img-fluid w-100" />
        </div>
        <?php endwhile;endif ?>

    </div>
</div>

<div class="container-fluid px-0 service-alate">
    <div class="ser-title"><?php echo get_field('service-text') ?></div>
    <div class="ser-text">
        <?php echo get_field('service-text2') ?>
    </div>
    <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
    <div class="services d-flex flex-wrap justify-content-center align-items-center">
        <div class="col-lg-6 ser-img">
            <img src="<?php echo get_sub_field('img') ?>" alt="" class="img-fluid w-100" />
        </div>
        <div class="col-lg-6 ser-content">
            <a href="<?php echo get_sub_field('link') ?>">
                <?php echo get_sub_field('name') ?>
            </a>
        </div>
    </div>
    <?php endwhile;endif ?>

</div>

<div class="container-fluid px-0 brand-control-alate overflow-hidden">
    <div class="brand-control-title"><?php echo get_field('brand-management')?></div>

    <div class="row">
        <?php if(have_rows('brands')): while(have_rows('brands')): the_row(); ?>
        <div class="col-lg-4">
            <div class="brand-cate">
                <img src="<?php echo get_sub_field('img')?>" alt="" class="w-100 img-fluid" />
                <div class="brand-cate-text">
                    <a href="<?php echo get_sub_field('link')?>">
                        <?php echo get_sub_field('name')?>
                    </a>
                </div>
            </div>
        </div>

        <?php endwhile;endif ?>

    </div>
</div>

<div class="container-fluid px-0 user-exp overflow-hidden">
    <div class="user-exp-title"><?php echo get_field('user-exp') ?></div>
    <div class="user-exp-background">
        <img src="<?php echo get_field('feedback-background') ?>" alt="" class="w-100 img-fluid" />
        <div class="swiper FeedbackSwiper">
            <div class="swiper-wrapper">
                <?php if(have_rows('feed')): while(have_rows('feed')): the_row(); ?>
                <div class="swiper-slide">
                    <div class="user-feedback">
                        <div class="user-info">
                            <img src="<?php echo get_sub_field('img')?>" alt="" />
                            <div class="user-name"><?php echo get_sub_field('name')?></div>
                        </div>
                        <div class="feedback">
                            <?php echo get_sub_field('feedback')?>
                        </div>
                    </div>
                </div>

                <?php endwhile;endif ?>

            </div>
            <div class="swiper-pagination-feed"></div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 before-footer-imgs">
    <div class="img-wrapp d-flex flex-wrap">
        <?php if(have_rows('footer-imgs')): while(have_rows('footer-imgs')): the_row(); ?>
        <div class="col-lg-3 col-6">
            <img src="<?php echo get_sub_field('img')?>" alt="" class="w-100 img-fluid" />
        </div>

        <?php endwhile;endif ?>

    </div>
</div>
<?php get_footer() ?>