<footer>
    <div class="main-footer-wrap">
        <div class="main-footer container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="<?php echo home_url()?>">
                        <img src="<?php echo get_field('logo2', 'option')?>" alt="" class=" logo-footer">
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="phone">
                        <?php echo get_field('phone-text','option')?>
                        <span><?php echo get_field('phone','option')?></span>
                    </div>
                    <div class="email">
                        <?php echo get_field('email-text','option')?>
                        <span><?php echo get_field('email','option')?></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="address">
                        <?php echo get_field('address-text','option')?>
                        <span><?php echo get_field('address','option')?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sub-footer">
        <?php echo get_field('license', 'option')?>
    </div>



</footer>



<script src="https://kit.fontawesome.com/9e8a8858d4.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app.js"></script>
<?php wp_footer() ?>
</body>

</html>