$(function(){

  //headerのフェード設定
  $h_menu = $(".h-menu");
  $sp_button = $(".header_sp_button");

  menu_active = "header_menu_active";

  $($h_menu).click(function(){
    if($h_menu.hasClass(menu_active)){
      //$h_menu.removeClass(menu_active);
      //$sp_button.removeClass("menu_n");
    }else{
      $h_menu.addClass(menu_active);
      $sp_button.addClass("menu_n");
    }
  });

  $($sp_button).click(function(){
    if($h_menu.hasClass(menu_active)){
      $h_menu.removeClass(menu_active);
      $sp_button.removeClass("menu_n");
    }else{
      $h_menu.addClass(menu_active);
      $sp_button.addClass("menu_n");
    }
  });


});
