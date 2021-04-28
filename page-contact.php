<?php get_header() ?>

<?php 
    pageBanner(array('subtitle' => 'Contact Us' ))
?>
<div class="bannerMovePage">
    <div class="flexC moveUp">
        <div class="leftAC">
            <div class="address">
            <h1>Contact Us Via...</h1>
            <p>  <i class="far fa-address-card"></i>  123 Fake Street, Faketown, FA92 1FF</p>
            <p>  <i class="fas fa-mobile-alt"></i>  (+44) 113 234 5324</p>
            <p>  <i class="far fa-envelope-open"></i>  email@email.com</p>
            </div>
            <div class="acfDescribe">Pay Us A Visit At...</div>
            <div class="acf-map">
                <div data-lat="53.9933048" data-lng="-1.0942769" class="marker"></div>
            </div>
        </div>
        <!-- <div class="upright"><?php echo the_title() ?></div> -->
        <div class="rightAC">
            <div class="formDescribe">Get in touch and let us know your thoughts.</div>
            <?php echo the_content() ?>
        </div>
    </div>
</div>

<?php get_footer() ?>