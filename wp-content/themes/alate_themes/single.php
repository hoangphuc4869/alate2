<?php  get_header() ?>
<div class="container">
    <div class="grid-imgs">
        <?php if(have_rows('room-img')): while(have_rows('room-img')): the_row(); ?>

        <div class="grid-item">
            <a href="<?php echo get_sub_field('img') ?>">
                <img src="<?php echo get_sub_field('img') ?>" alt="">
            </a>
        </div>

        <?php endwhile;endif ?>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="room-detail">
                <div class="room-name"><?php the_title() ?></div>
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
                    <?php the_content() ?>
                </div>
            </div>
            <div class=" row room-facilities">
                <div class="room-facilites-title"><?php echo get_field('room-facility-text')?></div>
                <?php if(have_rows('room-facilities')): while(have_rows('room-facilities')): the_row(); ?>
                <div class="col-6">
                    <div class="facility">
                        <?php echo get_sub_field("svg") ?>
                        <span><?php echo get_sub_field("text") ?></span>
                    </div>
                </div>
                <?php endwhile;endif ?>


            </div>
            <div class=" room-rules">
                <div class="room-rules-text"><?php echo get_field('room-rules-text')?></div>
                <ul>
                    <?php if(have_rows('room-rules')): while(have_rows('room-rules')): the_row(); ?>
                    <li><?php echo get_sub_field('rule')?></li>
                    <?php endwhile;endif ?>

                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="booking">
                <?php echo do_shortcode('[contact-form-7 id="c9c5e0e" title="booking"]')?>
            </div>
        </div>
    </div>


</div>
<?php  get_footer() ?>