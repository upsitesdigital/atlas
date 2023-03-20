const $urlroot = 'http://localhost/projetos/atlas/site/wp-content/themes/atlas/';

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


jQuery.ajax({
  url: 'http://localhost/projetos/atlas/site/wp-content/themes/atlas/assets/planilhas/empresas-segmentos.xml',
  dataType: 'xml',

  // Caso tenha encontrato o arquivo, leio os dados do xml
  success: function(xml) {
    var $count = 1;
    let pib = [];
    jQuery(xml).find('Row').each(function() {
      var html = '';

      jQuery(jQuery(this)[0].children).each(function() {
        if (jQuery(this)[0].textContent == '') {
          html += '<td>--</td>';
        } else {
          html += '<td>' + jQuery(this)[0].textContent + '</td>';
        }
      });
      // console.log(html);
      $count++;
      jQuery('#empresassegmentos').find('tbody').append('<tr>' + html + '</tr>');

    });

    jQuery('#empresassegmentos').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
      },
      searching: false,
      scrollX: true,
      scrollCollapse: true,
      fixedColumns: true
    });

    jQuery('#simpletable').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
      },
      lengthChange: false,
      searching: false,
      scrollX: false,
      scrollCollapse: false,
      fixedColumns: false
    });

  }
});