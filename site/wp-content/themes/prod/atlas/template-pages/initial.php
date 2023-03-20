<?php
/*
Template Name: Pagina inicial
*/

get_template_part('template-parts/header-internal');
?>

  <!-- main -->
  <main>
    <div class="container-full">
      <div class="grid-primary">
        <!-- sidebar -->
        <?php get_template_part('template-parts/sidebar'); ?>
        <!-- end:sidebar -->
        <div class="content">
          <div class="text-intro">
            <div class="primary">
              <h1><?php the_title() ?></h1>
              <?php the_content() ?>
            </div>
            <aside>
              <h2><?php the_field('titulo_procad') ?></h2>
              <p><?php the_field('texto_procad') ?></p>
              <?php 
                if(get_field('texto_do_botao_procad')) {
                  echo '<a href="' . get_field('link_do_botao_procad') . '" class="btn">' . get_field('texto_do_botao_procad') . '</a>';
                }
              ?>
              <div class="toggle">
                <a href="#">
                  <svg class="icon">
                    <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#plus"></use>
                  </svg><?php the_field('como_citar_procad') ?>
                </a>
                <div class="content-toggle" style="display: none;">
                  <p><?php the_field('como_citar_text_procad') ?></p>
                </div>
              </div>
              <?php
                echo do_shortcode('[contact-form-7 id="35" title="Newsletter"]'); 
              ?>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- end:main -->

<?php get_footer(); ?>



