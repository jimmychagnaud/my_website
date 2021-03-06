<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support('post-thumbnails');

function wpc_theme_support()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wpc_theme_support');

add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
  $my_attr = 'client-formation';

  if (isset($atts[$my_attr])) {
    $out[$my_attr] = $atts[$my_attr];
  }
  return $out;
}

function my_acf_init()
{

  acf_update_setting('google_api_key', 'AIzaSyCS7S6U4rLKt2N70vV6NxCRpJ4u_GIohcA');
}
add_action('acf/init', 'my_acf_init');

function create_post_portfolios()
{
  register_post_type('portfolios', [
    'labels'            => [
      'name'          => __('portfolios'),
      'singular_name' => __('portfolios'),
      'add_new_item'  => ('Ajouter un nouveau portfolio'),
      'edit_item'     => __('Modifier un portfolio'),
      'search_item'   => __('Rechercher un portfolio'),
      'all_items'     => __('Tous les portfolios'),
      'view_items'    => __('Voir les portfolios'),
      'view_item'     => __('Voir le portfolio'),
    ],
    'public'            => true,
    'has_archive'       => true,
    'rewrite'           => ['slug' => 'portfolios'],
    'capability_type'   => 'page',
    'menu_icon'         => 'dashicons-book-alt',
    'supports'          => ['title', 'thumbnail'],
    'show_in_menu'      => true,
    'show_in_nav_menus' => true,
  ]);
}
add_action('init', 'create_post_portfolios');

register_nav_menus(array(
  'Top'    => 'Navigation principale',
  'bottom' => 'Liens bas de page',
));

add_filter('get_sample_permalink_html', 'hide_permalinks', 10, 5);

function hide_permalinks($return, $post_id, $new_title, $new_slug, $post)
{
  if ($post->post_type == 'block' || $post->post_type == 'client') {
    return '';
  }
  return $return;
}

function remove_yoast_metabox()
{
  remove_meta_box('wpseo_meta', 'date', 'normal');
  remove_meta_box('wpseo_meta', 'dealer', 'normal');
  remove_meta_box('wpseo_meta', 'team', 'normal');
  remove_meta_box('wpseo_meta', 'staff', 'normal');
  remove_meta_box('wpseo_meta', 'news', 'normal');
  remove_meta_box('wpseo_meta', 'arround', 'normal');
}
add_action('add_meta_boxes', 'remove_yoast_metabox', 11);

// Remove menu
function remove_menus()
{
  if (!current_user_can('administrator')) {
    remove_menu_page('upload.php');
    remove_menu_page('themes.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    remove_menu_page('options-general.php');
    remove_menu_page('wpcf7');
  }
  remove_menu_page('jetpack');
  remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('acf-options');
}
add_action('admin_menu', 'remove_menus', 99);

// Remove bar links
function remove_admin_bar_links()
{

  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('about');
  $wp_admin_bar->remove_menu('wporg');
  $wp_admin_bar->remove_menu('documentation');
  $wp_admin_bar->remove_menu('support-forums');
  $wp_admin_bar->remove_menu('feedback');
  $wp_admin_bar->remove_menu('view-site');
  $wp_admin_bar->remove_menu('updates');
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('w3tc');

}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

// Remove version
function my_footer_shh()
{
  if (!current_user_can('administrator')) {
    remove_filter('update_footer', 'core_update_footer');
  }
}
add_action('admin_menu', 'my_footer_shh');

// Change footer links
function change_footer_admin()
{
  echo 'Merci de m\'avoir fait confiance <a href="https://creationsitespau.fr" target="_blank">Chagnaud jimmy</a> | <a href="https://creationsitespau.fr/contact" target="_blank">Signaler un bug </a>';
}
add_filter('admin_footer_text', 'change_footer_admin');

// Remove Screen options
function remove_screen_options($display_boolean, $wp_screen_object)
{
  if (!current_user_can('administrator')) {
    $blacklist = array('post.php', 'post-new.php', 'index.php', 'edit.php', 'profile.php');
    if (in_array($GLOBALS['pagenow'], $blacklist)) {
      $wp_screen_object->render_screen_layout();
      $wp_screen_object->render_per_page_options();
      return false;
    }
    return true;
  }
}
// add_filter('screen_options_show_screen', 'remove_screen_options', 10, 2 );

// Remove help option
function remove_help_tabs($old_help, $screen_id, $screen)
{
  $screen->remove_help_tabs();
  return $old_help;
}
add_filter('contextual_help', 'remove_help_tabs', 999, 3);

// Change link logo
function custom_loginlogo_url($url)
{
  return 'https://creationsitespau.fr/';
}
add_filter('login_headerurl', 'custom_loginlogo_url');

// Add styles and scripts
function my_admin_theme_style()
{
  wp_enqueue_style('wehub-theme', 'https://dist.creationsitespau.fr/wp/style-wp-admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');
