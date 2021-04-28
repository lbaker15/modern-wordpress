<?php get_header() ?>

<?php 
    pageBanner(array( 'subtitle' => 'About Us' ))
?>
<div class="bannerMove">
    <div class="page">
        <div class="right">
            <h1>
            <?php 
            $post = get_post(); 
            if ( has_blocks( $post->post_content ) ) {
                $blocks = parse_blocks( $post->post_content );
                foreach ($blocks as $block=>$value) {
                    if ($block == 0) {
                        echo render_block($value);
                    }
                }
            }
            ?>
            </h1>
            <h3>
            <?php 
            $post = get_post(); 
            if ( has_blocks( $post->post_content ) ) {
                $blocks = parse_blocks( $post->post_content );
                foreach ($blocks as $block=>$value) {
                    if ($block > 1 && $block < 3) {
                        echo render_block($value);
                    }
                }
            }
            ?>
            </h3>
        </div>
        <div class="left">
            <img src="<?php  
               echo get_field('page_image')
            ?>" />
            <img src="<?php  
               echo get_field('page_image_two')
            ?>" />
            <div class="caption"> 
            <?php 
            $post = get_post(); 
            if ( has_blocks( $post->post_content ) ) {
                $blocks = parse_blocks( $post->post_content );
                foreach ($blocks as $block=>$value) {
                    if ($block > 2 && $block < 5) {
                        echo render_block($value);
                    }
                }
            }
            ?>    
            </div>
            <div class="row">
                <h2>Curiosity</h2>
                <h4>Some sort of ethos, make around 10 to 20 words, longer than this, needs to be longer.</h4>
            </div>
        </div>
        <!--<div class="upright"><?php echo the_title() ?></div>
         -->
    </div>
</div>

<?php get_footer() ?>