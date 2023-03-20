<?php
/* url da pasta upsites no thema */
$upsites = get_template_directory() . '/upsites/';

/** 
 * After theme setup hook actions
 */
add_action('after_setup_theme', function () {

  add_theme_support('widgets');
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(
    array(
      'menu' => __('Top Menu', 'upsites'),
      'menufooter' => __('Footer Menu', 'upsites'),
      'menudown' => __('Downloads Menu', 'upsites'),
    )
  );
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 197,
      'width'       => 50,
      'flex-height' => true,
      'flex-width'  => true,
    )
  );
});


/** 
 * Load theme assets
 */
add_action('wp_enqueue_scripts', function () {
  $assets_src = get_template_directory_uri() . '/assets';
  $version = wp_get_theme()->get('Version');

  // Load theme style
  if (strpos(get_bloginfo('url'), 'local.wp4') !== false or strpos(get_bloginfo('url'), 'localhost') !== false) {
    wp_enqueue_style('theme', "{$assets_src}/css/main.css", [], $version, 'all');
  } else {
    wp_enqueue_style('theme', "{$assets_src}/css/main.min.css", [], $version, 'all');
  }
  wp_enqueue_style('dataTables', "//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css", [], $version, 'all');
  wp_enqueue_style('semanticui', "https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.semanticui.min.css", [], $version, 'all');

  // Load theme 
  if (strpos(get_bloginfo('url'), 'local.wp4') !== false or strpos(get_bloginfo('url'), 'localhost') !== false) {
    wp_enqueue_script('themejs', "{$assets_src}/js/bundle.js", ['jquery'], $version, true);
  } else {
    wp_enqueue_script('themejs', "{$assets_src}/js/bundle.min.js", ['jquery'], $version, true);
  }
  wp_enqueue_script('chart', "https://cdn.jsdelivr.net/npm/chart.js", ['jquery'], $version, true);
  wp_enqueue_script('dataTables', "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js", ['jquery'], $version, true);
  wp_enqueue_script('dataTablesfixedColumns', "https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js", ['jquery'], $version, true);
  wp_enqueue_script('functions', "{$assets_src}/js/functions.js", ['jquery'], '1.2.4', true);

  wp_localize_script('themejs', 'usAjax', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'nonce'       => wp_create_nonce('nonce')
  ));
  wp_enqueue_script('themejs');
}, 999, 1);


/** 
 * Category
 */
function US_term_list($ID, $cat)
{
  //echo $cat;
  $term_list = wp_get_post_terms($ID, $cat, ['fields' => 'all']);
  $primary_term_bkp = $term_list[0]->name;
  $primary_term = '';

  foreach ($term_list as $term) {
    if (get_post_meta($ID, '_yoast_wpseo_primary_' . $cat, true) == $term->term_id) {
      $primary_term = $term->name;
    }
  }
  $primary_term = ($primary_term !== '') ? $primary_term : $primary_term_bkp;
  return '<em>' . $primary_term . '</em>';
}

function searchFilter($query)
{
  if ($query->is_search) {
    $type = $_GET['post_type'];
    if (isset($query->query_vars['post_type'])) {
      if ($type == 'downloads') {
        $query->set('post_type', $type);
        return locate_template('search-download.php');
      }
    } else {
      $query->set('post_type', 'post');
    }
  }
  /*if ($query->is_search) {
    if (!isset($query->query_vars['post_type'])) {
      $query->set('post_type', 'post');
    }
  }*/
  return $query;
}
add_filter('pre_get_posts', 'searchFilter');

function data_fetch()
{
  $return = [];
  $contry = $_POST['contry'];
  $field01 = 'US_' . $contry . '_' . $_POST['field01'];
  $field02 = 'US_' . $contry . '_' . $_POST['field02'];
  $field03 = 'US_' . $contry . '_' . $_POST['field03'];
  array_push($return, get_theme_mod($field01, json_encode(array())));
  array_push($return, get_theme_mod($field02, json_encode(array())));
  array_push($return, get_theme_mod($field03, json_encode(array())));

  if (isset($_POST['field04'])) {
    $field04 = 'US_' . $contry . '_' . $_POST['field04'];
    array_push($return, get_theme_mod($field04, json_encode(array())));
  }
  if (isset($_POST['field05'])) {
    $field05 = 'US_' . $contry . '_' . $_POST['field05'];
    array_push($return, get_theme_mod($field05, json_encode(array())));
  }
  if (isset($_POST['field06'])) {
    $field06 = 'US_' . $contry . '_' . $_POST['field06'];
    array_push($return, get_theme_mod($field06, json_encode(array())));
  }
  if (isset($_POST['field07'])) {
    $field07 = 'US_' . $contry . '_' . $_POST['field07'];
    array_push($return, get_theme_mod($field07, json_encode(array())));
  }
  if (isset($_POST['field08'])) {
    $field08 = 'US_' . $contry . '_' . $_POST['field08'];
    array_push($return, get_theme_mod($field08, json_encode(array())));
  }
  if (isset($_POST['field09'])) {
    $field09 = 'US_' . $contry . '_' . $_POST['field09'];
    array_push($return, get_theme_mod($field09, json_encode(array())));
  }
  if (isset($_POST['field10'])) {
    $field10 = 'US_' . $contry . '_' . $_POST['field10'];
    array_push($return, get_theme_mod($field10, json_encode(array())));
  }
  
  return wp_send_json_success($return);
  wp_die();
}
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');


/* CUSTOMIZER_REPEATER_VERSION */
define('CUSTOMIZER_REPEATER_VERSION', '1.1.5');
require $upsites . 'customizer-repeater/inc/customizer.php';

/* US_SET_POST_VIEWS */
define('US_SET_POST_VIEWS', '1.1.0');
require $upsites . 'post-views/post-views.php';

/* US_CUSTOMIZER_CONTROLS */
define('US_CUSTOMIZER_CONTROLS', '1.1.0');
require $upsites . 'customizer-controls/customizer-controls.php';

/* US_CUSTOMIZER_REGISTER */
define('US_CUSTOMIZER_REGISTER', '1.1.0');
require $upsites . 'customizer-register/customizer-register.php';

/* US_COMMENTS */
define('US_COMMENTS', '1.1.0');
require $upsites . 'comments/comments.php';

/* US_PAGINATION */
define('US_PAGINATION', '1.1.0');
require $upsites . 'pagination/pagination.php';
