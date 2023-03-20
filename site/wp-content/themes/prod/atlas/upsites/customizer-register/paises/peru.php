<?php
/* peru */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru', array(
    'priority'         => 202,
    'title'            => __('Peru', 'upsites'),
    'description'      => __('Peru', 'upsites'),
    'panel'            => 'US_country',
  ))
);

/* analise_por_pais */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru_analise_por_pais', array(
    'priority'         => 201,
    'title'            => __('Análise por País', 'upsites'),
    'description'      => __('Análise por País', 'upsites'),
    'panel'            => 'US_peru',
  ))
);

$wp_customize->add_section(
  'US_peru_analise_por_pais_geral_section',
  array(
    'title'    => __('Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_analise_por_pais'
  )
);
$wp_customize->add_setting('US_peru_analise_por_pais_xml', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control(
  new WP_Customize_Upload_Control(
    $wp_customize,
    'US_peru_analise_por_pais_xml_up',
    array(
      'label'      => __('XML', 'upsites'),
      'section'    => 'US_peru_analise_por_pais_geral_section',
      'settings'   => 'US_peru_analise_por_pais_xml',
    )
  )
);

$wp_customize->add_section(
  'US_peru_analise_por_pais_base_industrial_defesa_section',
  array(
    'title'    => __('Base Industrial de Defesa', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_analise_por_pais'
  )
);
$wp_customize->add_setting('US_peru_analise_por_pais_base_industrial_defesa', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_analise_por_pais_base_industrial_defesa', array(
  'label'   => __('Base Industrial de Defesa', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_analise_por_pais_base_industrial_defesa_section',
  'priority' => 203,
  'customizer_repeater_label_field01_control' => 'Segmento',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

$wp_customize->add_section(
  'US_peru_analise_por_pais_gastos_militares_section',
  array(
    'title'    => __('Gastos Militares', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_analise_por_pais'
  )
);
$wp_customize->add_setting('US_peru_analise_por_pais_gastos_militares', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_analise_por_pais_gastos_militares', array(
  'label'   => __('Gastos Militares', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_analise_por_pais_gastos_militares_section',
  'priority' => 205,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor Em moeda nacional',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Valor Em % PIB',
  'customizer_repeater_field03_control' => true,
)));

$wp_customize->add_section(
  'US_peru_analise_por_pais_operacoes_de_paz_section',
  array(
    'title'    => __('Operações de Paz', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_analise_por_pais'
  )
);
$wp_customize->add_setting('US_peru_analise_por_pais_operacoes_de_paz', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_analise_por_pais_operacoes_de_paz', array(
  'label'   => __('Operações de Paz', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_analise_por_pais_operacoes_de_paz_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Tropas',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Observador',
  'customizer_repeater_field03_control' => true,
  'customizer_repeater_label_field04_control' => 'Policial',
  'customizer_repeater_field04_control' => true,
)));

/* industria_de_defesa */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru_industria_de_defesa', array(
    'priority'         => 201,
    'title'            => __('Indústria de Defesa', 'upsites'),
    'description'      => __('Indústria de Defesa', 'upsites'),
    'panel'            => 'US_peru',
  ))
);
$wp_customize->add_section(
  'US_peru_industria_de_defesa_geral_section',
  array(
    'title'    => __('Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_industria_de_defesa'
  )
);
$wp_customize->add_setting('US_peru_industria_de_defesa_xml', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control(
  new WP_Customize_Upload_Control(
    $wp_customize,
    'US_peru_industria_de_defesa_xml_up',
    array(
      'label'      => __('XML', 'upsites'),
      'section'    => 'US_peru_industria_de_defesa_geral_section',
      'settings'   => 'US_peru_industria_de_defesa_xml',
    )
  )
);
$wp_customize->add_section(
  'US_peru_industria_de_defesa_resumo_geral_section',
  array(
    'title'    => __('Resumo geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_industria_de_defesa'
  )
);
$wp_customize->add_setting('US_peru_industria_de_defesa_defesa_resumo_geral', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_industria_de_defesa_defesa_resumo_geral', array(
  'label'   => __('Resumo geral', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_industria_de_defesa_resumo_geral_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Segmento',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

/* gastos_militares */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru_gastos_militares_section', array(
    'priority'         => 201,
    'title'            => __('Gastos Militares', 'upsites'),
    'description'      => __('Gastos Militares', 'upsites'),
    'panel'            => 'US_peru',
  ))
);
$wp_customize->add_section(
  'US_peru_gastos_militares_geral_section',
  array(
    'title'    => __('Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_xml', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control(
  new WP_Customize_Upload_Control(
    $wp_customize,
    'US_peru_gastos_militares_xml_up',
    array(
      'label'      => __('XML', 'upsites'),
      'section'    => 'US_peru_gastos_militares_geral_section',
      'settings'   => 'US_peru_gastos_militares_xml',
    )
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_text', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control('US_peru_gastos_militares_text', array(
  'type' => 'text',
  'section' => 'US_peru_gastos_militares_geral_section',
  'label' => __('Gastos Militares (R$)', 'upsites'),
));
$wp_customize->add_section(
  'US_peru_gastos_militares_em_moeda_nacional_section',
  array(
    'title'    => __('Em moeda nacional', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_em_moeda_nacional', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_gastos_militares_em_moeda_nacional', array(
  'label'   => __('Em moeda nacional', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_gastos_militares_em_moeda_nacional_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));
$wp_customize->add_section(
  'US_peru_gastos_militares_em_dolar_constante_section',
  array(
    'title'    => __('Em dólar constante', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_em_dolar_constante', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_gastos_militares_em_dolar_constante', array(
  'label'   => __('Em dólar constante', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_gastos_militares_em_dolar_constante_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));
$wp_customize->add_section(
  'US_peru_gastos_militares_pib_section',
  array(
    'title'    => __('Em % do PIB', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_pib', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_gastos_militares_pib', array(
  'label'   => __('Em % do PIB', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_gastos_militares_pib_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));
$wp_customize->add_section(
  'US_peru_gastos_militares_percapita_section',
  array(
    'title'    => __('Per capita (US$ correntes)', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_percapita', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_gastos_militares_percapita', array(
  'label'   => __('Per capita (US$ correntes)', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_gastos_militares_percapita_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));
$wp_customize->add_section(
  'US_peru_gastos_militares_gasto_governamental_section',
  array(
    'title'    => __('Em % do gasto governamental', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_gastos_militares_section'
  )
);
$wp_customize->add_setting('US_peru_gastos_militares_gasto_governamental', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_gastos_militares_gasto_governamental', array(
  'label'   => __('Em % do gasto governamental', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_gastos_militares_gasto_governamental_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

/* operacoes_de_paz */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru_operacoes_de_paz_section', array(
    'priority'         => 201,
    'title'            => __('Operações de Paz', 'upsites'),
    'description'      => __('Operações de Paz', 'upsites'),
    'panel'            => 'US_peru',
  ))
);
$wp_customize->add_section(
  'US_peru_operacoes_de_paz_geral_section',
  array(
    'title'    => __('Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_operacoes_de_paz_section'
  )
);
$wp_customize->add_setting('US_peru_operacoes_de_paz_xml', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control(
  new WP_Customize_Upload_Control(
    $wp_customize,
    'US_peru_operacoes_de_paz_xml_up',
    array(
      'label'      => __('XML', 'upsites'),
      'section'    => 'US_peru_operacoes_de_paz_geral_section',
      'settings'   => 'US_peru_operacoes_de_paz_xml',
    )
  )
);

$wp_customize->add_section(
  'US_peru_operacoes_de_paz_resumo_geral_section',
  array(
    'title'    => __('Resumo Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_operacoes_de_paz_section'
  )
);
$wp_customize->add_setting('US_peru_operacoes_de_paz_resumo_geral', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_operacoes_de_paz_resumo_geral', array(
  'label'   => __('Resumo Geral', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_operacoes_de_paz_resumo_geral_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Segmento',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

$wp_customize->add_section(
  'US_peru_operacoes_de_paz_homem_mulher_section',
  array(
    'title'    => __('Homem x Mulher', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_operacoes_de_paz_section'
  )
);
$wp_customize->add_setting('US_peru_operacoes_de_paz_homem_mulher', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_operacoes_de_paz_homem_mulher', array(
  'label'   => __('Homem x Mulher', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_operacoes_de_paz_homem_mulher_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor Homem',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Valor Mulher',
  'customizer_repeater_field03_control' => true,
)));

$wp_customize->add_section(
  'US_peru_operacoes_de_paz_total_efetivo_section',
  array(
    'title'    => __('Total Efetivo', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_operacoes_de_paz_section'
  )
);
$wp_customize->add_setting('US_peru_operacoes_de_paz_total_efetivo', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_operacoes_de_paz_total_efetivo', array(
  'label'   => __('Total Efetivo', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_operacoes_de_paz_total_efetivo_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor Policial',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Valor Militares',
  'customizer_repeater_field03_control' => true,
  'customizer_repeater_label_field04_control' => 'Valor Observador',
  'customizer_repeater_field04_control' => true,
)));

/* transferencia_de_armamentos */
$wp_customize->add_panel(
  new US_WP_Customize_Panel($wp_customize, 'US_peru_transferencia_de_armamentos_section', array(
    'priority'         => 201,
    'title'            => __('Transferência de Armamentos', 'upsites'),
    'description'      => __('Transferência de Armamentos', 'upsites'),
    'panel'            => 'US_peru',
  ))
);
$wp_customize->add_section(
  'US_peru_transferencia_de_armamentos_geral_section',
  array(
    'title'    => __('Geral', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_transferencia_de_armamentos_section'
  )
);
$wp_customize->add_setting('US_peru_transferencia_de_armamentos_xml', array(
  'capability' => 'edit_theme_options',
));
$wp_customize->add_control(
  new WP_Customize_Upload_Control(
    $wp_customize,
    'US_peru_transferencia_de_armamentos_xml_up',
    array(
      'label'      => __('XML', 'upsites'),
      'section'    => 'US_peru_transferencia_de_armamentos_geral_section',
      'settings'   => 'US_peru_transferencia_de_armamentos_xml',
    )
  )
);

$wp_customize->add_section(
  'US_peru_transferencia_de_armamentos_resumo_geral_importacoes_section',
  array(
    'title'    => __('Resumo Geral Importações', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_transferencia_de_armamentos_section'
  )
);
$wp_customize->add_setting('US_peru_transferencia_de_armamentos_resumo_geral_importacoes', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_transferencia_de_armamentos_resumo_geral_importacoes', array(
  'label'   => __('Resumo Geral Importações', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_transferencia_de_armamentos_resumo_geral_importacoes_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Segmento',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

$wp_customize->add_section(
  'US_peru_transferencia_de_armamentos_resumo_geral_exportacoes_section',
  array(
    'title'    => __('Resumo Geral Exportações', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_transferencia_de_armamentos_section'
  )
);
$wp_customize->add_setting('US_peru_transferencia_de_armamentos_resumo_geral_exportacoes', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_transferencia_de_armamentos_resumo_geral_exportacoes', array(
  'label'   => __('Resumo Geral Exportações', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_transferencia_de_armamentos_resumo_geral_exportacoes_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Segmento',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor',
  'customizer_repeater_field02_control' => true,
)));

$wp_customize->add_section(
  'US_peru_transferencia_de_armamentos_importacoes_section',
  array(
    'title'    => __('Importações', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_transferencia_de_armamentos_section'
  )
);
$wp_customize->add_setting('US_peru_transferencia_de_armamentos_importacoes', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_transferencia_de_armamentos_importacoes', array(
  'label'   => __('Importações', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_transferencia_de_armamentos_importacoes_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor Aeronaves',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Valor Veículos blindados',
  'customizer_repeater_field03_control' => true,
  'customizer_repeater_label_field04_control' => 'Valor Artilharia',
  'customizer_repeater_field04_control' => true,
  'customizer_repeater_label_field05_control' => 'Valor Mísseis',
  'customizer_repeater_field05_control' => true,
  'customizer_repeater_label_field06_control' => 'Valor Navios',
  'customizer_repeater_field06_control' => true,
  'customizer_repeater_label_field07_control' => 'Valor Motores',
  'customizer_repeater_field07_control' => true,
  'customizer_repeater_label_field08_control' => 'Valor Sensores',
  'customizer_repeater_field08_control' => true,
  'customizer_repeater_label_field09_control' => 'Valor Sistemas de Defesa Aérea',
  'customizer_repeater_field09_control' => true,
  'customizer_repeater_label_field10_control' => 'Valor Outros',
  'customizer_repeater_field10_control' => true,
)));

$wp_customize->add_section(
  'US_peru_transferencia_de_armamentos_exportacoes_section',
  array(
    'title'    => __('Exportações', 'upsites'),
    'priority' => 201,
    'panel'    => 'US_peru_transferencia_de_armamentos_section'
  )
);
$wp_customize->add_setting('US_peru_transferencia_de_armamentos_exportacoes', array(
  'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control(new Customizer_Simple_Repeater($wp_customize, 'US_peru_transferencia_de_armamentos_exportacoes', array(
  'label'   => __('Exportações', 'upsites'),
  'item_name' => __('Item', 'upsites'),
  'section' => 'US_peru_transferencia_de_armamentos_exportacoes_section',
  'priority' => 207,
  'customizer_repeater_label_field01_control' => 'Ano',
  'customizer_repeater_field01_control' => true,
  'customizer_repeater_label_field02_control' => 'Valor Aeronaves',
  'customizer_repeater_field02_control' => true,
  'customizer_repeater_label_field03_control' => 'Valor Veículos blindados',
  'customizer_repeater_field03_control' => true,
  'customizer_repeater_label_field04_control' => 'Valor Artilharia',
  'customizer_repeater_field04_control' => true,
  'customizer_repeater_label_field05_control' => 'Valor Mísseis',
  'customizer_repeater_field05_control' => true,
  'customizer_repeater_label_field06_control' => 'Valor Navios',
  'customizer_repeater_field06_control' => true,
)));
  /* end:peru */
