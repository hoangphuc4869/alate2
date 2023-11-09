<?php get_header() ?>
<div class="container rooms-sec">
    <div class="rooms-title"><?php echo get_queried_object()->name; ?></div>
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-6 room-wrap">
            <div class="room">
                <div class="room-imgs swiper RoomImgs position-relative">
                    <div class="swiper-wrapper">
                        <?php if(have_rows('room-img')): while(have_rows('room-img')): the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100" />
                        </div>

                        <?php endwhile;endif ?>

                    </div>
                    <div class="swiper-pagination-room"></div>
                </div>
                <div class="room-name"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
                <div class="room-info">
                    <span>
                        <img src="<?php echo get_field('dien-tich-img') ?>" alt="" />
                        <?php echo get_field('dien_tich') ?>
                    </span>
                    <span>
                        <img src="<?php echo get_field('phong-ngu-img') ?>" alt="" />
                        <?php echo get_field('phong_ngu') ?>
                    </span>
                    <span>
                        <img src="<?php echo get_field('phong-tam-img') ?>" alt="" />
                        <?php echo get_field('phong_tam') ?>
                    </span>
                </div>
                <div class="room-short-des">
                    <?php the_excerpt() ?>
                </div>

                <div class="room-detail-btn">
                    <a href="<?php the_permalink() ?>">room details</a>
                </div>
            </div>
        </div>


        <?php endwhile;?>
        <?php endif; ?>

    </div>
    <div class="more"><button class="load-more">load more</button></div>
</div>

<?php get_footer() ?>