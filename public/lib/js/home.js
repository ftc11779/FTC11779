"use strict";

(function($){

  // $(document).on("scroll.detectScroll", detectScroll);

  // https://tgomilar.github.io/paroller.js/#usage
  // $("[data-paroller-factor]").paroller({
  //   type: "foreground",
  //   direction: "vertical",
  // });

  var scrollar = new Scrollar(".scrollar-custom", {
    wrapper: ".custom-item-bwi",
  });


  // var rellax = new Rellax(".rellax");
  // var rellax = new Rellax("#bow .rellax", {
  //   wrapper: "#bow",
  //   relativeToWrapper: true,
  // });
  // var rellax = new Rellax('.rellax', {
  //   speed: -2,
  //   center: false,
  //   wrapper: null,
  //   round: true,
  //   vertical: true,
  //   horizontal: false,
  //   // center: true,
  //   // wrapper: ".rellax-wrapper",
  // });

  let navTrigLength = parseInt($(".nav-trigger-wrapper").css("transition-duration"), 10) * 1000;

  $(document).on("click", ".nav-trigger-icon", function(){
    let $sense = $(".nav-trig-sensitive"), len = $sense.length;
    if (!len) return;

    $sense.removeClass("travel-up travel-down");
    $sense.addClass("travelling");

    if ($sense.hasClass("active")){
      $sense.addClass("travel-down");
      $sense.removeClass("active");
    } else  $sense.addClass("active travel-up");

    setTimeout(function(){
      $sense.removeClass("travelling");
    }, navTrigLength);
  });

})(jQuery);
