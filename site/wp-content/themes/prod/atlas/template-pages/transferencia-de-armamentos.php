<?php
/*
Template Name: Transferência de Armamentos
*/
get_template_part('template-parts/header-internal');

$impAno2 = [];
$impAno = [];
$impAeronaves = [];
$impVeiculosblindados = [];
$impArtilharia = [];
$impMisseis = [];
$impNavios = [];
$impMotores = [];
$impSensores = [];
$impSistemasDefesaAerea = [];
$impOutros = [];
$US_argentina_transferencia_de_armamentos_importacoes = get_theme_mod('US_argentina_transferencia_de_armamentos_importacoes', json_encode(array()));
$US_argentina_transferencia_de_armamentos_importacoes_decoded = json_decode($US_argentina_transferencia_de_armamentos_importacoes);
foreach ($US_argentina_transferencia_de_armamentos_importacoes_decoded as $repeater_item) {
  array_push($impAno, $repeater_item->field01);
  array_push($impAeronaves, $repeater_item->field02);
  array_push($impVeiculosblindados, $repeater_item->field03);
  array_push($impArtilharia, $repeater_item->field04);
  array_push($impMisseis, $repeater_item->field05);
  array_push($impNavios, $repeater_item->field06);
  array_push($impMotores, $repeater_item->field07);
  array_push($impSensores, $repeater_item->field08);
  array_push($impSistemasDefesaAerea, $repeater_item->field09);
  array_push($impOutros, $repeater_item->field10);
}
$impAno2 = $impAno;
$impAno = json_encode($impAno);
$impAeronaves = json_encode($impAeronaves);
$impVeiculosblindados = json_encode($impVeiculosblindados);
$impArtilharia = json_encode($impArtilharia);
$impMisseis = json_encode($impMisseis);
$impNavios = json_encode($impNavios);
$impMotores = json_encode($impMotores);
$impSensores = json_encode($impSensores);
$impSistemasDefesaAerea = json_encode($impSistemasDefesaAerea);
$impOutros = json_encode($impOutros);


$expAno2 = [];
$expAno = [];
$expAeronaves = [];
$expVeiculosblindados = [];
$expArtilharia = [];
$expMisseis = [];
$expNavios = [];
$US_argentina_transferencia_de_armamentos_exportacoes = get_theme_mod('US_argentina_transferencia_de_armamentos_exportacoes', json_encode(array()));
$US_argentina_transferencia_de_armamentos_exportacoes_decoded = json_decode($US_argentina_transferencia_de_armamentos_exportacoes);
foreach ($US_argentina_transferencia_de_armamentos_exportacoes_decoded as $repeater_item) {
  array_push($expAno, $repeater_item->field01);
  array_push($expAeronaves, $repeater_item->field02);
  array_push($expVeiculosblindados, $repeater_item->field03);
  array_push($expArtilharia, $repeater_item->field04);
  array_push($expMisseis, $repeater_item->field05);
  array_push($expNavios, $repeater_item->field06);
}
$expAno2 = $expAno;
$expAno = json_encode($expAno);
$expAeronaves = json_encode($expAeronaves);
$expVeiculosblindados = json_encode($expVeiculosblindados);
$expArtilharia = json_encode($expArtilharia);
$expMisseis = json_encode($expMisseis);
$expNavios = json_encode($expNavios);

$country_docs_text_btn_01 		= get_theme_mod('US_country_docs_text_btn_01');
$country_docs_file_btn 		    = get_theme_mod('US_country_docs_file_btn');
?>
<!-- main -->
<main>
  <div class="container-full">
    <!-- grid-primary -->
    <div class="grid-primary">
      <!-- sidebar -->
      <?php get_template_part('template-parts/sidebar'); ?>
      <!-- end:sidebar -->
      <!-- content -->
      <div class="content pbottom-30">
        <div class="product">
          <!-- title -->
          <div class="title">
            <h1><?php the_title() ?></h1>
            <!-- btns-box -->
            <?php 
              if($country_docs_file_btn) {
                echo '<div class="btns-box"><a href="' . $country_docs_file_btn . '" download class="down text"><svg class="icon"><use xlink:href="' . get_bloginfo('template_url') . '/assets/img/icons.svg#download"></use></svg> ' . $country_docs_text_btn_01 . '</a></div>';
              }
            ?>
            
            <div class="filter-nation">
              <label for="">Selecionar país</label>
              <select name="" class="countryAll" id="countryAll">
                <option selected="" value="argentina">Argentina</option>
                <option value="bolivia">Bolivia</option>
                <option value="brasil">Brasil</option>
                <option value="chile">Chile</option>
                <option value="colombia">Colômbia</option>
                <option value="equador">Equador</option>
                <option value="guiana">Guiana</option>
                <option value="paraguai">Paraguai</option>
                <option value="peru">Peru</option>
                <option value="uruguai">Uruguai</option>
                <option value="venezuela">Venezuela</option>
              </select>
            </div>
          </div>
          <!-- end:title -->
          <!-- subtitle -->
          <div class="subtitle">
            <h2>Resumo Geral Importações
              <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                </svg>
              </a>
            </h2>
            <!-- btns-box -->
            <div class="btns-box">
              <a href="<?= get_theme_mod('US_argentina_transferencia_de_armamentos_xml') ?>" download class="down downChange">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                </svg>
              </a>
              <div class="share">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#share"></use>
                </svg>
                <div class="div"></div>
                <svg class="icon iconfat">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#chevron"></use>
                </svg>
                <div class="list-share">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#facebook"></use>
                    </svg>
                  </a>
                  <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#twitter"></use>
                    </svg>
                  </a>
                  <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#whatsapp"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end:btns-box -->
          </div>
          <!-- end:subtitle -->

          <!-- list-box -->
          <div class="list-box four imp">
            <?php
            $US_argentina_transferencia_de_armamentos_resumo_geral_importacoes = get_theme_mod('US_argentina_transferencia_de_armamentos_resumo_geral_importacoes', json_encode(array()));
            $US_argentina_transferencia_de_armamentos_resumo_geral_importacoes_decoded = json_decode($US_argentina_transferencia_de_armamentos_resumo_geral_importacoes);
            foreach ($US_argentina_transferencia_de_armamentos_resumo_geral_importacoes_decoded as $repeater_item) {
              echo '<div class="box statistics"><span>' . $repeater_item->field02 . '</span><h3>' . $repeater_item->field01 . '</h3></div>';
            }
            ?>
          </div>
          <!-- list-box -->
          <hr>
          <!-- subtitle -->
          <div class="subtitle">
            <h2>Resumo Geral Exportações
              <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                </svg>
              </a>
            </h2>
            <!-- btns-box -->
            <div class="btns-box">
              <a href="<?= get_theme_mod('US_argentina_transferencia_de_armamentos_xml') ?>" download class="down downChange">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                </svg>
              </a>
              <div class="share">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#share"></use>
                </svg>
                <div class="div"></div>
                <svg class="icon iconfat">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#chevron"></use>
                </svg>
                <div class="list-share">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#facebook"></use>
                    </svg>
                  </a>
                  <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#twitter"></use>
                    </svg>
                  </a>
                  <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#whatsapp"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- end:btns-box -->
          </div>
          <!-- end:subtitle -->

          <!-- list-box -->
          <div class="list-box four exp">
            <?php
            $US_argentina_transferencia_de_armamentos_resumo_geral_exportacoes = get_theme_mod('US_argentina_transferencia_de_armamentos_resumo_geral_exportacoes', json_encode(array()));
            $US_argentina_transferencia_de_armamentos_resumo_geral_exportacoes_decoded = json_decode($US_argentina_transferencia_de_armamentos_resumo_geral_exportacoes);
            foreach ($US_argentina_transferencia_de_armamentos_resumo_geral_exportacoes_decoded as $repeater_item) {
              echo '<div class="box statistics"><span>' . $repeater_item->field02 . '</span><h3>' . $repeater_item->field01 . '</h3></div>';
            }
            ?>
          </div>
          <!-- list-box -->

          <!-- list-box -->
          <div class="list-box list-graphics two mtop-55">
            <div class="box graphic">
              <div class="header">
                <h3>Importações
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_transferencia_de_armamentos_xml') ?>" download class="down downChange">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                    </svg>
                  </a>
                  <div class="share">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#share"></use>
                    </svg>
                    <div class="div"></div>
                    <svg class="icon iconfat">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#chevron"></use>
                    </svg>
                    <div class="list-share">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#facebook"></use>
                        </svg>
                      </a>
                      <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#twitter"></use>
                        </svg>
                      </a>
                      <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#whatsapp"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end:btns-box -->
              </div>
              <div class="filter">
                <label for="">Período</label>
                <select class="importint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($impAno2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="importend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($impAno2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics importL" style="height: 490px;">
                <canvas id="import"></canvas>
              </div>
            </div>
            <div class="box graphic">
              <div class="header">
                <h3>Exportações
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_transferencia_de_armamentos_xml') ?>" download class="down downChange">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                    </svg>
                  </a>
                  <div class="share">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#share"></use>
                    </svg>
                    <div class="div"></div>
                    <svg class="icon iconfat">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#chevron"></use>
                    </svg>
                    <div class="list-share">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#facebook"></use>
                        </svg>
                      </a>
                      <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#twitter"></use>
                        </svg>
                      </a>
                      <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#whatsapp"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end:btns-box -->
              </div>
              <div class="filter">
                <label for="">Período</label>
                <select class="exportint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($expAno2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="exportend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($expAno2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics exportL" style="height: 490px;">
                <canvas id="export"></canvas>
              </div>
            </div>
          </div>
          <!-- list-box -->
        </div>
        <div class="footer">
          <p>©2022 Atlas - GEDES</p>
        </div>
      </div>
      <!-- end:content -->
    </div>
    <!-- end:grid-primary -->
  </div>
</main>
<!-- end:main -->
<?php get_footer(); ?>

<script>
  jQuery('#countryAll, .importint, .importend, .exportint, .exportend').on('change', function() {
    var $thisChange = jQuery(this).attr('class');
    var $this = jQuery('#countryAll').val();
    var $name = jQuery('#countryAll').find(":selected").text();
    var $int = jQuery('.importint').val();
    var $end = jQuery('.importend').val();
    var $intEX = jQuery('.exportint').val();
    var $endEX = jQuery('.exportend').val();

    jQuery.ajax({
      url: usAjax.ajaxurl,
      type: 'POST',
      data: {
        action: 'data_fetch',
        contry: $this,
        field01: 'transferencia_de_armamentos_resumo_geral_importacoes',
        field02: 'transferencia_de_armamentos_resumo_geral_exportacoes',
        field03: 'transferencia_de_armamentos_importacoes',
        field04: 'transferencia_de_armamentos_exportacoes',
        field05: 'transferencia_de_armamentos_xml',
        //_ajax_nonce: usAjax.nonce,
      },
      success: function(data) {
        var field00 = jQuery.parseJSON(data.data[0]);
        var field01 = jQuery.parseJSON(data.data[1]);
        var field02 = jQuery.parseJSON(data.data[2]);
        var field03 = jQuery.parseJSON(data.data[3]);
        var field04 = data.data[4];
        
        jQuery('.downChange').attr('href', field04);
        jQuery('.list-box.four.imp').html('');
        field00.forEach(function(el, index) {
          jQuery('.list-box.four.imp').append('<div class="box statistics"><span>' + el.field02 + '</span><h3>' + el.field01 + '</h3></div>');
        });
        jQuery('.list-box.four.exp').html('');
        field01.forEach(function(el, index) {
          jQuery('.list-box.four.exp').append('<div class="box statistics"><span>' + el.field02 + '</span><h3>' + el.field01 + '</h3></div>');
        });

        if($thisChange != 'exportint' && $thisChange != 'exportend') {
          var impAno = [];
          var impAeronaves = [];
          var impVeiculosblindados = [];
          var impArtilharia = [];
          var impMisseis = [];
          var impNavios = [];
          var impMotores = [];
          var impSensores = [];
          var impSistemasDefesaAerea = [];
          var impOutros = [];
          let objfield02 = {};
  
          jQuery("canvas#import").remove();
          jQuery("div.importL").append('<canvas id="import"></canvas>');
          field02.forEach(function(el, index) {
            if (el.field01 >= $int && el.field01 <= $end  ) {
              objfield02[el.field01] = {
                impAeronaves: el.field02,
                impVeiculosblindados: el.field03,
                impArtilharia: el.field04,
                impMisseis: el.field05,
                impNavios: el.field06,
                impMotores: el.field07,
                impSensores: el.field08,
                impSistemasDefesaAerea: el.field09,
                impOutros: el.field10,
              }
            }
          });
          jQuery.each(objfield02, function(key, val) {
            impAno.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'impAeronaves') {
                v = val == '' ? 0 : val;
                impAeronaves.push(v);
              }
              if(key === 'impVeiculosblindados') {
                v = val == '' ? 0 : val;
                impVeiculosblindados.push(v);
              }
              if(key === 'impArtilharia') {
                v = val == '' ? 0 : val;
                impArtilharia.push(v);
              }
              if(key === 'impMisseis') {
                v = val == '' ? 0 : val;
                impMisseis.push(v);
              }
              if(key === 'impNavios') {
                v = val == '' ? 0 : val;
                impNavios.push(v);
              }
              if(key === 'impMotores') {
                v = val == '' ? 0 : val;
                impMotores.push(v);
              }
              if(key === 'impSensores') {
                v = val == '' ? 0 : val;
                impSensores.push(v);
              }
              if(key === 'impSistemasDefesaAerea') {
                v = val == '' ? 0 : val;
                impSistemasDefesaAerea.push(v);
              }
              if(key === 'impOutros') {
                v = val == '' ? 0 : val;
                impOutros.push(v);
              }
            });
          });
          const importG = new Chart(jQuery('#import'), {
            type: 'bar',
            data: {
              labels: impAno,
              datasets: [{
                label: 'Aeronaves',
                backgroundColor: "#F28E2B",
                data: impAeronaves,
              }, {
                label: 'Veículos blindados',
                backgroundColor: "#4E79A7",
                data: impVeiculosblindados,
              }, {
                label: 'Artilharia',
                backgroundColor: "#59A14F",
                data: impArtilharia,
              }, {
                label: 'Mísseis',
                backgroundColor: "#B79A2F",
                data: impMisseis,
              }, {
                label: 'Navios',
                backgroundColor: "#BBB1AD",
                data: impNavios,
              }, {
                label: 'Motores',
                backgroundColor: "#A1CBE8",
                data: impMotores,
              }, {
                label: 'Sensores',
                backgroundColor: "#E1585A",
                data: impSensores,
              }, {
                label: 'Sistemas de Defesa Aérea ',
                backgroundColor: "#8DD17E",
                data: impSistemasDefesaAerea,
              }, {
                label: 'Outros',
                backgroundColor: "#FF9E9B",
                data: impOutros,
              }],
            },
            options: {
              tooltips: {
                displayColors: true,
                callbacks: {
                  mode: 'x',
                },
              },
              scales: {
                x: {
                  stacked: true
                },
                y: {
                  stacked: true
                }
              },
              responsive: true,
              maintainAspectRatio: false,
              legend: {
                position: 'bottom'
              },
            }
          });
        }


        if($thisChange != 'importint' && $thisChange != 'importend') {
          var expAno = [];
          var expAeronaves = [];
          var expVeiculosblindados = [];
          var expArtilharia = [];
          var expMisseis = [];
          var expNavios = [];
          let objfield03 = {};
          jQuery("canvas#export").remove();
          jQuery("div.exportL").append('<canvas id="export"></canvas>');
          field03.forEach(function(el, index) {
            if (el.field01 >= $intEX && el.field01 <= $endEX  ) {
              objfield03[el.field01] = {
                expAeronaves: el.field02,
                expVeiculosblindados: el.field03,
                expArtilharia: el.field04,
                expMisseis: el.field05,
                expNavios: el.field06,
              }
            }
          });
          console.log(objfield03);
          jQuery.each(objfield03, function(key, val) {
            expAno.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'expAeronaves') {
                v = val == '' ? 0 : val;
                expAeronaves.push(v);
              }
              if(key === 'expVeiculosblindados') {
                v = val == '' ? 0 : val;
                expVeiculosblindados.push(v);
              }
              if(key === 'expArtilharia') {
                v = val == '' ? 0 : val;
                expArtilharia.push(v);
              }
              if(key === 'expMisseis') {
                v = val == '' ? 0 : val;
                expMisseis.push(v);
              }
              if(key === 'expNavios') {
                v = val == '' ? 0 : val;
                expNavios.push(v);
              }
            });
          });
          const exportG = new Chart(jQuery('#export'), {
            type: 'bar',
            data: {
              labels: expAno,
              datasets: [{
                label: 'Aeronaves',
                backgroundColor: "#F28E2B",
                data: expAeronaves,
              }, {
                label: 'Veículos blindados',
                backgroundColor: "#4E79A7",
                data: expVeiculosblindados,
              }, {
                label: 'Artilharia',
                backgroundColor: "#59A14F",
                data: expArtilharia,
              }, {
                label: 'Mísseis',
                backgroundColor: "#B79A2F",
                data: expMisseis,
              }, {
                label: 'Navios',
                backgroundColor: "#BBB1AD",
                data: expNavios,
              }],
            },
            options: {
              tooltips: {
                displayColors: true,
                callbacks: {
                  mode: 'x',
                },
              },
              scales: {
                x: {
                  stacked: true
                },
                y: {
                  stacked: true
                }
              },
              responsive: true,
              maintainAspectRatio: false,
              legend: {
                position: 'bottom'
              },
            }
          });
        }
      }
    });

    return false;
  });
  const importG = new Chart(jQuery('#import'), {
    type: 'bar',
    data: {
      labels: <?php echo $impAno ?>,
      datasets: [{
        label: 'Aeronaves',
        backgroundColor: "#F28E2B",
        data: <?php echo $impAeronaves ?>,
      }, {
        label: 'Veículos blindados',
        backgroundColor: "#4E79A7",
        data: <?php echo $impVeiculosblindados ?>,
      }, {
        label: 'Artilharia',
        backgroundColor: "#59A14F",
        data: <?php echo $impArtilharia ?>,
      }, {
        label: 'Mísseis',
        backgroundColor: "#B79A2F",
        data: <?php echo $impMisseis ?>,
      }, {
        label: 'Navios',
        backgroundColor: "#BBB1AD",
        data: <?php echo $impNavios ?>,
      }, {
        label: 'Motores',
        backgroundColor: "#A1CBE8",
        data: <?php echo $impMotores ?>,
      }, {
        label: 'Sensores',
        backgroundColor: "#E1585A",
        data: <?php echo $impSensores ?>,
      }, {
        label: 'Sistemas de Defesa Aérea ',
        backgroundColor: "#8DD17E",
        data: <?php echo $impSistemasDefesaAerea ?>,
      }, {
        label: 'Outros',
        backgroundColor: "#FF9E9B",
        data: <?php echo $impOutros ?>,
      }],
    },
    options: {
      tooltips: {
        displayColors: true,
        callbacks: {
          mode: 'x',
        },
      },
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true
        }
      },
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: 'bottom'
      },
    }
  });
  const exportG = new Chart(jQuery('#export'), {
    type: 'bar',
    data: {
      labels: <?php echo $expAno ?>,
      datasets: [{
        label: 'Aeronaves',
        backgroundColor: "#F28E2B",
        data: <?php echo $expAeronaves ?>,
      }, {
        label: 'Veículos blindados',
        backgroundColor: "#4E79A7",
        data: <?php echo $expVeiculosblindados ?>,
      }, {
        label: 'Artilharia',
        backgroundColor: "#59A14F",
        data: <?php echo $expArtilharia ?>,
      }, {
        label: 'Mísseis',
        backgroundColor: "#B79A2F",
        data: <?php echo $expMisseis ?>,
      }, {
        label: 'Navios',
        backgroundColor: "#BBB1AD",
        data: <?php echo $expNavios ?>,
      }],
    },
    options: {
      tooltips: {
        displayColors: true,
        callbacks: {
          mode: 'x',
        },
      },
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true
        }
      },
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: 'bottom'
      },
    }
  });
  jQuery('#table').DataTable({
    searching: false,
    scrollX: true,
    scrollCollapse: true,
    fixedColumns: true
  });
</script>