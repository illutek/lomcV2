/**
 * Created by stefan on 08-01-2019.
 *
 */

(function () {
  'use strict';

  const openBtn = document.querySelector('.hamburger__button');
  const closeBtn = document.querySelector('.close__button');
  const menuOverlay = document.querySelector('.menu-overlay');
  const navTop = document.querySelector('.navigation');

  // console.log(closeBtn);

  /** 
   *  Functions
  */

  function closeMenu() {
    menuOverlay.classList.remove('menu-overlay--visible');
  }

  function openMenu() {
    menuOverlay.classList.toggle('menu-overlay--visible');
  }

  openBtn.addEventListener('click', openMenu);

  closeBtn.addEventListener('click', closeMenu);

})();