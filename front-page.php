<?php get_header() ?>
<div class="grid">
            <div class="grid1">
                <div class="text">
                    <h1>Company <span>Name</span></h1>
                    <div class="imageC">
                        <div id="canvas" class="image">
                            <img style="display:none;" src="<?php echo get_theme_file_uri('/images/fashion4.jpg')  ?>" />
                            <span data-value="<?php echo get_theme_file_uri('/images/displacement1.jpg') ?>"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid2">
                <div class="flex">
                    <div class="left">
                    <?php 
                        $post = get_post(); 
                        if ( has_blocks( $post->post_content ) ) {
                            $blocks = parse_blocks( $post->post_content );
                            foreach ($blocks as $block=>$value) {
                                    echo render_block($value);
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="grid3">
                <div class="flex1">
                    Heard Enough ->
                </div>
                <div class="flex2">
                    Contact Us
                </div>
                <div class="flex3">
                    <button> -> </button>
                </div>
            </div>
        </div>
<?php get_footer() ?>