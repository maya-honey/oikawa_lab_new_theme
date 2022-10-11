window.addEventListener('DOMContentLoaded', function(){
  var windowWidth = $(window).width();
  window.onmousewheel = function(event){

    if(windowWidth > 800){
      var wheel_value = event.wheelDelta;
      var length_num = document.querySelector('.fv').dataset.num;
      let length_num_plus = length_num + 1;
      var $target = document.querySelector('.now_page');

      if(wheel_value > 0){

        let $pnow_active;
        let $pnext_active;
        let pnow_trans_active;
        let pnext_trans_active;

        for(let h = 2; h < length_num_plus; h++){
          $pnow_active = $(".section_" + h);
          $pnext_active = $(".section_" + (h - 1));
          pnow_trans_active = "page_active_" + h;
          pnext_trans_active = "page_active_" + (h - 1);
          page_count = h - 1;

          if($pnow_active.hasClass("page_active")){
            $pnow_active.removeClass("page_active");
            $pnext_active.addClass("page_active");
            $(".fv").removeClass(pnow_trans_active);
            $(".fv").addClass(pnext_trans_active);
            $target.innerHTML = page_count;
            break;
          }else{

          }
        }

      }else{

        let $now_active;
        let $next_active;
        let now_trans_active;
        let next_trans_active;

        for(let i = 1; i < length_num; i++){
          $now_active = $(".section_" + i);
          $next_active = $(".section_" + (i + 1));
          now_trans_active = "page_active_" + i;
          next_trans_active = "page_active_" + (i + 1);
          page_count = i + 1;

          if($now_active.hasClass("page_active")){
            $now_active.removeClass("page_active");
            $next_active.addClass("page_active");
            $(".fv").removeClass(now_trans_active);
            $(".fv").addClass(next_trans_active);
            $target.innerHTML = page_count;
            break;
          }else{

          }
        }

      }
    }else{

    }

  }
});
