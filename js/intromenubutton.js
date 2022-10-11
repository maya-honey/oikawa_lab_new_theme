$(function(){

  //headerのフェード設定
  $i_menu = $(".intro_menu");
  $i_m_button = $(".intro_menu_button");

  i_m_active = "intro_menu_active";

  $($i_m_button).click(function(){
    if($i_menu.hasClass(i_m_active)){
      $i_menu.addClass("intro_menu_closetran");
      $i_menu.removeClass(i_m_active);
    }else{
      $i_menu.removeClass("intro_menu_closetran");
      $i_menu.addClass(i_m_active);
      $i_menu.removeClass("intro_menu_start");
    }
  });


});
