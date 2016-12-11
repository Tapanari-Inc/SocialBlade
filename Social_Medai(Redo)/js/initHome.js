$('.burger').click(function(){
  $('.burger-container').toggleClass('open');
  $('.menu').toggleClass('show');
});

$('.like-btn').click(function(){
  $(this).toggleClass('liked');
});
