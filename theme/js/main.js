var terminos_de_busqueda = {};
var url = "";

function animarFondoHero() {
   $('.bg-slides').prepend( $('.slide').last() );
   $('.slide').first().toggleClass('slide-active');
   $('.slide').last().removeClass('slide-active');
}

setInterval(function(){
   animarFondoHero();
}, 9000);


$('ul.buscador li a').click(function( e ){

   e.preventDefault();

   $('ul.buscador li a').removeClass('activo');
   $('.dropdown').fadeOut('fast');

   $(this).toggleClass('activo');

   if ( $(this).next('.dropdown').hasClass('activo') )   {
      $('ul.buscador li a').removeClass('activo');
      $(this).next('.dropdown').removeClass('activo');
      $('.dropdown').fadeOut('fast');
   } else {
      $(this).next('.dropdown').fadeIn('fast');
      $(this).next('.dropdown').addClass('activo');
   }

});

$('a.dw-element').click(function( e ){

   var texto = $(this).text();
   var key = $(this).attr('x-data-key');
   var val = $(this).attr('x-data-value');
   terminos_de_busqueda[key] = val;
   $('a#'+key).html(texto+' <i class="fa fa-chevron-down" aria-hidden="true">');

});

$('a#buscar').click(function( e ){
   e.preventDefault();
   var part = "";
   $.each(terminos_de_busqueda, function(x,i) {
      part+=x+'='+i+'&';
   });
   window.location = 'http://localhost/wordpress/?s='+part;
});

$('.item-wrapper').slick({
   autoplay: true,
   autoplaySpeed: 2000,
   slidesToShow: 5,
   slidesToScroll: 1,
   dots: false,
   centerMode: true,
   focusOnSelect: true,
   arrows: false,
});
