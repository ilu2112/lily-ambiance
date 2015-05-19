$(function() {
  $('.burger-button').on('click', function() {
    $('nav').slideToggle();
    $(this).toggleClass('active');
  });
});