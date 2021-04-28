<?php
function university_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
  wp_enqueue_style('custom-google-fonts3', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900');
  wp_enqueue_style('custom-google-fonts4', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800');
  wp_enqueue_style('custom-google-fonts5', '//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.7.1/css/all.css');
  //NOT SURE WHICH CONDITION IS BEING USED??
  // if (strstr($_SERVER['SERVER_NAME'], '/wordpress')) {
  //   wp_enqueue_script('js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  // } else {
  //   wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
  //   wp_enqueue_script('js', get_theme_file_uri('/bundled-assets/scripts.f20fcb3723fe5c0fd107.js'), NULL, '1.0', true);
  //   wp_enqueue_style('styles', get_theme_file_uri('/bundled-assets/styles.f20fcb3723fe5c0fd107.css'));
  // }
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDeVXGKb6lmAajCQAWrBSEwDn6EEryc4DU', NULL, '1.0', true);
  wp_enqueue_script('js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  wp_localize_script('js', 'mySite', array(
    'root_url' => get_site_url()
  ));
}
add_action('wp_enqueue_scripts', 'university_files');


function pageBanner($args = NULL) {
  if (!$args['subtitle']) {
    if (get_field('page_banner_subtitle')) {
      $args['subtitle'] = get_field('page_banner_subtitle');
    } else {
      $args['subtitle'] = get_the_title();
    }
  }
  if (!$args['photo']) {
    if (get_field('page_banner_image')) {
      $args['photo'] = get_field('page_banner_image');
    } else {
      $args['photo'] = get_theme_file_uri('/images/galaxy2.jpg');
    }
  }
  ?>
  <div class="pageB" style="background-image: url('<?php echo $args['photo'] ?>')">
    <h1 class="pageSub">
      <?php echo $args['subtitle'] ?>
    </h1>
  </div>
  <?php
}
