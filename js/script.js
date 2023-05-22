
// A $( document ).ready() block.
$( document ).ready(function() { 
  $('.faq-table h2').click(function() {
    $(this).closest('li').toggleClass('faq-active');
  });

  $('.carousel-btn').click(function() {
    let current_id = $('.active-carousel-item').attr('data-carouselId');
    $('.active-carousel-item').removeClass('active-carousel-item');
    $(`#${current_id}`).addClass('hidden');
    $(this).addClass('active-carousel-item');
    let id = $(this).attr('data-carouselId');
    $(`#${id}`).removeClass('hidden');
  });

  $('.video-launch-btn').click(function() {
    $(`#video-modal`).removeClass('hidden');
  });
  $('.close-modal').click(function() {
    $(`#video-modal`).addClass('hidden');
  });

  $('.modal-close-div').click(function() {
    $(`#video-modal`).addClass('hidden');
  });

  $('.dropdown-list').click(function(e) {
    e.preventDefault();
    $(this).parent('li').toggleClass('dropdown-list-active');
  });
  $('.menu-toggle-btn').click(function(e) {
    e.preventDefault();
    $('.menu-toggle-btn').toggleClass('menu-toggle-active');
    $('.mobile-menu-body').toggleClass('hidden');
    $('.mobile-menu').toggleClass('bg-white h-full bottom-0');
  });
  $('.dropdown-menu-mobile-btn').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('dropdown-menu-mobile-btn-active');
    $(this).next('.dropdown-menu-mobile-list').toggleClass('hidden');
  });


  $('.swiper-button-prev1').click(function() {
    $( ".swiper-button-prev" ).trigger( "click" );
  });
  $('.swiper-button-next1').click(function() {
    $( ".swiper-button-next" ).trigger( "click" );
  });

  $('.mobile-navbar-btn').click(function() {
    $( "#navbar-default" ).toggleClass('hidden');
  });
});