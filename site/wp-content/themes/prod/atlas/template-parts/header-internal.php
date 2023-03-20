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

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
$logo_internal            = get_theme_mod('US_logo_internal');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- header -->
  <header id="internal">
    <div class="container-full">
      <div class="grid">
        <div class="item logo">
          <?php
          if ($logo_internal != '') {
            echo '<a href="' . esc_url(home_url('/')) . '" rel="home" title="' . get_bloginfo('name') . '">' . wp_get_attachment_image(attachment_url_to_postid($logo_internal), 'full') . '</a>';
          }
          ?>
        </div>
        <div class="item">
          <nav>
            <ul>
              <li><a href="#">Quem Somos</a></li>
              <li><a href="#">Biblioteca Virtual</a></li>
              <li class="subitem">
                <a href="#">
                  Produtos
                  <svg class="icon">
                    <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#chevron"></use>
                  </svg>
                </a>
              </li>
              <li><a href="#">Projetos</a></li>
              <li><a href="#">Eventos & Notícias</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </nav>
        </div>
        <div class="item search">
          <div class="box">
            <input type="text" placeholder="Buscar">
            <button>
              <svg class="icon">
                <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#search"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end:header -->