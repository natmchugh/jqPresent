$(function() {
  jQuery.fx.interval = 1000 / 50;
  $('#slides').present();
     $('.slide').each(function() {
      if ($(this).is(':visible')) {
        $('ol#pager > li.'+$(this).attr('id')).addClass('selected');
      }
    });
});
