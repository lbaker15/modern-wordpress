<?php  
  get_header();
  
  while(have_posts()) {
    the_post(); ?>
    <div class="postFlex">
    <div class="post l75">
      <div class="metabox2">
        <p><?php echo get_the_category_list(', '); ?></p>
      </div>
      <h1>
        <?php the_title() ?>
      </h1>
      <div class="metabox4">
      <h4>Posted by <?php the_author_posts_link(); ?> </h4>
      <h4> <?php the_date(); ?> </h4>
      </div>
      <img src="<?php echo get_field('image') ?>" />
      <div class="content"><?php the_content(); ?></div>
    </div>
    </div>

  <?php }
  get_footer();
?>