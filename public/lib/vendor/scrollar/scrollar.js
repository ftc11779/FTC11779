(function(root, factory){
  // AMD. Register as an anonymous module.
  if (typeof define === "function" && define.amd) define([], factory);
  // Node. Does not work with strict CommonJS, but only CommonJS-like environments that support module.exports, like Node.
  else if (typeof module === "object" && module.exports) module.exports = factory();
  // Browser globals (root is window)
  else root.Scrollar = factory();
}(this, function(){
  const $ = jQuery;
  var Scrollar = function(elems, opts){
    "use strict";

    // create new prototype object
    const self = Object.create(Scrollar.prototype);

    let conf, pos, cpos, blocks = [], frame, frameId, frameClear, pause;
    let init, createBlock, cacheBlocks, getOffset, scrollState, animate, update;

    // apply user defined options to default configs
    self.conf = $.extend({}, {
      // the parent of scrollar object,
      wrapper: null,
      // direction of the scroll (supports only vertical for now)
      vertical: true, // horizontal: true,
      // speed of the blocks (data-scrollar tags override this config)
      // between 1 and -1, 0 = no move, 1 = max pushing down, -1 = max pulling up
      speed: 0.2,
      // amount of travel until stop
      distance: 300,
    }, opts);

    // fix conf
    self.conf.distance = Math.abs(self.conf.distance);

    // used to store blocks
    self.blocks = [];

    // default to .scrollar if not provided, make elems an array for looping later if not array
    elems = !elems ? [".scrollar"] : elems.constructor !== "Array" ? [elems] : elems;

    // validate if elems exist
    for (let i = 0; i < elems.length; i++){
      if ($(elems[i]).length === 0) throw new Error("The elements you are trying to select ["+(elems[i])+"] don't exist.");
    }
    self.elems = elems;

    // validate wrapper if assigned, else assign document as wrapper
    if (self.conf.wrapper){
      if ($(self.conf.wrapper).length > 0) self.wrapper = self.conf.wrapper;
      else throw new Error("The wrapper you are trying to select ["+(self.conf.wrapper)+"] doesn't exist.");
    } else self.wrapper = document;

    // returns current scroll top based on wrapper target (default is document)
    cpos = function(isY = true, wrapper){
      if (!isY) return; // currently only support y
      return wrapper ? $(wrapper).scrollTop() : $(document).scrollTop();
    };

    // scroll position
    pos = {
      // ox, cx
      oy: 0, // old y value
      cy: cpos(), // current (new) y value
    };

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

    animate = function(){

    };

    // get offset for jQuery
    getOffset = function(el){
      if ([document, window].indexOf(el) >= 0) return {top: 0, left: 0};
      else return $(el).offset();
    }

    // create data for block for animation
    createBlock = function(el){
      const opts = {}, data = {}, $el = $(el);
      opts.speed = $el.attr("data-scrollar-speed") || self.conf.speed;
      opts.distance = $el.attr("data-scrollar-distance") || self.conf.distance;

      // set distance to neg if element is pulled up (speed < 0)
      if (opts.speed < 0) opts.distance = -opts.distance;

      // offset
      data.offsetY = {};
      // offset abs(olute): offset from document top
      // offset rel(ative): offset from wrapper top
      data.offsetY.abs = getOffset(el).top;
      data.offsetY.rel = data.offsetY.abs - getOffset(self.wrapper).top; // abs offset - wrapper offset

      // travel info
      data.travel = {};
      data.travel.from = data.offsetY.abs - opts.distance;
      data.travel.to = data.offsetY.abs + opts.distance;

      return data;
    };

    cacheBlocks = function(){
      let len = self.elems.length;
      for (let i = 0; i < len; i++){
        let block = createBlock(self.elems[i]);
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
    };

    // update();

    init();

    return self;
  };
  return Scrollar;
}));
/*
const Scrollar = function(elems, opts){
  // default to .scrollar if not provided, make elems an array for looping later if not array
  this.elems = !elems ? ".scrollar" : elems.constructor !== "Array" ? [elems] : elems;

  // apply user defined options to default configs
  this.conf = $.extend({}, {
    // the parent of scrollar object,
    wrapper: null,
    // direction of the scroll (supports only vertical for now)
    vertical: true, //
    // horizontal: true,
  }, opts);

  // used to manually pause actions
  this.pause = false;

  // check for requestAnimationFrame, use setTimeout if not supported
  this.frame = window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    function(callback){return setTimeout(callback, 1000/60)}; // simulate 60 FPS

  this.frameId = null;

  this.frameClear = window.cancelAnimationFrame ||
    window.mozCancelAnimationFrame ||
    function(requestID){clearTimeout(requestID)}; // fall back

  // returns current scroll top based on wrapper target (default is document)
  this.cpos = function(wrapper){
    if (wrapper) return $(wrapper).scrollTop();
    return $(document).scrollTop();
  }

  // scroll position
  this.pos = {
    // ox, cx
    oy: 0, // old y value
    cy: this.cpos(), // current (new) y value
  }

  //
  // init
  this.update();
}

$.extend(Scrollar.prototype, {
  cacheElems: function(){

  },

  initElems: function(){

  },

  // update frame based on the current state
  update: function(){
    const self = this;
    if (this.scrollState() && this.pause === false) this.animate();

    // loop the update
    console.log(this.frame);
    // this.frameId = self.frame(self.update);
  },

  // checks for any change in scroll position and return boolean
  // supports only vertical for now
  scrollState: function(){
    // update old
    this.pos.oy = this.pos.cy;

    // update new
    // SHOULD change when wrapper is on, since this.cpos
    this.pos.cy = this.cpos();

    console.log(this.pos.cy !== this.pos.oy && this.conf.vertical);

    // scroll position DID change
    if (this.pos.cy !== this.pos.oy && this.conf.vertical) return true;
    // scroll position DID NOT change
    return false;
  },

  // returns current scroll top based on wrapper target (default is document)
  cpos: function(wrapper){
    if (wrapper) return $(wrapper).scrollTop();
    return $(document).scrollTop();
  }
});
*/
