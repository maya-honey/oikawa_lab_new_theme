window.addEventListener('DOMContentLoaded', function(){

  $(".qa-c-f-ul li").click(function(){

    $qa = $(this).find('div:first');
    $an = $(this).find('div:last');

    if($qa.hasClass("qaactive")){
      $qa.removeClass("qaactive");
      $an.slideUp();
    }else{
      $qa.addClass("qaactive");
      $an.slideDown();
    }

  });

});
