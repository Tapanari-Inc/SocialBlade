$('.follow-btn').click(function(){
  if($(this).hasClass('following')){
    $('.following .already').css("display", "none");
    $('.following .fol').css("display", "block");
    $(this).removeClass('following');
  } else{
    $(this).addClass('following');
    $('.following .fol').css("display", "none");
    $('.following .already').css("display", "block");
  }
});

$(document).ready(function(){
  $('.content').masonry({
    itemSelector: '.post',
    columnWidth: 400,
    gutter: 20,
    fitWidth: true,
  });
});


var mywindow = $(window);
var mypos = mywindow.scrollTop();
mywindow.scroll(function() {
  if(mywindow.scrollTop() > mypos)
  {
    $('.menuSmall').removeClass('nav-down');
  }
  else
  {
    $('.menuSmall').addClass('nav-down');
  }
  mypos = mywindow.scrollTop();
});

$('.burger').click(function(){
  $('.burger-container').toggleClass('open');
  $('.menu').toggleClass('show');
});

$('.like-btn').click(function(){
  $(this).toggleClass('liked');
});


$('.like').click(function(){
  if($(this).hasClass('clicked')){
    $(this).removeClass('clicked');
  } else{
    $('.dislike').removeClass('clicked');
    $(this).addClass('clicked');
  }
});

$('.dislike').click(function(){
  if($(this).hasClass('clicked')){
    $(this).removeClass('clicked');
  } else{
    $('.like').removeClass('clicked');
    $(this).addClass('clicked');
  }
});
