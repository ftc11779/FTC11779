"use strict";

(function($){

  let navTrigLength = parseInt($(".nav-trigger-wrapper").css("transition-duration"), 10) * 1000;

  let $sense = $(".nav-trig-sensitive");
  let $nav = $("#nav");

  $(document).on("click", ".nav-trigger-icon", function(){
    let len = $sense.length;
    if (!len || $sense.hasClass("travelling")) return;

    $sense.removeClass("travel-up travel-down");
    $sense.addClass("travelling");

    if ($sense.hasClass("active")){
      // hide nav
      $nav.removeClass("active");
      $sense.addClass("travel-down");
      $sense.removeClass("active");
    } else {
      // show nav
      $nav.addClass("active");
      $sense.addClass("active travel-up");
    }

    setTimeout(function(){
      $sense.removeClass("travelling");
    }, navTrigLength);
  });

})(jQuery);
