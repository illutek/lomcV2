/**
 * Created by stefan on 08-01-2019.
 *
 */

(function () {
  'use strict';

  const openBtn = document.querySelector('.hamburger__button');
  const closeBtn = document.querySelector('.close__button');
  const menuOverlay = document.querySelector('.menu-overlay');
  const navTopHidden = document.querySelector('.nav--top');
  const openmenu = document.querySelector('.menu-overlay');

  // console.log(closeBtn);

  /** 
   *  Functions
  */

  function closeMenu() {
    menuOverlay.classList.remove('menu-overlay--visible');
    navTopHidden.classList.remove('nav--hidden');
  }

  function openMenu() {
    menuOverlay.classList.toggle('menu-overlay--visible');
    navTopHidden.classList.add('nav--hidden');
  }

  openBtn.addEventListener('click', openMenu);

  closeBtn.addEventListener('click', closeMenu);
  openmenu.addEventListener('click', () => setTimeout(closeMenu, 1000));

})();