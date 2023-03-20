<?php
$paises = get_template_directory() . '/upsites/customizer-register/paises/';
function US_customizer_register($wp_customize)
{
  /* create panel Options theme */
  $wp_customize->add_panel(
    new US_WP_Customize_Panel($wp_customize, 'US_client_theme', array(
      'priority'          => 201,
      'title'            => __('Options theme', 'upsites'),
      'description'      => __('Options theme', 'upsites'),
    ))
  );

  /* title_tagline */
  $wp_customize->add_setting('US_logo_internal', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'logo_internal',
      array(
        'label'     => __('Logo Interno', 'upsites'),
        'section'   => 'title_tagline',
        'settings'  => 'US_logo_internal',
      )
    )
  );
  /* end:title_tagline */


  /* create panel Home Page */
  $wp_customize->add_panel(
    new US_WP_Customize_Panel($wp_customize, 'US_home', array(
      'priority'         => 201,
      'title'            => __('Home Page', 'upsites'),
      'description'      => __('Home page', 'upsites'),
      'panel'            => 'US_client_theme',
    ))
  );

  /* Texts Home */
  $wp_customize->add_section(
    'US_texts_home',
    array(
      'title'    => __('Textos', 'upsites'),
      'priority' => 204,
      'panel'    => 'US_home'
    )
  );
  $wp_customize->add_setting('US_texts_home_title_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_title_01', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Título', 'upsites'),
  ));
  $wp_customize->add_setting('US_texts_home_text_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_text_01', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Texto', 'upsites'),
  ));
  $wp_customize->add_setting('US_texts_home_btn_link_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_btn_link_01', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Link botão', 'upsites'),
  ));

  $wp_customize->add_setting('US_banner_home_div_01', array(
    'sanitize_callback' => 'themename_sanitize',
  ));
  $wp_customize->add_control(
    new US_Separator_Control(
      $wp_customize,
      'US_banner_home_div_01',
      array(
        'section' => 'US_texts_home',
      )
    )
  );
  $wp_customize->add_setting('US_texts_home_box_icon_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'US_texts_home_box_icon_01',
      array(
        'label'     => __('Icon', 'upsites'),
        'section'   => 'US_texts_home',
        'settings'  => 'US_texts_home_box_icon_01',
      )
    )
  );
  $wp_customize->add_setting('US_texts_home_box_title_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_title_01', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Título ', 'upsites'),
  ));
  $wp_customize->add_setting('US_texts_home_box_text_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_text_01', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Texto ', 'upsites'),
  ));

  $wp_customize->add_setting('US_banner_home_div_02', array(
    'sanitize_callback' => 'themename_sanitize',
  ));
  $wp_customize->add_control(
    new US_Separator_Control(
      $wp_customize,
      'US_banner_home_div_02',
      array(
        'section' => 'US_texts_home',
      )
    )
  );

  $wp_customize->add_setting('US_texts_home_box_icon_02', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'US_texts_home_box_icon_02',
      array(
        'label'     => __('Icon', 'upsites'),
        'section'   => 'US_texts_home',
        'settings'  => 'US_texts_home_box_icon_02',
      )
    )
  );
  $wp_customize->add_setting('US_texts_home_box_title_02', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_title_02', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Título ', 'upsites'),
  ));
  $wp_customize->add_setting('US_texts_home_box_text_02', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_text_02', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Texto ', 'upsites'),
  ));

  $wp_customize->add_setting('US_banner_home_div_03', array(
    'sanitize_callback' => 'themename_sanitize',
  ));
  $wp_customize->add_control(
    new US_Separator_Control(
      $wp_customize,
      'US_banner_home_div_03',
      array(
        'section' => 'US_texts_home',
      )
    )
  );


  $wp_customize->add_setting('US_texts_home_box_icon_03', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'US_texts_home_box_icon_03',
      array(
        'label'     => __('Icon', 'upsites'),
        'section'   => 'US_texts_home',
        'settings'  => 'US_texts_home_box_icon_03',
      )
    )
  );
  $wp_customize->add_setting('US_texts_home_box_title_03', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_title_03', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Título ', 'upsites'),
  ));
  $wp_customize->add_setting('US_texts_home_box_text_03', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_texts_home_box_text_03', array(
    'type' => 'text',
    'section' => 'US_texts_home',
    'label' => __('Texto ', 'upsites'),
  ));


  $wp_customize->add_setting('US_banner_home_div_04', array(
    'sanitize_callback' => 'themename_sanitize',
  ));
  $wp_customize->add_control(
    new US_Separator_Control(
      $wp_customize,
      'US_banner_home_div_04',
      array(
        'section' => 'US_texts_home',
      )
    )
  );
  $wp_customize->add_setting('US_partners_repeater', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
  ));
  $wp_customize->add_control(new Customizer_Repeater($wp_customize, 'US_partners_repeater', array(
    'label'   => __('Items', 'upsites'),
    'item_name' => __('Item', 'upsites'),
    'section' => 'US_texts_home',
    'priority' => 201,
    'customizer_repeater_image_control' => true,
    'customizer_repeater_image_mobile_control' => false,
    'customizer_repeater_icon_control' => false,
    'customizer_repeater_link_control' => false,
    'customizer_repeater_title_control' => false,
    'customizer_repeater_subtitle_control' => false,
    'customizer_repeater_text_control' => false,
    'customizer_repeater_shortcode_control' => false,
    'customizer_repeater_repeater_control' => false
  )));
  /* end:Texts Home */


  $wp_customize->add_panel(
    new US_WP_Customize_Panel($wp_customize, 'US_country', array(
      'priority'         => 201,
      'title'            => __('Países', 'upsites'),
      'description'      => __('Países', 'upsites'),
      'panel'            => 'US_client_theme',
    ))
  );
  $wp_customize->add_panel(
    new US_WP_Customize_Panel($wp_customize, 'US_country_geral', array(
      'priority'         => 201,
      'title'            => __('Geral', 'upsites'),
      'description'      => __('Geral', 'upsites'),
      'panel'            => 'US_country',
    ))
  );
  $wp_customize->add_section(
    'US_country_geral_section',
    array(
      'title'    => __('Ranking por % do PIB', 'upsites'),
      'priority' => 201,
      'panel'    => 'US_country_geral'
    )
  );
  $wp_customize->add_setting('US_country_geral_rankpib', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
  ));
  $wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_country_geral_rankpib', array(
    'label'   => __('Ranking por % do PIB', 'upsites'),
    'item_name' => __('Item', 'upsites'),
    'section' => 'US_country_geral_section',
    'priority' => 201,
    'customizer_repeater_label_field01_control' => 'Pais',
    'customizer_repeater_field01_control' => true,
    'customizer_repeater_label_field02_control' => 'Valor',
    'customizer_repeater_field02_control' => true,
  )));

  
  $wp_customize->add_section(
    'US_country_docs_section',
    array(
      'title'    => __('Materiais', 'upsites'),
      'priority' => 201,
      'panel'    => 'US_country_geral'
    )
  );
  $wp_customize->add_setting('US_country_docs_text_btn_01', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('US_country_docs_text_btn_01', array(
    'type' => 'text',
    'section' => 'US_country_docs_section',
    'label' => __('Texto do botão', 'upsites'),
  ));
  $wp_customize->add_setting('US_country_docs_file_btn', array(
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control( 
    new WP_Customize_Upload_Control( 
    $wp_customize, 
    'US_country_docs_file_btn', 
    array(
      'label'      => __( 'Arquivo', 'upsites' ),
      'section'    => 'US_country_docs_section',
      'settings'   => 'US_country_docs_file_btn',
    ) ) 
  );


  /* paises */
  include 'paises/argentina.php';
  include 'paises/bolivia.php';
  include 'paises/brasil.php';
  include 'paises/chile.php';
  include 'paises/colombia.php';
  include 'paises/equador.php';
  include 'paises/guiana.php';
  include 'paises/paraguai.php';
  include 'paises/peru.php';
  include 'paises/uruguai.php';
  include 'paises/venezuela.php';
  /* end:paises */
}
add_action('customize_register', 'US_customizer_register');


function US_register_cpts()
{
}
add_action('init', 'US_register_cpts');


function US_register_taxes()
{
}
add_action('init', 'US_register_taxes');

if (function_exists('acf_add_local_field_group')) :
  acf_add_local_field_group(array(
    'key' => 'group_63ed3ee21d179',
    'title' => 'Operações de paz',
    'fields' => array(
      array(
        'key' => 'field_63ed3f9125928',
        'label' => 'Operações de paz',
        'name' => 'operacoes_de_paz_page',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => '',
        'sub_fields' => array(
          array(
            'key' => 'field_63ed3fab25929',
            'label' => 'Centros de treinamento',
            'name' => 'centros_de_treinamento',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_63ed3fbc2592a',
            'label' => 'Descrição',
            'name' => 'descricao',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 4,
            'new_lines' => 'br',
          ),
          array(
            'key' => 'field_63ed3fcd2592b',
            'label' => 'Duração',
            'name' => 'duracao',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
        ),
      ),
      array(
        'key' => 'field_63ed41845df7c',
        'label' => 'Arquivo para download',
        'name' => 'arquivo_operacoes_de_paz_page',
        'type' => 'file',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'library' => 'all',
        'min_size' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-pages/operacoes-de-paz.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'the_content',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_637164ac99f9f',
    'title' => 'PROCAD box',
    'fields' => array(
      array(
        'key' => 'field_637164ce5e895',
        'label' => 'Titulo',
        'name' => 'titulo_procad',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_637164f95e896',
        'label' => 'Texto',
        'name' => 'texto_procad',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 4,
        'new_lines' => '',
      ),
      array(
        'key' => 'field_63e93a7bdaea8',
        'label' => 'Texto do botão',
        'name' => 'texto_do_botao_procad',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_63e93a95daea9',
        'label' => 'Link do botão',
        'name' => 'link_do_botao_procad',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_6371650f5e897',
        'label' => 'Como citar',
        'name' => 'como_citar_procad',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_637165315e898',
        'label' => 'Como citar texto',
        'name' => 'como_citar_text_procad',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 4,
        'new_lines' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-pages/initial.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));

endif;
