<?php
/*
Template Name: Operações de Paz
*/
get_template_part('template-parts/header-internal');

$anohomemxmulher = [];
$homemxmulher = [];
$homem = 0;
$mulher = 0;

$US_argentina_operacoes_de_paz_homem_mulher = get_theme_mod('US_argentina_operacoes_de_paz_homem_mulher', json_encode(array()));
$US_argentina_operacoes_de_paz_homem_mulher_decoded = json_decode($US_argentina_operacoes_de_paz_homem_mulher);
foreach ($US_argentina_operacoes_de_paz_homem_mulher_decoded as $repeater_item) {
  array_push($anohomemxmulher, $repeater_item->field01);
  $homem = $homem + $repeater_item->field02;
  $mulher = $mulher + $repeater_item->field03;
}
array_push($homemxmulher, $homem, $mulher);
$homemxmulher = json_encode($homemxmulher);

$ano = [];
$policial = [];
$militares = [];
$observador = [];
$US_argentina_operacoes_de_paz_total_efetivo = get_theme_mod('US_argentina_operacoes_de_paz_total_efetivo', json_encode(array()));
$US_argentina_operacoes_de_paz_total_efetivo_decoded = json_decode($US_argentina_operacoes_de_paz_total_efetivo);
foreach ($US_argentina_operacoes_de_paz_total_efetivo_decoded as $repeater_item) {
  array_push($ano, $repeater_item->field01);
  array_push($policial, $repeater_item->field02);
  array_push($militares, $repeater_item->field03);
  array_push($observador, $repeater_item->field04);
}
$ano2 = $ano;
$ano = json_encode($ano);
$policial = json_encode($policial);
$militares = json_encode($militares);
$observador = json_encode($observador);

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
            <h2>Resumo Geral
              <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                </svg>
              </a>
            </h2>
            <!-- btns-box -->
            <div class="btns-box">
              <a href="<?= get_theme_mod('US_argentina_operacoes_de_paz_xml') ?>" download class="down downChange">
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
          <div class="list-box four">
            <?php
            $US_argentina_operacoes_de_paz_resumo_geral = get_theme_mod('US_argentina_operacoes_de_paz_resumo_geral', json_encode(array()));
            $US_argentina_operacoes_de_paz_resumo_geral_decoded = json_decode($US_argentina_operacoes_de_paz_resumo_geral);
            foreach ($US_argentina_operacoes_de_paz_resumo_geral_decoded as $repeater_item) {
              echo '<div class="box statistics"><span>' . $repeater_item->field02 . '</span><h3>' . $repeater_item->field01 . '</h3></div>';
            }
            ?>
          </div>
          <!-- list-box -->

          <!-- list-box -->
          <div class="list-box list-graphics two mtop-55">
            <div class="box graphic">
              <div class="header">
                <h3>Homem x Mulher
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_operacoes_de_paz_xml') ?>" download class="down downChange">
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
                <select class="quantHMLint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($anohomemxmulher as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="quantHMLend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($anohomemxmulher as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics quantHML">
                <canvas id="quantHM"></canvas>
              </div>
            </div>

            <div class="box graphic">
              <div class="header">
                <h3>Total Efetivo
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_operacoes_de_paz_xml') ?>" download class="down downChange">
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
                <select class="totalefetivoint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($ano2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="totalefetivoend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($ano2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics totalefetivoL" style="height: 490px;">
                <canvas id="totalefetivo"></canvas>
              </div>
            </div>
          </div>
          <!-- list-box -->
          <hr>
          <!-- list-box -->
          <div class="list-box one">
            <div class="box tablesimple">
              <table id="simpletable" class="mtop-50 display ui table">
                <thead>
                  <tr>
                    <th width="25%">Centros de treinamento</th>
                    <th>Descrição</th>
                    <th width="15%">Duração</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if (have_rows('operacoes_de_paz_page')) :
									while (have_rows('operacoes_de_paz_page')) : the_row();
										echo '<tr><td>' . get_sub_field('centros_de_treinamento') . '</td><td>' . get_sub_field('descricao') . '</td><td>' . get_sub_field('duracao') . '</td></tr>';
									endwhile;
								endif;
                ?>
                
                </tbody>
              </table>
              <!-- btns-box -->
              <div class="btns-box">
                <a href="<?= get_field('arquivo_operacoes_de_paz_page') ?>" download class="down">
                  <svg class="icon">
                    <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                  </svg>
                </a>
              </div>
              <!-- end:btns-box -->
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
  /*operacaoPaz('assets/planilhas/operacao-paz-brasil.xml', 0);
  jQuery('#countryAll').on('change', function() {
    var $this = jQuery(this).val();
    var $name = jQuery(this).find(":selected").text();
    operacaoPaz('assets/planilhas/operacao-paz-' + $this + '.xml', 1);
    return false;
  });*/
  jQuery('#countryAll, .totalefetivoend, .totalefetivoint, .quantHMLint, .quantHMLend').on('change', function() {
    var $thisChange = jQuery(this).attr('class');
    var $this = jQuery('#countryAll').val();
    var $name = jQuery('#countryAll').find(":selected").text();
    var $int = jQuery('.totalefetivoint').val();
    var $end = jQuery('.totalefetivoend').val();
    var $intHM = jQuery('.quantHMLint').val();
    var $endHM = jQuery('.quantHMLend').val();

    jQuery.ajax({
      url: usAjax.ajaxurl,
      type: 'POST',
      data: {
        action: 'data_fetch',
        contry: $this,
        field01: 'operacoes_de_paz_resumo_geral',
        field02: 'operacoes_de_paz_homem_mulher',
        field03: 'operacoes_de_paz_total_efetivo',
        field04: 'operacoes_de_paz_xml',
        // _ajax_nonce: usAjax.nonce,
      },
      success: function(data) {
        var field00 = jQuery.parseJSON(data.data[0]);
        var field01 = jQuery.parseJSON(data.data[1]);
        var field02 = jQuery.parseJSON(data.data[2]);
        var field03 = data.data[3];
        
        if($thisChange != 'totalefetivoint' && $thisChange != 'totalefetivoend') {
          jQuery('.downChange').attr('href', field03);
          jQuery('.list-box.four').html('');
          field00.forEach(function(el, index) {
            jQuery('.list-box.four').append('<div class="box statistics"><span>' + el.field02 + '</span><h3>' + el.field01 + '</h3></div>');
          });
  
          //console.log(field01);
          var homemxmulher = [];
          let objfield01 = {};
          jQuery("canvas#quantHM").remove();
          jQuery("div.quantHML").append('<canvas id="quantHM"></canvas>');
          field01.forEach(function(el, index) {
            if (el.field01 >= $intHM && el.field01 <= $endHM  ) {
              objfield01[el.field01] = {
                homem: el.field02,
                mulher: el.field03,
              }
            }
            // homemxmulher.push(el.field01);
            // homemxmulher.push(el.field02);
          });
          var homem = 0;
          var mulher = 0;
          jQuery.each(objfield01, function(key, val) {
            jQuery.each(val, function(key, val) {
              if(key === 'homem') {
                v = val == '' ? 0 : val;
                homem = homem + parseInt(v);
              }
              if(key === 'mulher') {
                v = val == '' ? 0 : val;
                mulher = mulher + parseInt(v);
              }
            });
          });
          homemxmulher.push(homem, mulher);
          console.log(homemxmulher);
          const quantHMG = new Chart(jQuery('#quantHM'), {
            type: 'doughnut',
            data: {
              labels: ["Homem", "Mulher"],
              datasets: [{
                data: homemxmulher,
                borderColor: ['#59A14F', '#F28E2B'],
                backgroundColor: ['#59A14F', '#F28E2B'],
                borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
            }
          });
        }

        if($thisChange != 'quantHMLint' && $thisChange != 'quantHMLend') {
          var ano = [];
          var policial = [];
          var observador = [];
          var militares = [];
          let objfield02 = {};
          jQuery("canvas#totalefetivo").remove();
          jQuery("div.totalefetivoL").append('<canvas id="totalefetivo"></canvas>');
          field02.forEach(function(el, index) {
            if (el.field01 >= $int && el.field01 <= $end  ) {
              objfield02[el.field01] = {
                policial: el.field02,
                militares: el.field03,
                observador: el.field04,
              }
            }
          });
          
          jQuery.each(objfield02, function(key, val) {
            ano.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'policial') {
                v = val == '' ? 0 : val;
                policial.push(v);
              }
              if(key === 'observador') {
                v = val == '' ? 0 : val;
                observador.push(v);
              }
              if(key === 'militares') {
                v = val == '' ? 0 : val;
                militares.push(v);
              }
            });
          });
          const totalefetivoG = new Chart(jQuery('#totalefetivo'), {
            type: 'bar',
            data: {
              labels: ano,
              datasets: [{
                label: 'Policial',
                backgroundColor: "#F28E2B",
                data: policial,
              }, {
                label: 'Observador',
                backgroundColor: "#4E79A7",
                data: observador,
              }, {
                label: 'Militares',
                backgroundColor: "#59A14F",
                data: militares,
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
  const quantHMG = new Chart(jQuery('#quantHM'), {
    type: 'doughnut',
    data: {
      labels: ["Homem", "Mulher"],
      datasets: [{
        data: <?php echo $homemxmulher ?>,
        borderColor: ['#59A14F', '#F28E2B'],
        backgroundColor: ['#59A14F', '#F28E2B'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    }
  });
  const totalefetivoG = new Chart(jQuery('#totalefetivo'), {
    type: 'bar',
    data: {
      labels: <?php echo $ano ?>,
      datasets: [{
        label: 'Policial',
        backgroundColor: "#F28E2B",
        data: <?php echo $policial ?>,
      }, {
        label: 'Observador',
        backgroundColor: "#4E79A7",
        data: <?php echo $observador ?>,
      }, {
        label: 'Militares',
        backgroundColor: "#59A14F",
        data: <?php echo $militares ?>,
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
</script>