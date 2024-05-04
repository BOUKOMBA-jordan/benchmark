<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Image Slider</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min copy.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/accueil.css" />
    <link rel="stylesheet" href="./css/equipe1.css">
  </head>
  <body>
    <section class="main swiper mySwiper  animation">
      <div class="wrapper swiper-wrapper list_animation">
        <div class="slide swiper-slide item">
          <img src="./img/image-remise-a-niveau.jpeg" alt="" class="image" />
          <div class="image-data">
            <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./img/image-nourriture.jpg" alt="" class="image" />
          <div class="image-data">
          <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./img/baka_1.jpg" alt="" class="image" />
          <div class="image-data">
          <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./img/baka_2.jpg" alt="" class="image" />
          <div class="image-data">
          <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./img/baka_3.jpg" alt="" class="image" />
          <div class="image-data">
          <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="./img/pond_aliane.jpg" alt="" class="image" />
          <div class="image-data">
          <h2>
            BIENVENUE SUR LE SITE VITRINE <br>
            DU <br>
            PEUPLE BAKANIGUI DU GABON
            </h2>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn" id="next"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

    <section>
      <?php include ("./html/equipe.php") ?>
    </section>

    <!-- Swiper JS -->
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/equipe.js"></script>
    <script src="./js/swiper-bundle.min copy.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
