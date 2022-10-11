window.addEventListener('DOMContentLoaded', function(){

  $next_button = $(".mf-f-next_button");

  //$next_button.off('click');
  $next_button.click(function(){

    for(i = 1; i < 6; i++ ){
      $now_active = $(".mf_flow_" + i);
      $next_active = $(".mf_flow_" + (i + 1));
      $last_active = $(".mf_flow_5");
      $first_active = $(".mf_flow_1");

      if($last_active.hasClass("flow_active")){
        $last_active.removeClass("flow_active");
        $first_active.addClass("flow_active");

        $last_active.fadeOut(0);
        $first_active.fadeIn(500);
        break;
      }else if ($now_active.hasClass("flow_active")) {
        $now_active.removeClass("flow_active");
        $next_active.addClass("flow_active");

        $now_active.fadeOut(0);
        $next_active.fadeIn(500);
        break;
      }else{

      }
    }

  });

});
