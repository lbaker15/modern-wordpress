<?php get_header() ?>

<div class="blogContainer">
    <h1>Recent Posts</h1>
    <div class="flex">
        <?php while(have_posts()) {
            the_post(); ?>
            <div class="flex1">
                <div class="text"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 4) ?></a></div>
                <div id="canvas" class="image1">
                    <img style="display:none;" src="<?php echo get_field('image') ?>" />
                </div>
            </div>
        <?php } ?>

    </div>

</div>

<?php get_footer() ?>