jQuery( document ).ready(function( $ ) {

	$('#nav-icon2').click(function(){
    $(this).toggleClass('open');
  });

	menuToggle();

function menuToggle(){
  if($(window).width() < 750){

    $('.gnav').hide();

    $('#nav-icon2').click(function(){

        $(this).addClass('active');

        $('.gnav').slideToggle(400);
    });

  }
  
}


});