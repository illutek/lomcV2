!function(){"use strict";var e=document.querySelector(".hamburger__button"),t=document.querySelector(".close__button"),n=document.querySelector(".menu-overlay"),o=document.querySelector(".nav--top");document.querySelector(".menu-overlay");e.addEventListener("click",function(){n.classList.toggle("menu-overlay--visible"),o.classList.add("nav--hidden")}),t.addEventListener("click",function(){n.classList.remove("menu-overlay--visible"),o.classList.remove("nav--hidden")})}();