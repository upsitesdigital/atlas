function removeAccents($text) {
  $text = $text.toLowerCase();
  $text = $text.replace(new RegExp('[ÁÀÂÃ]', 'gi'), 'a');
  $text = $text.replace(new RegExp('[ÉÈÊ]', 'gi'), 'e');
  $text = $text.replace(new RegExp('[ÍÌÎ]', 'gi'), 'i');
  $text = $text.replace(new RegExp('[ÓÒÔÕ]', 'gi'), 'o');
  $text = $text.replace(new RegExp('[ÚÙÛ]', 'gi'), 'u');
  $text = $text.replace(new RegExp('[Ç]', 'gi'), 'c');
  return $text;
}

function armasImportacoes($url, $change) {
  if ($change == 1) {
    $("div.list-box.four").html('');
  }
  $.ajax({
    url: $url,
    dataType: 'xml',

    // Caso tenha encontrato o arquivo, leio os dados do xml
    success: function(xml) {
      $(xml).find('Row').each(function() {
        var count = 0;
        var label = [];
        var value = [];
        $($(this)[0].children).each(function() {
          if (count === 0) {
            label.push($(this)[0].textContent);
          } else {
            value.push($(this)[0].textContent);
          }
          count++;
        });
        if (value[0] != 0) {
          $("div.list-box.four").append('<div class="box statistics"><span>' + value[0] + '</span><h3>' + label[0] + '</h3></div>');
        }
      });
    }
  });
}

function gastosMilitares($url, $change) {
  $.ajax({
    url: $url,
    dataType: 'xml',

    // Caso tenha encontrato o arquivo, leio os dados do xml
    success: function(xml) {
      let $count = 0;
      let labels = [];
      let moedalocal = [];
      let dolar = [];
      let pib = [];
      let percapitaldolar = [];
      let governo = [];
      //let moedalocalG = null;
      $(xml).find('Row').each(function() {
        if ($count != 0) {
          $($(this)[0].children).each(function() {
            if ($(this)[0].textContent == 'null') {
              $html += '--';
            } else {
              if ($count === 1) {
                labels.push($(this)[0].textContent);
              } else if ($count === 2) {
                moedalocal.push($(this)[0].textContent);
              } else if ($count === 3) {
                dolar.push($(this)[0].textContent);
              } else if ($count === 4) {
                pib.push(($(this)[0].textContent * 100));
              } else if ($count === 5) {
                percapitaldolar.push($(this)[0].textContent);
              } else if ($count === 6) {
                governo.push($(this)[0].textContent);
              }
            }
          });
        }
        $count++;
      });

      if ($change == 1) {
        $("canvas#moedalocal").remove();
        $("div.moedalocalL").append('<canvas id="moedalocal"></canvas>');

        $("canvas#dolar").remove();
        $("div.dolarL").append('<canvas id="dolar"></canvas>');

        $("canvas#pib").remove();
        $("div.pibL").append('<canvas id="pib"></canvas>');

        $("canvas#percapitaldolar").remove();
        $("div.percapitaldolarL").append('<canvas id="percapitaldolar"></canvas>');

        $("canvas#governo").remove();
        $("div.governoL").append('<canvas id="governo"></canvas>');

        $("canvas#allmoedalocal").remove();
        $("div.allmoedalocalL").append('<canvas id="allmoedalocal"></canvas>');

      }
      if ($('#allmoedalocal').length > 0) {
        const allmoedalocal = new Chart($('#allmoedalocal'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Em moeda nacional',
              data: moedalocal,
              yAxisID: 'moedalocal'
            }, {
              type: 'line',
              label: 'Em % PIB',
              data: pib,
              borderColor: 'rgba(0, 0, 0, 1)',
              borderWidth: 1,
              yAxisID: 'pib'
            }],
            labels: labels
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
      if ($('#moedalocal').length > 0) {
        const moedalocalG = new Chart($('#moedalocal'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Bar Dataset',
              data: moedalocal,
            }],
            labels: labels
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
      if ($('#dolar').length > 0) {
        const dolarG = new Chart($('#dolar'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Bar Dataset',
              data: dolar,
            }],
            labels: labels
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
      if ($('#pib').length > 0) {
        const pibG = new Chart($('#pib'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Bar Dataset',
              data: pib,
            }],
            labels: labels
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
      if ($('#percapitaldolar').length > 0) {
        const percapitaldolarG = new Chart($('#percapitaldolar'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Bar Dataset',
              data: percapitaldolar,
            }],
            labels: labels
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
      if ($('#governo').length > 0) {
        const governoG = new Chart($('#governo'), {
          data: {
            datasets: [{
              type: 'bar',
              label: 'Bar Dataset',
              data: governo,
            }],
            labels: labels
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
      var lastmoedalocal = moedalocal[moedalocal.length - 1];
      $('.country-data .val').html('R$ ' + parseInt(lastmoedalocal).toLocaleString());
    }
  });
};

function operacaoPaz($url, $change) {
  if ($change == 1) {
    //$("div.list-box.four").html('');
  }
  $.ajax({
    url: $url,
    dataType: 'xml',

    // Caso tenha encontrato o arquivo, leio os dados do xml
    success: function(xml) {
      var label = [];
      var value = [];
      $(xml).find('Row').each(function() {
        var count = 0;
        var valCount = 0;
        $($(this)[0].children).each(function() {
          if (count === 0) {
            label.push($(this)[0].textContent);
            console.log($(this)[0].textContent)
          } else {
            valCount = valCount + parseInt($(this)[0].textContent);
          }
          count++;
        });
        value.push(valCount);

        if (value[0] != 0) {
          $("canvas#operacaoPaz").remove();
          $("div.operacaoPazL").append('<canvas id="operacaoPaz"></canvas>');
        }
      });
      console.log(label);
      console.log(value);
      const operacaoPaz = new Chart($('#operacaoPaz'), {
        data: {
          datasets: [{
            type: 'doughnut',
            label: 'Bar Dataset',
            data: value,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(75, 192, 192, 0.2)'
            ],
          }],
          labels: label
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
  });
}

$.ajax({
  url: 'assets/planilhas/gastos-militares-pib.xml',
  dataType: 'xml',

  // Caso tenha encontrato o arquivo, leio os dados do xml
  success: function(xml) {
    var $count = 1;
    let countryAll = [];
    let country = {};
    let pib = [];
    $(xml).find('Row').each(function() {
      var cou = '';
      var val = '';
      var value = '';
      $($(this)[0].children).each(function() {
        if ($count == 1) {
          cou = $(this)[0].textContent;
          countryAll.push($(this)[0].textContent);
        } else {
          val = $(this)[0].textContent * 100;
          value = val.toFixed(2);
          $count = 0;
        }
        country[cou] = value;
        $count++;
      });

    });
    var numb = 1;
    $.each(country, function(index, value) {
      if (value != 0) {
        $('#table_id').append('<tr><td>' + numb + '</td><td>' + index + '</td><td>' + value + '</td></tr>');
      }
      numb++;
    });
    //console.log(countryAll.sort());
    $.each(countryAll.sort(), function(index, value) {
      let act = value == 'Brasil' ? 'selected' : '';
      $('#countryAll').append('<option ' + act + ' value="' + removeAccents(value.toLowerCase()) + '">' + value + '</option>');
    });

  }
});

$.ajax({
  url: 'assets/planilhas/empresas-segmentos.xml',
  dataType: 'xml',

  // Caso tenha encontrato o arquivo, leio os dados do xml
  success: function(xml) {
    var $count = 1;
    let pib = [];
    $(xml).find('Row').each(function() {
      var html = '';

      $($(this)[0].children).each(function() {
        if ($(this)[0].textContent == '') {
          html += '<td>--</td>';
        } else {
          html += '<td>' + $(this)[0].textContent + '</td>';
        }
      });
      console.log(html);
      $count++;
      $('#table').find('tbody').append('<tr>' + html + '</tr>');

    });

    $('#table').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
      },
      searching: false,
      scrollX: true,
      scrollCollapse: true,
      fixedColumns: true
    });

  }
});