<?php
/*
Template Name: Gastos Militares
*/
get_template_part('template-parts/header-internal');

$anomoedanacional2 = [];
$anomoedanacional = [];
$moedanacional = [];
$US_argentina_gastos_militares_em_moeda_nacional = get_theme_mod('US_argentina_gastos_militares_em_moeda_nacional', json_encode(array()));
$US_argentina_gastos_militares_em_moeda_nacional_decoded = json_decode($US_argentina_gastos_militares_em_moeda_nacional);
foreach ($US_argentina_gastos_militares_em_moeda_nacional_decoded as $repeater_item) {
  array_push($anomoedanacional, $repeater_item->field01);
  array_push($moedanacional, $repeater_item->field02);
}
$anomoedanacional2 = $anomoedanacional;
$anomoedanacional = json_encode($anomoedanacional);
$moedanacional = json_encode($moedanacional);

$anodolarconstante2 = [];
$anodolarconstante = [];
$dolarconstante = [];
$US_argentina_gastos_militares_em_dolar_constante = get_theme_mod('US_argentina_gastos_militares_em_dolar_constante', json_encode(array()));
$US_argentina_gastos_militares_em_dolar_constante_decoded = json_decode($US_argentina_gastos_militares_em_dolar_constante);
foreach ($US_argentina_gastos_militares_em_dolar_constante_decoded as $repeater_item) {
  array_push($anodolarconstante, $repeater_item->field01);
  array_push($dolarconstante, $repeater_item->field02);
}
$anodolarconstante2 = $anodolarconstante;
$anodolarconstante = json_encode($anodolarconstante);
$dolarconstante = json_encode($dolarconstante);

$anopib2 = [];
$anopib = [];
$pib = [];
$US_argentina_gastos_militares_pib = get_theme_mod('US_argentina_gastos_militares_pib', json_encode(array()));
$US_argentina_gastos_militares_pib_decoded = json_decode($US_argentina_gastos_militares_pib);
foreach ($US_argentina_gastos_militares_pib_decoded as $repeater_item) {
  array_push($anopib, $repeater_item->field01);
  array_push($pib, $repeater_item->field02);
}
$anopib2 = $anopib;
$anopib = json_encode($anopib);
$pib = json_encode($pib);

$anopercapita2 = [];
$anopercapita = [];
$percapita = [];
$US_argentina_gastos_militares_percapita = get_theme_mod('US_argentina_gastos_militares_percapita', json_encode(array()));
$US_argentina_gastos_militares_percapita_decoded = json_decode($US_argentina_gastos_militares_percapita);
foreach ($US_argentina_gastos_militares_percapita_decoded as $repeater_item) {
  array_push($anopercapita, $repeater_item->field01);
  array_push($percapita, $repeater_item->field02);
}
$anopercapita2 = $anopercapita;
$anopercapita = json_encode($anopercapita);
$percapita = json_encode($percapita);

$anogastogovernamental2 = [];
$anogastogovernamental = [];
$gastogovernamental = [];
$US_argentina_gastos_militares_gasto_governamental = get_theme_mod('US_argentina_gastos_militares_gasto_governamental', json_encode(array()));
$US_argentina_gastos_militares_gasto_governamental_decoded = json_decode($US_argentina_gastos_militares_gasto_governamental);
foreach ($US_argentina_gastos_militares_gasto_governamental_decoded as $repeater_item) {
  array_push($anogastogovernamental, $repeater_item->field01);
  array_push($gastogovernamental, $repeater_item->field02);
}
$anogastogovernamental2 = $anogastogovernamental;
$anogastogovernamental = json_encode($anogastogovernamental);
$gastogovernamental = json_encode($gastogovernamental);

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
        <div class="product pbottom-0">
          <!-- title -->
          <div class="title">
            <h1><?php the_title() ?></h1>
            <!-- btns-box -->
            <?php 
              if($country_docs_file_btn) {
                echo '<div class="btns-box"><a href="' . $country_docs_file_btn . '" download class="down text"><svg class="icon"><use xlink:href="' . get_bloginfo('template_url') . '/assets/img/icons.svg#download"></use></svg> ' . $country_docs_text_btn_01 . '</a></div>';
              }
            ?>
            <!-- end:btns-box -->
            <div class="filter-nation small-padding">
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

          <div class="grid-country">
            <div class="cont pbottom-50">
              <!-- list-box -->
              <div class="list-box two mtop-35">
                <div class="box country-name transparent">
                  <div class="avatar">
                    <img src="<?= get_bloginfo('template_url') ?>/assets/images/bandeira-argentina.png" alt="">
                  </div>
                  <h1>Argentina</h1>
                </div>
                <div class="box country-data transparent">
                  <span>Gastos Militares (R$)</span>
                  <span class="val"><?= get_theme_mod('US_argentina_gastos_militares_text') ?></span>
                </div>
              </div>
              <!-- list-box -->

              <!-- list-box -->
              <div class="list-box two mtop-55">
                <div class="box heightAuto graphic">
                  <div class="header">
                    <h3>Em moeda nacional
                      <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                        </svg>
                      </a>
                    </h3>
                    <!-- btns-box -->
                    <div class="btns-box">
                      <a href="<?= get_theme_mod('US_argentina_gastos_militares_xml') ?>" download class="down downChange">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                        </svg>
                      </a>
                    </div>
                    <!-- end:btns-box -->
                  </div>
                  <div class="filter">
                    <label for="">Período</label>
                    <select class="moedalocalint">
                      <option value='0' selected>selecione</option>
                      <?php
                        foreach ($anomoedanacional2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                    <span class="div"></span>
                    <select class="moedalocalend">
                      <option value='3000' selected>selecione</option>
                      <?php
                        foreach ($anomoedanacional2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="graphics moedalocalL">
                    <canvas id="moedalocal"></canvas>
                  </div>
                </div>
                <div class="box heightAuto graphic">
                  <div class="header">
                    <h3>Em dólar constante
                      <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                        </svg>
                      </a>
                    </h3>
                    <!-- btns-box -->
                    <div class="btns-box">
                      <a href="<?= get_theme_mod('US_argentina_gastos_militares_xml') ?>" download class="down downChange">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                        </svg>
                      </a>
                    </div>
                    <!-- end:btns-box -->
                  </div>
                  <div class="filter">
                    <label for="">Período</label>
                    <select class="dolarint">
                      <option value='0' selected>selecione</option>
                      <?php
                        foreach ($anodolarconstante2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                    <span class="div"></span>
                    <select class="dolarend">
                      <option value='3000' selected>selecione</option>
                      <?php
                        foreach ($anodolarconstante2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="graphics dolarL">
                    <canvas id="dolar"></canvas>
                  </div>
                </div>
                <div class="box heightAuto graphic">
                  <div class="header">
                    <h3>Em % do PIB
                      <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                        </svg>
                      </a>
                    </h3>
                    <!-- btns-box -->
                    <div class="btns-box">
                      <a href="<?= get_theme_mod('US_argentina_gastos_militares_xml') ?>" download class="down downChange">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                        </svg>
                      </a>
                    </div>
                    <!-- end:btns-box -->
                  </div>
                  <div class="filter">
                    <label for="">Período</label>
                    <select class="pibint">
                      <option value='0' selected>selecione</option>
                      <?php
                        foreach ($anopib2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                    <span class="div"></span>
                    <select class="pibend">
                      <option value='3000' selected>selecione</option>
                      <?php
                        foreach ($anopib2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="graphics pibL">
                    <canvas id="pib"></canvas>
                  </div>
                </div>
                <div class="box heightAuto graphic">
                  <div class="header">
                    <h3>Per capita (US$ correntes)
                      <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                        </svg>
                      </a>
                    </h3>
                    <!-- btns-box -->
                    <div class="btns-box">
                      <a href="<?= get_theme_mod('US_argentina_gastos_militares_xml') ?>" download class="down downChange">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                        </svg>
                      </a>
                    </div>
                    <!-- end:btns-box -->
                  </div>
                  <div class="filter">
                    <label for="">Período</label>
                    <select class="percapitaldolarint">
                      <option value='0' selected>selecione</option>
                      <?php
                        foreach ($anopercapita2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                    <span class="div"></span>
                    <select class="percapitaldolarend">
                      <option value='3000' selected>selecione</option>
                      <?php
                        foreach ($anopercapita2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="graphics percapitaldolarL">
                    <canvas id="percapitaldolar"></canvas>
                  </div>
                </div>
                <div class="box heightAuto graphic">
                  <div class="header">
                    <h3>Em % do gasto governamental
                      <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                        </svg>
                      </a>
                    </h3>
                    <!-- btns-box -->
                    <div class="btns-box">
                      <a href="<?= get_theme_mod('US_argentina_gastos_militares_xml') ?>" download class="down downChange">
                        <svg class="icon">
                          <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#download"></use>
                        </svg>
                      </a>
                    </div>
                    <!-- end:btns-box -->
                  </div>
                  <div class="filter">
                    <label for="">Período</label>
                    <select class="governoint">
                      <option value='0' selected>selecione</option>
                      <?php
                        foreach ($anogastogovernamental2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                    <span class="div"></span>
                    <select class="governoend">
                      <option value='3000' selected>selecione</option>
                      <?php
                        foreach ($anogastogovernamental2 as $item) {
                          echo '<option value="'.$item.'">'.$item.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="graphics governoL">
                    <canvas id="governo"></canvas>
                  </div>
                </div>
              </div>
              <!-- list-box -->
            </div>
            <div class="side">
              <!-- subtitle -->
              <div class="subtitle">
                <h2>Ranking por % do PIB
                  <a href="#" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia">
                    <svg class="icon">
                      <use xlink:href="<?= get_bloginfo('template_url') ?>/assets/img/icons.svg#info"></use>
                    </svg>
                  </a>
                </h2>
              </div>
              <!-- end:subtitle -->
              <table id="table_id">
                <tbody>
                  <?php
                  $count = 1;
                  $US_country_geral_rankpib = get_theme_mod('US_country_geral_rankpib', json_encode(array()));
                  $US_country_geral_rankpib_decoded = json_decode($US_country_geral_rankpib);
                  foreach ($US_country_geral_rankpib_decoded as $repeater_item) {
                    echo '<tr><td>' . $count . '</td><td>' . $repeater_item->field01 . '</td><td>' . $repeater_item->field02 . '</td></tr>';
                    $count++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>



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
  /*gastosMilitares('assets/planilhas/gastos-militares-brasil.xml', 0);

  jQuery('#countryAll').on('change', function() {
    var $this = jQuery(this).val();
    var $name = jQuery(this).find(":selected").text();
    gastosMilitares('assets/planilhas/gastos-militares-' + $this + '.xml', 1);
    jQuery('.country-name h1').html($name);
    jQuery('.country-name .avatar img').attr('src', 'http://localhost/projetos/atlas/site/wp-content/themes/atlas/assets/images/bandeira-' + $this + '.png');
    return false;
  });*/

  jQuery('#countryAll, .moedalocalint, .moedalocalend, .dolarint, .dolarend, .pibint, .pibend, .percapitaldolarint, .percapitaldolarend, .governoint, .governoend').on('change', function() {
    var $thisChange = jQuery(this).attr('class');
    var $this = jQuery('#countryAll').val();
    var $name = jQuery('#countryAll').find(":selected").text();
    var $moedalocalint = jQuery('.moedalocalint').val();
    var $moedalocalend = jQuery('.moedalocalend').val();
    var $dolarint = jQuery('.dolarint').val();
    var $dolarend = jQuery('.dolarend').val();
    var $pibint = jQuery('.pibint').val();
    var $pibend = jQuery('.pibend').val();
    var $percapitaldolarint = jQuery('.percapitaldolarint').val();
    var $percapitaldolarend = jQuery('.percapitaldolarend').val();
    var $governoint = jQuery('.governoint').val();
    var $governoend = jQuery('.governoend').val();



    console.log($thisChange);

    jQuery.ajax({
      url: usAjax.ajaxurl,
      type: 'POST',
      data: {
        action: 'data_fetch',
        contry: $this,
        field01: 'gastos_militares_text',
        field02: 'gastos_militares_em_moeda_nacional',
        field03: 'gastos_militares_em_dolar_constante',
        field04: 'gastos_militares_pib',
        field05: 'gastos_militares_percapita',
        field06: 'gastos_militares_gasto_governamental',
        field07: 'gastos_militares_xml',
        //_ajax_nonce: usAjax.nonce,
      },
      success: function(data) {
        console.log(data);
        console.log(data.data[0]);
        var field00 = data.data[0];
        var field01 = jQuery.parseJSON(data.data[1]);
        var field02 = jQuery.parseJSON(data.data[2]);
        var field03 = jQuery.parseJSON(data.data[3]);
        var field04 = jQuery.parseJSON(data.data[4]);
        var field05 = jQuery.parseJSON(data.data[5]);
        var field06 = data.data[6];

        jQuery('.country-name h1').html($name);
        jQuery('.country-name .avatar img').attr('src', 'https://atlas.siteup.dev/wp-content/themes/atlas/assets/images/bandeira-' + $this + '.png');

        jQuery('.country-data .val').html(field00);
        jQuery('.downChange').attr('href', field06);


        if($thisChange == 'moedalocalint' || $thisChange == 'moedalocalend' || $thisChange == 'countryAll') {
          var anomoedanacional = [];
          var moedanacional = [];
          let objfield01 = {};
          jQuery("canvas#moedalocal").remove();
          jQuery("div.moedalocalL").append('<canvas id="moedalocal"></canvas>');
          field01.forEach(function(el, index) {
            if (el.field01 >= $moedalocalint && el.field01 <= $moedalocalend  ) {
              objfield01[el.field01] = {
                moedanacional: el.field02,
              }
            }
          });
          jQuery.each(objfield01, function(key, val) {
            anomoedanacional.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'moedanacional') {
                v = val == '' ? 0 : val;
                moedanacional.push(v);
              }
            });
          });
          const moedalocalG = new Chart(jQuery('#moedalocal'), {
            data: {
              datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: moedanacional,
              }],
              labels: anomoedanacional
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

        if($thisChange == 'dolarint' || $thisChange == 'dolarend' || $thisChange == 'countryAll') {
          var anodolarconstante = [];
          var dolarconstante = [];
          let objfield02 = {};
          jQuery("canvas#dolar").remove();
          jQuery("div.dolarL").append('<canvas id="dolar"></canvas>');
          field02.forEach(function(el, index) {
            if (el.field01 >= $dolarint && el.field01 <= $dolarend  ) {
              objfield02[el.field01] = {
                dolarconstante: el.field02,
              }
            }
          });
          jQuery.each(objfield02, function(key, val) {
            anodolarconstante.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'dolarconstante') {
                v = val == '' ? 0 : val;
                dolarconstante.push(v);
              }
            });
          });
          const dolarG = new Chart(jQuery('#dolar'), {
            data: {
              datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: dolarconstante,
              }],
              labels: anodolarconstante
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

        if($thisChange == 'pibint' || $thisChange == 'pibend' || $thisChange == 'countryAll') {
          var anopib = [];
          var pib = [];
          let objfield03 = {};
          jQuery("canvas#pib").remove();
          jQuery("div.pibL").append('<canvas id="pib"></canvas>');
          field03.forEach(function(el, index) {
            if (el.field01 >= $pibint && el.field01 <= $pibend  ) {
              objfield03[el.field01] = {
                pib: el.field02,
              }
            }
          });
          jQuery.each(objfield03, function(key, val) {
            anopib.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'pib') {
                v = val == '' ? 0 : val;
                pib.push(v);
              }
            });
          });
          const pibG = new Chart(jQuery('#pib'), {
            data: {
              datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: pib,
              }],
              labels: anopib
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

        if($thisChange == 'percapitaldolarint' || $thisChange == 'percapitaldolarend' || $thisChange == 'countryAll') {
          var anopercapita = [];
          var percapita = [];
          let objfield04 = {};
          jQuery("canvas#percapitaldolar").remove();
          jQuery("div.percapitaldolarL").append('<canvas id="percapitaldolar"></canvas>');
          field04.forEach(function(el, index) {
            if (el.field01 >= $percapitaldolarint && el.field01 <= $percapitaldolarend  ) {
              objfield04[el.field01] = {
                percapita: el.field02,
              }
            }
          });
          jQuery.each(objfield04, function(key, val) {
            anopercapita.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'percapita') {
                v = val == '' ? 0 : val;
                percapita.push(v);
              }
            });
          });
          const percapitaldolarG = new Chart(jQuery('#percapitaldolar'), {
            data: {
              datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: percapita,
              }],
              labels: anopercapita
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

        if($thisChange == 'governoint' || $thisChange == 'governoend' || $thisChange == 'countryAll') {
          var anogastogovernamental = [];
          var gastogovernamental = [];
          let objfield05 = {};
          jQuery("canvas#governo").remove();
          jQuery("div.governoL").append('<canvas id="governo"></canvas>');
          field05.forEach(function(el, index) {
            if (el.field01 >= $governoint && el.field01 <= $governoend  ) {
              objfield05[el.field01] = {
                gastogovernamental: el.field02,
              }
            }
          });
          jQuery.each(objfield05, function(key, val) {
            anogastogovernamental.push(key);
            jQuery.each(val, function(key, val) {
              if(key === 'gastogovernamental') {
                v = val == '' ? 0 : val;
                gastogovernamental.push(v);
              }
            });
          });
          const governoG = new Chart(jQuery('#governo'), {
            data: {
              datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: gastogovernamental,
              }],
              labels: anogastogovernamental
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
  if (jQuery('#moedalocal').length > 0) {
    const moedalocalG = new Chart(jQuery('#moedalocal'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Bar Dataset',
          data: <?php echo $moedanacional ?>,
        }],
        labels: <?php echo $anomoedanacional ?>
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
  if (jQuery('#dolar').length > 0) {
    const dolarG = new Chart(jQuery('#dolar'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Bar Dataset',
          data: <?php echo $dolarconstante ?>,
        }],
        labels: <?php echo $anodolarconstante ?>
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
  if (jQuery('#pib').length > 0) {
    const pibG = new Chart(jQuery('#pib'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Bar Dataset',
          data: <?php echo $pib ?>,
        }],
        labels: <?php echo $anopib ?>
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
  if (jQuery('#percapitaldolar').length > 0) {
    const percapitaldolarG = new Chart(jQuery('#percapitaldolar'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Bar Dataset',
          data: <?php echo $percapita ?>,
        }],
        labels: <?php echo $anopercapita ?>
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
  if (jQuery('#governo').length > 0) {
    const governoG = new Chart(jQuery('#governo'), {
      data: {
        datasets: [{
          type: 'bar',
          label: 'Bar Dataset',
          data: <?php echo $gastogovernamental ?>,
        }],
        labels: <?php echo $anogastogovernamental ?>
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
</script>