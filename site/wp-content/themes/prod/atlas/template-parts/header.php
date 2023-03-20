<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!-- header -->
<header id="top">
    <div class="container">
      <div class="grid">
        <div class="item logo">
					<?php
					$the_custom_logo = get_theme_mod('custom_logo');
					$site_name = get_bloginfo('name');
					$tagline   = get_bloginfo('description', 'display');
					if (function_exists('the_custom_logo') &&  has_custom_logo()) {
						echo '<a href="' . esc_url(home_url('/')) . '" rel="home" title="' . get_bloginfo('name') . '"><img src="' . esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))) . '" alt="' . get_bloginfo('name') . '"  /></a>';
					}
					?>
        </div>
        <div class="item">
          <nav>
					<?php if (has_nav_menu('menu')) :
						$itemsWrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
						wp_nav_menu(
							array(
								'theme_location'       => 'menu',
								'menu'                 => '',
								'container'            => 'ul',
								'container_class'      => 'menu',
								'container_id'         => '',
								'container_aria_label' => '',
								'menu_class'           => '',
								'menu_id'              => '',
								'echo'                 => true,
								'fallback_cb'          => 'wp_page_menu',
								'before'               => '',
								'after'                => '',
								'link_before'          => '',
								'link_after'           => '',
								'items_wrap'           => $itemsWrap,
								'item_spacing'         => 'preserve',
								'depth'                => 0,
								'walker'               => '',
							)
						);
					endif; ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- end:header -->