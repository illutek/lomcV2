
<?php
/**
 * 
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

  <div class="front__page">

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

    <main class="front__main">
    <div class="grid__container">
        <div class="grid__row">
          <div class="front__main-wrap">

            <div class="front__agenda">
              <h3>35ste LOMC oldtimer motorbeurs</h3>
              <div class="agenda__date">
                <div>zaterdag, 24 november, 2018</div> 
              </div>
              <p>Na een overgangsjaar zonder beurs in 2017 is er op zaterdag 24 november 2018 weer de mooie en 
              gezellige clubbeurs van de Limburgse Oude Motoren Club .<br>Deze gaat keer het door in zaal Panishof,
              </p>
              <div class="read-more agenda__read-more">
                <a class="btn btn--red" href="#">Lees meer</a>
              </div>

            </div>
            <div class="front__main-content">
              <h2>Voorstelling Limburgse Oude Motoren Club</h2>
                <p>
                  De belangrijkste doelstelling van de "LOMC vzw" is uiteraard de belangen van haar 200-tal leden 
                  behartigen. Wij willen onze aangeslotenen helpen bij het restaureren van oude motoren en hen tevens
                  stimuleren om er mee te rijden. We discrimineren niet op basis van merk, land van herkomst, of 
                  traditionele indelingen zoals "pioneer", "veteran", "vintage" of "classic". Slechts op één 
                  criterium zijn we zeer kritisch: we laten alleen maar motorfietsen toe die voor (of in) 1965 
                  gebouwd werden. Sedert een aantal jaren zijn we eveneens lid van de Belgische Federatie voor 
                  Oude Voertuigen (BFOV). Hierdoor kunnen we onze leden ook een interessante (lees goedkope) 
                  BA verzekering aanbieden.
                </p>
              </div>
            <div class="front__sub-content">
              <div class="activities__content">
                <h3>Activiteiten</h3>
                  <img class="image__content" src="../../images/html-img/DSC02645.JPG" alt="">
                    <p>Het maken van toeristische clubritten met de oude motorfietsen: dat kunnen zowel halve 
                      dagritten ( vertrek om 13uur 15) , dagritten ( vertrek om 9u30 ) , als weekenduitstappen 
                      zijn. Alle ritten vertrekken aan café “ De jail “ aan de kerk van Stokrooie. We verzamelen 
                      steeds  een kwartier vroeger (dus om 13u of 9u15). Hoogtepunten zijn jaarlijks de 
                      "Moeder Lambik Promenade" die tevens open staat voor andere clubs en niet-leden.
                    </p>
                  </div>
                  <div class="insurance__content">
                    <h3>Verzekering</h3>
                    <p>
                      De leden van onze club genieten van een zeer voordelige Oldtimer verzekering. Deze 
                      verzekering bevat ook pechverhelping, "The classic assistance", en dit 24u/24u in heel 
                      België. Als u een panne of een ongeluk heeft kan u bellen naar het nummer dat vermeld 
                      staat op de groene kaart . Opgelet , om van de pechverhelping te kunnen genieten moet 
                      uw nummerplaat gekend zijn door de verzekering . Als jouw nummerplaat vermeld staat op 
                      je groene kaart dan is dat OK . Anders bel je even naar Marsh en geef je het nummer door .
                    </p>
                  </div>
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