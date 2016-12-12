(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


// var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
// $('body').bind(mousewheelevt, function(e){
//   var evt = window.event || e //equalize event object
//   evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible
//   var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF
//
//   if(delta > 0) {
//     $(this).css("background", "blue");
//   }
//   else{
//     $(this).css("background", "red");
//   }
// });

$('#login').on('click', function(e){
  $('.login_form').delay(100).fadeIn(100);
	$('.reg_form').fadeOut(100);
	$('#register').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});
$('#register').on('click', function(e){
  $('.reg_form').delay(100).fadeIn(100);
 	$('.login_form').fadeOut(100);
  $('#login').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});

$(document).ready(function() {
  $('#fullpage').fullpage({
    css3: true,
    easingcss3: 'cubic-bezier(1, 0.01, 0.5, 1)'
  });
});


$('.more').click(function(){
  $.fn.fullpage.moveSectionDown();
});
