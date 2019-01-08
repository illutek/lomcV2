/**
 * Created by stefan on 08-01-2019.
 *
 */
(function ($) {
  $(document).ready(function () {
    $(".hamburger__button a").click(function () {
      console.log("Hello world!");
      $(".menu-overlay").fadeToggle(200);
      $(this).toggleClass('hamburger__icon--open').toggleClass('hamburger__icon--close');
    });
  });
  $('.menu-overlay').on('click', function () {
    $(".menu-overlay").fadeToggle(200);
    $(".hamburger a").toggleClass('hamburger__icon--open').toggleClass('hamburger__icon--close');
    open = false;
  });
})(jQuery);