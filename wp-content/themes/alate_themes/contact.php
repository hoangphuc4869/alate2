<?php /**template name: contact */ get_header() ?>
<div class="container contact text-center">
    <div class="contact-text1"> <?php echo get_field('text1')?></div>
    <div class="contact-text2"><?php echo get_field('text2')?></div>
    <p>Call us: <a href="tel:+84-977-977-977">+84-977-977-977</a></p>
    <p>Email: <a href="mailto: reserve@alate.com">reserve@alate.com</a></p>
    <div class="contact-text3"><?php echo get_field('text3')?></div>
    <div class="map"><?php echo get_field('map')?></div>
    <div class="address">
        <span><?php echo get_field('address','option')?></span>
    </div>
</div>

<?php get_footer() ?>