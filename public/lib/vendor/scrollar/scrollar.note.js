//
// JUST RANDOM NOTE
//
// when the wrapper offset y is 0, the element's transform3d should be 0
// (when referring to transform3d, I am referring to the second value of transform3d - y value)
// however, tthis doesn't work for wrapper = null (document/window) because it starts at 0
// which means that all elements will be at its original place when the user is at the very top

// the goal is to have the element transform3d 0 at its original place
// but how can this be achieved?

// the main problem is that I don't know when the element should move
// a lot of parallax plugins move elementts indefinitely
// but I don't wantt that because that will resultt in element transform3d 0 at unoriginal place

// if you use distance to trigger the element, it can possibly be skipped if the user scrolls too fast
// so distance is NOT IDEAL

// I want the element to be indefinitely moving too

// for now, just rely on wrapper offset top to move elements (when wrapper scrollTop = 0, set element transform3d: 0)
// and if wrapper = null (document/window), create a fake wrapper value that makes the element show at the center
// based on its absolute offset value (since rel value will always be 0 because the wrapper is 0)
