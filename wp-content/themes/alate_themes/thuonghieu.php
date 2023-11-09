<?php /**template name: thuonghieu */ get_header() ?>
<div class="running-brands container">
    <?php if(have_rows('manage')): while(have_rows('manage')): the_row(); ?>
    <div class="brand row">
        <div class="col-lg-4 brand-text">
            <div class="b-t-title"><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('name') ?></a>
            </div>
            <p>
                <?php echo get_sub_field('des') ?>
            </p>
        </div>
        <div class="col-lg-8 brand-img d-flex">
            <div class="brand-img-left col-lg-6">
                <img src="<?php echo get_sub_field('img') ?>" alt="" class="w-100" />
            </div>
            <div class="col-lg-6 brand-right-wrap">
                <div class="brand-img-right">
                    <?php if(have_rows('brand-img-right')): while(have_rows('brand-img-right')): the_row(); ?>
                    <p><?php echo get_sub_field('text')?></p>
                    <?php endwhile;endif; ?>
                    <ul class="list-timeline">
                        <?php if(have_rows('list-timeline')): while(have_rows('list-timeline')): the_row(); ?>
                        <li>
                            <p><?php echo get_sub_field('p1')?></p>
                            <p><?php echo get_sub_field('p2')?></p>
                        </li>
                        <?php endwhile;endif; ?>

                    </ul>
                </div>
                <div class="crosses2">
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <!-- <p></p> -->
                </div>
            </div>
        </div>
    </div>

    <?php endwhile;endif ?>

</div>
<?php get_footer() ?>