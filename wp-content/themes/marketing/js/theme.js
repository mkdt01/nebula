jQuery(document).ready(function ( $ ) {
  $('[data-toggle=offcanvas]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});


jQuery(document).ready(function($) {
	$('#Container').mixItUp({
	});
})

jQuery(document).ready(function($){

    $('.name').css({
        position:'absolute',
        left: ($(window).width() - $('.name').outerWidth())/2,
        top: ($(window).height() - $('.name').outerHeight())/2
    });

});