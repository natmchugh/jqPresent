 $(document).ready(function() {
	 var slideTitles = slideTitles = $('.slide').map(function(k,v) {
    return '<li>'+$('#slide'+(k+1)+' > h2').text()+'</li>';
  }).get().join("\n");
  $('div#slide1.slide > ol#slide-index').html(slideTitles);
 });