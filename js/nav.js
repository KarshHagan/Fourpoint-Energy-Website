$(document).ready(function() {
  var menu = $('#main_nav');
  var menuToggle = $('#mobile_menu');
  var signUp = $('.sign-up');
  var aboutLink = $('.more');
  var subMenu = $('.submenu');

  $(menuToggle).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });

  $(aboutLink).on('click', function(e) {
    e.preventDefault();
    subMenu.slideToggle(function(){
      if(menu.is(':hidden')) {
        menu.removeAttr('style');
      } 
    });
  });

 
 // underline under the active nav item
  $(".nav .nav-link").click(function() {
    $(".nav .nav-link").each(function() {
      $(this).removeClass("active-nav-item");
    });
    $(this).addClass("active-nav-item");
    $(".nav .more").removeClass("active-nav-item");
  });
});