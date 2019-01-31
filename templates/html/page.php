
<?php
/**
 * page.html.twig
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/styles.css" />
  <title>LOMC</title>
</head>

<body>
  <!-- Navigation top for mobile view -->
  <?php include '../navigation/nav--top.inc.php'; ?>

  <!-- menu overlay only for mobile view -->
  <?php include '../navigation/nav--overlay.inc.php'; ?>

  <div class="page">

    <!-- header -->
    <header class="header">
      <!-- <div class="header__overlay"></div> -->

      <!-- one image random -->
      <div class="header__img">
        <img src="../../images/html-img/black-white01.jpg" alt="" />
      </div>

      <!-- collection of images placed by grid random ordered -->
      <div class="header__img--desktop">
        <img src="../../images/html-img/DSC02645.JPG" alt="">
        <img src="../../images/html-img/DSC02650.JPG" alt="">
        <img src="../../images/html-img/DSC02661.JPG" alt="">
        <img src="../../images/html-img/DSCN5654.jpg" alt="">
        <img src="../../images/html-img/DSCN5656.jpg" alt="">
        <img src="../../images/html-img/DSCN5657.jpg" alt="">
        <img src="../../images/html-img/DSCN5712.jpg" alt="">
        <img src="../../images/html-img/mlp2006-(101).jpg" alt="">
      </div>

      <div class="header__img--big-desktop">
        <img src="../../images/html-img/DSC02645.JPG" alt="">
        <img src="../../images/html-img/DSC02650.JPG" alt="">
        <img src="../../images/html-img/DSC02661.JPG" alt="">
        <img src="../../images/html-img/DSCN5654.jpg" alt="">
        <img src="../../images/html-img/DSCN5656.jpg" alt="">
        <img src="../../images/html-img/DSCN5657.jpg" alt="">
        <img src="../../images/html-img/DSCN5712.jpg" alt="">
        <img src="../../images/html-img/mlp2006-(104).jpg" alt="">
        <img src="../../images/html-img/mlp2006-(101).jpg" alt="">
        <img src="../../images/html-img/mlp2006-(106).jpg" alt="">
      </div>

      <div class="header__club-identification">
        <div class="header__logo">
          <img src="../../images/logo.jpg" alt="LOMC Logo" />
        </div>

        <div class="header__title">
          <h1>Limburgse Oude Motoren Club</h1>
        </div>
      </div>



    </header>

    <?php include '../navigation/nav--header.inc.php'; ?>

    <main class="main">
      <div class="grid__container">
        <div class="grid__row">
          <div class="main__wrapper">
            <div class="main__content">
              <h2>Voorstelling Limburgse Oude Motoren Club</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
                iaculis odio nibh, ac semper urna rhoncus feugiat. Aliquam non
                euismod diam, facilisis finibus felis. Integer ultrices nisi
                sollicitudin lacus dapibus rutrum. Sed aliquet ornare sapien a
                cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                a nulla ac nisl dapibus euismod vel in enim. Vivamus quis libero vel
                tellus sagittis efficitur vel sit amet quam.
                <a href="www.google.com">Google</a>
              </p>
            </div>

            <aside class="sidebar">
              <div class="sidebar__cta">
                <a href="#" class="btn btn--green btn--full-width">
                  Lid worden van onze club
                </a>
              </div>

              <div class="sidebar__photos">
                <img src="../../images/html-img/DSC02645.JPG" alt="">
                <img src="../../images/html-img/DSCN5653.jpg" alt="">
                <img src="../../images/html-img/DSCN5657.jpg" alt="">
              </div>
            </aside>

            
          </div>

        </div>
      </div>
    </main>

  </div>
  <!-- end of page -->

  <footer class="footer">

    <div class="footer__top">

      <nav class="nav--footer">
        <div class="grid__container">
          <div class="grid__row">
            <ul class="nav__items nav__items--footer">
              <li class="nav__item">
                <a class="nav__link" href="#">Home</a>
              </li>
              <li class="nav__item">
                  <a class="nav__link" href="#">Agenda</a>
                </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Contact</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Linken</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Foto's</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="#">Lid worden</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>

    <div class="footer__bottom">
      <div class="grid__container">
        <div class="grid__row">
          <div class="footer__bottom-wrap">
            <div class="footer__logo">
            <img src="../../images/logo.jpg" alt="LOMC Logo" />
          </div>
          <div class="footer__copy">
            Copyright 2019 | LOMC
          </div>
          </div>
          
        </div>
      </div>
    </div>

  </footer>

  <script src="../../js/menu.js"></script>
</body>

</html>