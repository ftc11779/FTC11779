"use strict";

(function(){

  let $navTrigWrapper = document.getElementsByClassName("nav-trigger-wrapper")[0];
  let navTrigLength = parseInt(getComputedStyle($navTrigWrapper)['transitionDuration'], 10) * 1000;
  let $sense = document.getElementsByClassName("nav-trig-sensitive")[0];
  let $nav = document.getElementById("nav");
  let $navTrigIcon = document.getElementsByClassName("nav-trigger-icon")[0];

  $navTrigIcon.addEventListener("click", function(){
    if (typeof $sense === "undefined" || hasClass($sense, "travelling")) return;

    removeClass($sense, "travel-up");
    removeClass($sense, "travel-down");
    addClass($sense, "travelling");

    if (hasClass($sense, "active")){
      // hide nav
      removeClass($nav, "active");
      addClass($sense, "travel-down");
      removeClass($sense, "active");
    } else {
      // show nav
      addClass($nav, "active");
      addClass($sense, "active");
      addClass($sense, "travel-up");
    }

    setTimeout(function(){
      removeClass($sense, "travelling");
    }, navTrigLength);
  })

})();

function hasClass(el, className){
  if (el.classList) return el.classList.contains(className);
  return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className){
  if (el.classList) el.classList.add(className)
  else if (!hasClass(el, className)) el.className += " " + className;
}

function removeClass(el, className){
  if (el.classList) el.classList.remove(className)
  else if (hasClass(el, className)){
    var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
    el.className = el.className.replace(reg, ' ');
  }
}
