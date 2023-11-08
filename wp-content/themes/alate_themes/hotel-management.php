<?php /**template name: hotel-maanagement */ get_header() ?>
<div class="background-wrap">
    <div class="container project-dev">
        <div class="project-dev-title"><?php echo get_field("title")?></div>
        <div class="project-dev-text">
            <?php echo get_field("text")?>
        </div>
        <div class="row tech-advice-sec">
            <div class="col-lg-6 left-sec">
                <div class="tech-advices">
                    <p><?php echo get_field("title2")?></p>
                    <p>
                        <?php echo get_field("text2")?>
                    </p>
                    <?php if(have_rows('tabs')): while(have_rows('tabs')): the_row(); ?>
                    <div class="tabs">
                        <?php echo get_sub_field("tab-title")?>
                        <i class="fa-solid fa-minus"></i>
                    </div>
                    <ul class="list-tab">
                        <?php if(have_rows('tab-items')): while(have_rows('tab-items')): the_row(); ?>
                        <li><?php echo get_sub_field("text")?></li>

                        <?php endwhile;endif ?>

                    </ul>

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
            <div class="col-lg-6 img-sec">
                <img src="<?php echo get_field("img-right")?>" alt="" class="tech-img img-fluid" />
                <div class="des">
                    <p>VẬN HÀNH TỐI ƯU</p>
                    <p>HIỆU SUẤT KINH DOANH CAO</p>
                    <p>CHI PHÍ HIỆU QUẢ</p>
                </div>
            </div>
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
            'orderby' => 'date', 
            'order' => 'DESC',
            'category_name' => 'du-an',
        );

        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="swiper-slide project-img">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
            </div>

            <?php endwhile;

            wp_reset_postdata();
         ?>
        </div>
    </div>
</div>




<?php get_footer() ?>