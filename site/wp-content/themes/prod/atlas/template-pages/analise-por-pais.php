<?php
/*
Template Name: Análise por País
*/
get_template_part('template-parts/header-internal');
$ano2 = [];
$ano = [];
$moedanacional = [];
$pib = [];
$US_argentina_analise_por_pais_gastos_militares = get_theme_mod('US_argentina_analise_por_pais_gastos_militares', json_encode(array()));
$US_argentina_analise_por_pais_gastos_militares_decoded = json_decode($US_argentina_analise_por_pais_gastos_militares);
foreach ($US_argentina_analise_por_pais_gastos_militares_decoded as $repeater_item) {
  array_push($ano, $repeater_item->field01);
  array_push($moedanacional, $repeater_item->field02);
  array_push($pib, $repeater_item->field03);
}
$ano2 = $ano;
$ano = json_encode($ano);
$moedanacional = json_encode($moedanacional);
$pib = json_encode($pib);


$anooperacoespaz2 = [];
$anooperacoespaz = [];
$operacoespaz = [];
$tropas = 0;
$observador = 0;
$policial = 0;
$US_argentina_analise_por_pais_operacoes_de_paz = get_theme_mod('US_argentina_analise_por_pais_operacoes_de_paz', json_encode(array()));
$US_argentina_analise_por_pais_operacoes_de_paz_decoded = json_decode($US_argentina_analise_por_pais_operacoes_de_paz);
foreach ($US_argentina_analise_por_pais_operacoes_de_paz_decoded as $repeater_item) {
  array_push($anooperacoespaz, $repeater_item->field01);
  $tropas = $tropas + $repeater_item->field02;
  $observador = $observador + $repeater_item->field03;
  $policial = $policial + $repeater_item->field04;
}
$anooperacoespaz2 = $anooperacoespaz;
$anooperacoespaz = json_encode($anooperacoespaz);
array_push($operacoespaz, $tropas, $observador, $policial);
$operacoespaz = json_encode($operacoespaz);

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
            <div class="filter-nation">
              <label for="">Selecionar país</label>
              <select name="" id="countryAll">
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
            <h2>Base Industrial de Defesa
              <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                <svg class="icon">
                  <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                </svg>
              </a>
            </h2>
            <!-- btns-box -->
            <div class="btns-box">
              <a href="<?= get_theme_mod('US_argentina_analise_por_pais_xml') ?>" download class="down downChange">
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
            $US_argentina_analise_por_pais_base_industrial_defesa = get_theme_mod('US_argentina_analise_por_pais_base_industrial_defesa', json_encode(array()));
            $US_argentina_analise_por_pais_base_industrial_defesa_decoded = json_decode($US_argentina_analise_por_pais_base_industrial_defesa);
            foreach ($US_argentina_analise_por_pais_base_industrial_defesa_decoded as $repeater_item) {
              echo '<div class="box statistics"><span>' . $repeater_item->field02 . '</span><h3>' . $repeater_item->field01 . '</h3></div>';
            }
            ?>
          </div>
          <!-- list-box -->

          <!-- list-box -->
          <div class="list-box list-graphics two mtop-55">
            <div class="box graphic">
              <div class="header">
                <h3>Gastos Militares
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_analise_por_pais_xml') ?>" download class="down downChange">
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
                <select class="allmoedalocalint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($ano2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="allmoedalocalend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($ano2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics allmoedalocalL">
                <canvas id="allmoedalocal"></canvas>
              </div>
            </div>
            <div class="box graphic">
              <div class="header">
                <h3>Operações de Paz
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h3>
                <!-- btns-box -->
                <div class="btns-box">
                  <a href="<?= get_theme_mod('US_argentina_analise_por_pais_xml') ?>" download class="down downChange">
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
                <select class="operacaoPazint">
                  <option value='0' selected>selecione</option>
                  <?php
                    foreach ($anooperacoespaz2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
                <span class="div"></span>
                <select class="operacaoPazend">
                  <option value='3000' selected>selecione</option>
                  <?php
                    foreach ($anooperacoespaz2 as $item) {
                      echo '<option value="'.$item.'">'.$item.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="graphics operacaoPazL">
                <canvas id="operacaoPaz"></canvas>
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
  jQuery('#countryAll,.allmoedalocalint,.allmoedalocalend,.operacaoPazint,.operacaoPazend').on('change', function() {
    var $thisChange = jQuery(this).attr('class');
    var $this = jQuery('#countryAll').val();
    var $name = jQuery('#countryAll').find(":selected").text();
    var $allmoedalocalint = jQuery('.allmoedalocalint').val();
    var $allmoedalocalend = jQuery('.allmoedalocalend').val();
    var $operacaoPazint = jQuery('.operacaoPazint').val();
    var $operacaoPazend = jQuery('.operacaoPazend').val();
    console.log($this);

    jQuery.ajax({
      url: usAjax.ajaxurl,
      type: 'POST',
      data: {
        action: 'data_fetch',
        contry: $this,
        field01: 'analise_por_pais_base_industrial_defesa',
        field02: 'analise_por_pais_gastos_militares',
        field03: 'analise_por_pais_operacoes_de_paz',
        field04: 'analise_por_pais_xml',
        //_ajax_nonce: usAjax.nonce,
      },
      success: function(data) {
        var field00 = jQuery.parseJSON(data.data[0]);
        var field01 = jQuery.parseJSON(data.data[1]);
        var field02 = jQuery.parseJSON(data.data[2]);
        var field03 = data.data[3];
        // console.log(field00);
        jQuery('.list-box.four').html('');
        field00.forEach(function(el, index) {
          jQuery('.list-box.four').append('<div class="box statistics"><span>' + el.field02 + '</span><h3>' + el.field01 + '</h3></div>');
        });

        jQuery('.downChange').attr('href', field03);

        
        var ano = [];
        var moedanacional = [];
        var pib = [];
        let objfield01 = {};
        jQuery("canvas#allmoedalocal").remove();
        jQuery("div.allmoedalocalL").append('<canvas id="allmoedalocal"></canvas>');
        field01.forEach(function(el, index) {
          if (el.field01 >= $allmoedalocalint && el.field01 <= $allmoedalocalend  ) {
            objfield01[el.field01] = {
              moedanacional: el.field02,
              pib: el.field03,
            }
          }
        });
        jQuery.each(objfield01, function(key, val) {
          ano.push(key);
          jQuery.each(val, function(key, val) {
            if(key === 'moedanacional') {
              v = val == '' ? 0 : val;
              moedanacional.push(v);
            }
            if(key === 'pib') {
              v = val == '' ? 0 : val;
              pib.push(v);
            }
          });
        });
        const allmoedalocal = new Chart(jQuery('#allmoedalocal'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Em moeda nacional',
              data: moedanacional,
              yAxisID: 'moedalocal'
            }, {
              type: 'line',
              label: 'Em % PIB',
              data: pib,
              borderColor: 'rgba(0, 0, 0, 1)',
              borderWidth: 1,
              yAxisID: 'pib'
            }],
            labels: ano
          },
          options: {
            responsive: true,
            legend: {
              display: false,
            },
            scales: {
              moedalocal: {
                beginAtZero: true,
                type: 'linear',
                position: 'left',
              },
              pib: {
                beginAtZero: true,
                type: 'linear',
                position: "right",
                grid: {
                  display: false
                },
              }
            }
          }
        });

        if($thisChange != 'allmoedalocalint' && $thisChange != 'allmoedalocalend') {
          var operacoespaz = [];
          let objfield02 = {};
          jQuery("canvas#operacaoPaz").remove();
          jQuery("div.operacaoPazL").append('<canvas id="operacaoPaz"></canvas>');
          field02.forEach(function(el, index) {
            if (el.field01 >= $operacaoPazint && el.field01 <= $operacaoPazend  ) {
              objfield02[el.field01] = {
                tropas: el.field02,
                observador: el.field03,
                policial: el.field04,
              }
            }
          });
          var tropas = 0;
          var observador = 0;
          var policial = 0;
          console.log(objfield02);
          jQuery.each(objfield02, function(key, val) {
            jQuery.each(val, function(key, val) {
              if(key === 'tropas') {
                v = val == '' ? 0 : val;
                tropas = tropas + parseInt(v);
              }
              if(key === 'observador') {
                v = val == '' ? 0 : val;
                observador = observador + parseInt(v);
              }
              if(key === 'policial') {
                v = val == '' ? 0 : val;
                policial = policial + parseInt(v);
              }
            });
          });
          operacoespaz.push(tropas, observador, policial);
          const operacaoPaz = new Chart(jQuery('#operacaoPaz'), {
            data: {
              datasets: [{
                type: 'doughnut',
                label: 'Bar Dataset',
                data: operacoespaz,
                backgroundColor: [
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                ],
              }],
              labels: ['Tropas', 'Observador', 'Policial']
            },
            options: {
              responsive: true,
              plugins: {
                legend: {
                  display: false,
                }
              }
            }
          });
        }
      }
    });

    return false;
  });

  if (jQuery('#allmoedalocal').length > 0) {
    const allmoedalocal = new Chart(jQuery('#allmoedalocal'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Em moeda nacional',
          data: <?php echo $moedanacional ?>,
          yAxisID: 'moedalocal'
        }, {
          type: 'line',
          label: 'Em % PIB',
          data: <?php echo $pib ?>,
          borderColor: 'rgba(0, 0, 0, 1)',
          borderWidth: 1,
          yAxisID: 'pib'
        }],
        labels: <?php echo $ano ?>
      },
      options: {
        responsive: true,
        legend: {
          display: false,
        },
        scales: {
          moedalocal: {
            beginAtZero: true,
            type: 'linear',
            position: 'left',
          },
          pib: {
            beginAtZero: true,
            type: 'linear',
            position: "right",
            grid: {
              display: false
            },
          }
        }
      }
    });
  }
  if (jQuery('#operacaoPaz').length > 0) {
    const operacaoPaz = new Chart(jQuery('#operacaoPaz'), {
      data: {
        datasets: [{
          type: 'doughnut',
          label: 'Bar Dataset',
          data: <?= $operacoespaz ?>,
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
          ],
        }],
        labels: ['Tropas', 'Observador', 'Policial']
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false,
          }
        }
      }
    });
  };
</script>