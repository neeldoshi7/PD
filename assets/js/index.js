if ($(this).parents('.nav-menu, .mobile-nav').length) {
  $('.nav-menu .active, .mobile-nav .active').removeClass('active');
  $(this).closest('li').addClass('active');
}
