/**
 * Home
 */
export default function() {
  $(document).on('click', '.anchor', function() {
    var $target = $(this).attr('href');
    var $offset = $($target).position().top;
    $('body,html').animate({ scrollTop: $offset }, 1000);
    return false;
  });

  $(document).on('click', '.btns-box .share', function() {
    var $target = $(this).find('.list-share');
    $target.slideToggle();
    return false;
  });

  $(document).on('click', '.sidebar .btn-menu', function() {
    var $target = $('body');
    $target.toggleClass('small-menu');
    return false;
  });

  $(document).on('click', '.toggle a', function() {
    var $target = $(this).closest('.toggle').find('.content-toggle');
    $target.slideToggle();
    return false;
  });


}