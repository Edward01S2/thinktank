!function(t){var n={};function e(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,e),o.l=!0,o.exports}e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:r})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="/wp-content/themes/thinktank/dist/",e(e.s=12)}({0:function(t,n){t.exports=jQuery},12:function(t,n,e){t.exports=e(13)},13:function(t,n,e){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var r=e(0),o=e.n(r);wp.customize("blogname",function(t){t.bind(function(t){return o()(".brand").text(t)})})}});