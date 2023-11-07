<?php /**template name: key */ get_header() ?>
<div class="key container">
    <div class="key-title">GIẢI PHÁP CHÌA KHÓA TRAO TAY</div>
    <div class="line position-relative">
        <div class="line-through">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php if(have_rows('key-items')): while(have_rows('key-items')): the_row(); ?>
        <div class="line-item d-flex">
            <div class="col-lg-6 key-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128" fill="none">
                    <circle cx="64" cy="64" r="63.5" stroke="#062D4C" />
                </svg>
                <img src="<?php echo get_sub_field('img')?>" alt="" />
            </div>
            <div class="col-lg-6 key-text">
                <p><?php echo get_sub_field('name')?></p>
                <p><?php echo get_sub_field('eng-name')?></p>
            </div>
        </div>

        <?php endwhile;endif ?>
    </div>
</div>
<div class="company-projects"><?php echo get_field('project-text', 'option')?></div>
<div class="swiper ProjectSwiper">
    <div class="swiper-wrapper">
        <?php
            $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title', 
            'order' => 'ASC',
            'cat' => 'du-an',
        );

        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="swiper-slide project-img">
            <?php the_post_thumbnail() ?>
        </div>

        <?php endwhile;

            wp_reset_postdata();
         ?>

        <!-- <div class="swiper-slide project-img">
            <img src="img/image 7.png" alt="" class="img-fluid w-100" />
        </div>
        <div class="swiper-slide project-img">
            <img src="img/image 8.png" alt="" class="img-fluid w-100" />
        </div>
        <div class="swiper-slide project-img">
            <img src="img/image 6.png" alt="" class="img-fluid w-100" />
        </div>
        <div class="swiper-slide project-img">
            <img src="img/image 7.png" alt="" class="img-fluid w-100" />
        </div> -->
    </div>
</div>

<?php get_footer() ?>