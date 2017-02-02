$(document).ready(function() {
  $(document).on('mouseenter', '.button-div', function() {
    $(this).find(":button").css("background", "#B1B3B3", "border", "1px solid #B1B3B3");
  }).on('mouseleave', '.button-div', function() {
    $(this).find(":button").css("background", "#0085CA", "border", "1px solid #ffffff;");
  });

  $(document).on('mouseenter', '.button-div2', function() {
    $(this).find(":button").css("background", "#B1B3B3", "border", "1px solid #B1B3B3");
  }).on('mouseleave', '.button-div2', function() {
    $(this).find(":button").css("background", "#b9d9eb", "border", "1px solid #ffffff;");
  });

  $(document).on('mouseenter', '.button-div3', function() {
    $(this).find(":button").css("background", "#B1B3B3", "border", "1px solid #B1B3B3");
  }).on('mouseleave', '.button-div3', function() {
    $(this).find(":button").css("background", "#002554", "border", "1px solid #ffffff;");
  });

$( ".overlay a" ).hover(
  function() {
    $( this ).css("background", "#b1b3b3");
  }, function() {
    $( this ).css( "background", "" );
  }
);
$('.medtronic-border').fadeIn();

var leftPosition;
var leftPositionRevert;
if( $(".uselessclass").css('display') == 'block') {

  leftPosition = '20%';
  leftPositionRevert = '19%';
}

if( $(".uselessclass").css('display') == 'none') {

  leftPosition = '17%';
  leftPositionRevert = '16%';
}

if( $(".uselessclass").css('display') != 'block' && $(".uselessclass").css('display') != 'none')  {

  leftPosition = '27%';
  leftPositionRevert = '26%';
}
setTimeout(function() {
  var slides = $(".my-slides");
      slides.hide().css('visibility','visible').fadeIn('slow');
        $('.first-slide-1').css('visibility','visible').animate({left: leftPosition, opacity:1}, 'slow', function() {});
        $('.my-slides p').css('visibility','visible').animate({left: leftPosition, opacity:1}, 'slow', function() {});
        $('.first-slide-2').css('visibility','visible').delay( 200 ).animate({left: leftPosition, opacity:1}, 'slow', function() {}); }, 1000);

      $('.slider-all').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.my-slides p').css('visibility','hidden').animate({left: leftPositionRevert, opacity:0}, 'slow', function() {});
        $('.first-slide-1').css('visibility','hidden').animate({left: leftPositionRevert, opacity:0}, 'slow', function() {});
        $('.first-slide .first-slide-2').css('visibility','hidden').animate({left: leftPositionRevert, opacity:0}, 'slow', function() {});
        $('.first-slide-2').css('visibility','hidden').delay( 200 ).animate({left: leftPositionRevert, opacity:0}, 'slow', function() {}); });

      $('.slider-all').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.my-slides p').css('visibility','visible').animate({left: leftPosition, opacity:1}, 'slow', function() {});
        $('.first-slide-1').css('visibility','visible').animate({left: leftPosition, opacity:1}, 'slow', function() {});
        $('.first-slide-2').css('visibility','visible').delay( 200 ).animate({left: leftPosition, opacity:1}, 'slow', function() {}); });
});
