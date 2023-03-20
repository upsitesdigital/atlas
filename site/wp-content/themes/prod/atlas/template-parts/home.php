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

$title 	= get_theme_mod('US_texts_home_title_01');
$text 	= get_theme_mod('US_texts_home_text_01');
$btn	 	= get_theme_mod('US_texts_home_btn_link_01');

$icon_01 		= get_theme_mod('US_texts_home_box_icon_01');
$title_01 	= get_theme_mod('US_texts_home_box_title_01');
$text_01 		= get_theme_mod('US_texts_home_box_text_01');

$icon_02 		= get_theme_mod('US_texts_home_box_icon_02');
$title_02 	= get_theme_mod('US_texts_home_box_title_02');
$text_02 		= get_theme_mod('US_texts_home_box_text_02');

$icon_03 		= get_theme_mod('US_texts_home_box_icon_03');
$title_03 	= get_theme_mod('US_texts_home_box_title_03');
$text_03 		= get_theme_mod('US_texts_home_box_text_03');

?>
  <!-- main -->
  <main>
    <!-- featured -->
    <section class="featured">
      <div class="container">
        <h1><?= $title ?></h1>
        <p><?= $text ?></p>
        <a href="<?= $btn ?>" class="btn">Acessar</a>
        <div class="grid">
          <div class="item">
            <div class="icon">
              <img src="<?= $icon_01 ?>">
            </div>
            <h2><?= $title_01 ?></h2>
            <p><?= $text_01 ?></p>
          </div>
          <div class="item">
						<div class="icon">
              <img src="<?= $icon_02 ?>">
            </div>
            <h2><?= $title_02 ?></h2>
            <p><?= $text_02 ?></p>
          </div>
          <div class="item">
						<div class="icon">
              <img src="<?= $icon_03 ?>">
            </div>
            <h2><?= $title_03 ?></h2>
            <p><?= $text_03 ?></p>
          </div>
        </div>
      </div>
    </section>
    <!-- end:featured -->

    <section class="support">
      <div class="container">
				<?php
				$US_partners_repeater = get_theme_mod('US_partners_repeater', json_encode(array()));
				$US_partners_repeater_decoded = json_decode($US_partners_repeater);
				$count = 0;
				foreach ($US_partners_repeater_decoded as $repeater_item) {
					if($count == 0) {
						echo '<div class="primary"><img src="' . $repeater_item->image_url . '" alt=""></div><div class="grid">';
					} else {
						echo '<div class="item"><img src="' . $repeater_item->image_url . '" alt=""></div>';
					}
					$count++;
				}
				?>
				</div>
      </div>
    </section>
  </main>
  <!-- end:main -->

	<!-- footer -->
	<footer id="footer">
    <div class="container">
      <p>Ainda tem dúvida? <b>Entre em contato conosco.</b></p>
    </div>
  </footer>
  <!-- end:footer -->
