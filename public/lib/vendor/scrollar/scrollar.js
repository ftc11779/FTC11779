// ------------------------------------------
// Scrollar.js
// Parallax library
// Copyright (c) 2018 Park Jong Won (@pjw.tom)
// MIT license
// ------------------------------------------

(function(root, factory){
  // AMD. Register as an anonymous module.
  if (typeof define === "function" && define.amd) define([], factory);
  // Node. Does not work with strict CommonJS, but only CommonJS-like environments that support module.exports, like Node.
  else if (typeof module === "object" && module.exports) module.exports = factory();
  // Browser globals (root is window)
  else root.Scrollar = factory();
}(this, function(){
  var Scrollar = function(elems, opts){
    "use strict";

    // create new prototype object
    const self = Object.create(Scrollar.prototype);

    let deepExtend, isDictionary, isObject, pos, size, calcSize, getHeight, isNode, cpos, blocks = [], notLegitWrappers = [], frame, frameId, frameClear, pause, transformProp;
    let init, createBlock, cacheBlocks, getOffset, scrollState, setPosition, animate, update;

    notLegitWrappers = [document, window]; // I couldn't think of a better name :)

    isObject = o => o && typeof o === "object" && o.constructor === Object;
    isDictionary = d => isObject(d) && !Array.isArray(d);

    deepExtend = function(...extend){
      let end = undefined;
      for (let val of extend){
        if (isDictionary(val)){
          // contains dictionary
          if (!isObject(end)) end = {}; // change end to {} if end is not object
          for (let k in val) end[k] = deepExtend(end[k], val[k]); // loops through all nested objects
        } else end = val;
      }
      return end;
    }

    // apply user defined options to default configs
    self.conf = deepExtend({
      // the parent of scrollar object,
      wrapper: null,
      // direction of the scroll (supports only vertical for now)
      vertical: true, // horizontal: true,
      // speed of the blocks (data-scrollar tags override this config)
      // movement value to 1px scroll (e.g. 0.6 : 1 means the element will scroll 0.6px when the window is scrolled 1px)
      speed: 0.6,
      // amount of travel until stop // I don't think I need distance for now
      // distance: 300,
      // callback when element is moved
      callback: null,
    }, opts);

    // fix conf
    if (typeof self.conf.callback !== "function") self.conf.callback = () => {};

    // used to store blocks
    self.blocks = [];

    // default to .scrollar if not provided, make elems an array for looping later if not array
    elems = !elems ? [".scrollar"] : elems.constructor !== "Array" ? [elems] : elems;

    // validate if elems exist
    for (let i = 0; i < elems.length; i++){
      if (document.querySelector(elems[i]).length === 0) throw new Error("The elements you are trying to select ["+(elems[i])+"] don't exist.");
    }
    self.elems = elems;
    self.elemsNode = document.querySelectorAll(elems);

    // check if element is node, convert if not
    isNode = function(el){
      return typeof el === "string" ? document.querySelector(el) : el;
    };

    // validate wrapper if assigned, else assign document as wrapper
    if (self.conf.wrapper){
      if (document.querySelector(self.conf.wrapper).length > 0) self.wrapper = self.conf.wrapper;
      else throw new Error("The wrapper you are trying to select ["+(self.conf.wrapper)+"] doesn't exist.");
    } else self.wrapper = document;

    // returns current scroll top based on wrapper target (default is document)
    cpos = function(isY = true, wrapper){
      if (!isY) return; // currently only support y
      return wrapper ? isNode(wrapper).scrollTop : window.scrollTop;
    };

    // scroll position
    pos = {
      // ox, cx
      oy: 0, // old y value
      cy: cpos(), // current (new) y value
    };

    calcSize = function(){
      let calc = {
        // use inner value!
        window: {
          height: {
            full: window.innerHeight,
          },
          width: {
            full: window.innerWidth,
          },
        }
      };
      calc.window.height.half = calc.window.height.full / 2;
      calc.window.width.half = calc.window.width.full / 2;
      return calc;
    };

    // gives size info, will change on resize
    size = calcSize();

    // check for requestAnimationFrame, use setTimeout if not supported
    frame = window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      function(callback){return setTimeout(callback, 1000/60)}; // simulate 60 FPS

    frameId = null;

    frameClear = window.cancelAnimationFrame ||
      window.mozCancelAnimationFrame ||
      function(requestID){clearTimeout(requestID)}; // fall back

    // used to manually pause actions
    pause = false;

    // check which transform property to use
    transformProp = window.transformProp || (function(){
      let testEl = document.createElement("div");
      if (testEl.style.transform === null){
        let vendors = ["Webkit", "Moz", "ms"];
        for (let vendor in vendors){
          if (testEl.style[ vendors[vendor] + "Transform" ] !== undefined) return vendors[vendor] + "Transform";
        }
      }
      return "transform";
    })();

    getHeight = function(el){
      let styles, margin;
      // Get the DOM Node if you pass in a string
      el = isNode(el);
      styles = window.getComputedStyle(el);
      margin = parseFloat(styles["marginTop"]) + parseFloat(styles["marginBottom"]);
      return el.getBoundingClientRect().height + margin;
    };

    // checks for any change in scroll position and return boolean
    // supports only vertical for now
    scrollState = function(){
      // update old
      pos.oy = pos.cy;

      // update new
      // FIXME: SHOULD change when wrapper is on
      pos.cy = cpos();

      // true: scroll position DID change
      // false: scroll position DID NOT change
      return pos.cy !== pos.oy && self.conf.vertical;
    };

    setPosition = function(el, offsetY, block){
      let transform, prevTransform = "";

      // if block data exists, apply speed & previous transform style
      // this filters out init setPosition with no block data
      if (block){
        offsetY = offsetY * block.travel.speed;
        prevTransform = " " + block.transform;
      }

      // apply transform value to style
      transform = "translate3d(0px, " + offsetY + "px, 0px)" + prevTransform;
      el.style[transformProp] = transform;

      return {offsetY, transform};
    };

    animate = function(){
      let positions, len = self.elemsNode.length;
      for (let i = 0; i < len; i++){
        let block, elem, toWrapper;

        block = blocks[i];
        elem = self.elemsNode[i];
        if (block.offsetY.isWrapperLegit){
          toWrapper = pos.cy - block.offsetY.wrapper;
        } else {
          // wrapper is document/window
          let fakeWrapperTop;
          // fake wrapper = centers the block to the window
          // calculation: abs - (window height/2 - block height half)
          fakeWrapperTop = block.offsetY.abs - (size.window.height.half - block.mtdt.height.half);
          toWrapper = pos.cy - fakeWrapperTop;
        }

        positions = setPosition(elem, toWrapper, block);
      }
      self.conf.callback(positions);
    };

    // get offset of element
    // NOTE: need to react on resize
    getOffset = function(el){
      // not legit wrapper (document/window) because they are at 0

      if (notLegitWrappers.indexOf(el) >= 0) return {top: 0, right: 0, bottom: 0, left: 0};
      // keep aware of odd value calculation: http://javascript.info/coordinates
      else {
        const offset = isNode(el).getBoundingClientRect();
        return {
          // add window.scrollY to calculate the distance from the top of the page (document/window)
          // element.getBoundingClientRect() gives the position within the viewport
          // window.scrollY gives the distance from the top of the viewport to the top of the document.
          top: offset.y + window.scrollY,
        };
      }
    };

    // create data for block for animation
    createBlock = function(el, i){
      const opts = {}, data = {};
      let wrapper;

      opts.speed = Number(isNode(el).getAttribute("data-scrollar-speed")) || self.conf.speed;

      // NOTE: make wrapper customizable using data attr?
      wrapper = self.wrapper;

      // offset
      data.offsetY = {};
      // offset abs(olute): offset from document top
      // offset rel(ative): offset from wrapper top
      data.offsetY.abs = getOffset(el).top;
      data.offsetY.wrapper = getOffset(wrapper).top;
      data.offsetY.isWrapperLegit = notLegitWrappers.indexOf(wrapper) === -1;
      data.offsetY.rel = data.offsetY.abs - data.offsetY.wrapper; // abs offset - wrapper offset

      // initialize element position (neg the distance to achieve opposite startt)
      // do it after getting offset data
      // NOTE: turn it off for now since init forces animate()
      // setPosition(self.elemsNode[i], -opts.distance);

      // travel info
      data.travel = {
        zero: data.offsetY.abs,
        speed: opts.speed,
      };

      // block metadata
      data.mtdt = {
        height: {
          full: getHeight(el),
        },
      };
      data.mtdt.height.half = data.mtdt.height.full / 2;

      // retrieve inline transform style, but remove translate3d value
      data.transform = self.elemsNode[i].style.transform.replace(/translate3d\([\w\W].*?\)/, "");

      return data;
    };

    cacheBlocks = function(){
      let len = self.elemsNode.length;
      for (let i = 0; i < len; i++){
        let block = createBlock(self.elemsNode[i], i);
        blocks.push(block);
      }
      self.blocks = blocks;
    };

    // update (animate) frame based on the current state
    update = function(){
      if (scrollState() && pause === false) animate();

      // loop the update
      frameId = frame(update);
    };

    init = function(){
      cacheBlocks();
      console.log(self);
      animate(); // force animate for init
      update();
    };

    // update();

    init();

    return self;
  };
  return Scrollar;
}));
