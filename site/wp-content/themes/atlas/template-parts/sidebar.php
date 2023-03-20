<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!-- sidebar -->
<div class="sidebar">
	<div class="top-side">
		<div class="logo">
			<?php
			$the_custom_logo = get_theme_mod('custom_logo');
			$site_name = get_bloginfo('name');
			$tagline   = get_bloginfo('description', 'display');
			if (function_exists('the_custom_logo') &&  has_custom_logo()) {
				echo '<a href="' . esc_url(home_url('/')) . '" rel="home" title="' . get_bloginfo('name') . '"><img src="' . esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))) . '" alt="' . get_bloginfo('name') . '"  /></a>';
			}
			?>
		</div>
		<a href="#" class="btn-menu">
			<svg class="icon">
				<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#menu"></use>
			</svg>
		</a>
	</div>
	<div class="box-menu">
		<ul>
			<li>
				<a href="<?php echo get_site_url() ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
					</svg><span>Apresentação</span>
				</a>
			</li>
			<li class="atlas-de-defesa-da-america-do-sul">
				<a href="<?php echo get_permalink(get_page_by_path('atlas-de-defesa-da-america-do-sul')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#home"></use>
					</svg><span>Página Inicial</span>
				</a>
			</li>
			<li class="analise-por-pais">
				<a href="<?php echo get_permalink(get_page_by_path('analise-por-pais')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#globe"></use>
					</svg><span>Análise por País</span>
				</a>
			</li>
			<li class="base-industrial-de-defesa">
				<a href="<?php echo get_permalink(get_page_by_path('base-industrial-de-defesa')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#shield"></use>
					</svg><span>Indústria de Defesa</span>
				</a>
			</li>
			<li class="gastos-militares">
				<a href="<?php echo get_permalink(get_page_by_path('gastos-militares')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#dollar-sign"></use>
					</svg><span>Gastos Militares</span>
				</a>
			</li>
			<li class="operacoes-de-paz">
				<a href="<?php echo get_permalink(get_page_by_path('operacoes-de-paz')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#flag"></use>
					</svg><span>Operações de Paz</span>
				</a>
			</li>
			<li class="transferencia-de-armamentos">
				<a href="<?php echo get_permalink(get_page_by_path('transferencia-de-armamentos')) ?>">
					<svg class="icon">
						<use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#crosshair"></use>
					</svg><span>Transferência de Armamentos</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- end:sidebar -->