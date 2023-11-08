<?php
/**
 * template name: intro
 */

get_header();

 ?>
<div class="backgr-wrap">
    <div class="about-us1 container">
        <div class="row">
            <div class="col-lg-5 about-us-1-text-wrap">
                <div class="svg-de2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <rect y="25" width="25" height="3.125" transform="rotate(-90 0 25)" fill="#132D4A" />
                        <rect x="5.46875" y="25" width="25" height="3.125" transform="rotate(-90 5.46875 25)"
                            fill="#132D4A" />
                        <rect x="10.9375" y="25" width="25" height="3.125" transform="rotate(-90 10.9375 25)"
                            fill="#132D4A" />
                        <rect x="16.4062" y="25" width="25" height="3.125" transform="rotate(-90 16.4062 25)"
                            fill="#132D4A" />
                        <rect x="21.875" y="25" width="25" height="3.125" transform="rotate(-90 21.875 25)"
                            fill="#8C6213" />
                    </svg>
                </div>
                <div class="about-us1-text">
                    <?php echo get_field('about-us1-text') ?>
                </div>
            </div>
            <div class="col-lg-7 position-relative">
                <div class="about-us1-img">
                    <span class="svg-decor">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="img-wrap">
                        <img src="<?php echo get_field('about-us-1-img') ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us2 container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-us-2-img">
                    <img src="<?php echo get_field('about-us-2-img') ?>" alt="" />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-us-2-text d-flex">
                    <div class="core-group">
                        <?php if(have_rows('core-items')): while(have_rows('core-items')): the_row(); ?>
                        <div class="core-item">
                            <p><?php echo get_sub_field('name') ?></p>
                            <span><?php echo get_sub_field('des') ?></span>
                        </div>

                        <?php endwhile;endif ?>

                    </div>
                    <div class="crosses">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="staff container">
        <div class="staff-title"><?php echo get_field('staff-title')?></div>

        <div class="row">
            <?php if(have_rows('staff')): while(have_rows('staff')): the_row(); ?>
            <div class="col-lg-3 col-6">
                <div class="staff-info">
                    <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100" />
                    <div class="staff-name"><?php echo get_sub_field('name') ?></div>
                    <div class="staff-position"><?php echo get_sub_field('position') ?></div>
                </div>
            </div>

            <?php endwhile;endif ?>
        </div>
    </div>
</div>

<?php get_footer()?>