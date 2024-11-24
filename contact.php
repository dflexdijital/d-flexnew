<!doctype html>
<html lang="tr-TR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/style.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<?php
  include 'header.php'
 ?>

  <section class=" px-md-5 overflow-hidden">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="position-relative z-5">
            <div class="banner-card-wrapper py-5  d-flex   px-md-5">
              <div class="banner-card-start-item py-md-5 my-5 px-4  w-md-50 d-flex flex-column align-items-center align-items-md-start justify-content-center  gap-4">
                <div class="banner-card-heading fw-bold display-4 text-warning ">
                  7/24 Teknik Servisle iletişime geçmek <span class="text-black">Herkesin Hakkı.</span>
                </div>
                <div class="banner-card-content text-black fs-5">
                  Güvenilir,Sorumlu,Titiz Ustalarımız ile Sizlere en profesyonel şekilde hizmet vermekteyiz
                </div>
                <div class="d-inline-block text-center">
                  <a href="tel:055555" class="banner-card-btn text-decoration-none bg-warning px-4 py-2 rounded-3 text-black fw-semibold btn-hover-efect d-flex align-items-center gap-3">
                    0534 444 888 99
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                  </a>
                  <div class="banner-tel-text pt-2 fw-semibold ">
                    Tıkla Hemen Ara !
                  </div>
                </div>
              </div>

            </div>

            <div class="banner-card-end-item position-absolute  ">
              <img src="assets/img/contact/usta1.png" alt="" class="h-100 w-100">
            </div>
            <div class="banner-bg-item position-absolute top-0 ">
              <img src="assets/img/banner/back-item-1.svg" alt="">
            </div>
            <div class="banner-bg-item-100 position-absolute ">
              <img src="assets/img/banner/bg-100.png" alt="">
            </div>
          </div>
        </div>



      </div>
      <div class="swiper-pagination"></div>
    </div>

  </section>

  <section class="py-md-5">
    <div class="container py-md-5 px-3 ">
      <div class="customer-info-top-content py-5 text-center ">
        <div class="fs-2 fw-semibold">İletişim <span class="text-warning">Kanallarımız </span>

          <svg class="text-warning scale-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5" />
          </svg>

        </div>
      </div>

      <div class="row g-5 g-md-0">
        <div class="col-12 col-md-6 d-flex align-items-center order-md-0 order-2 ">
          <div class="contact-start-item-wrapper d-flex flex-column align-items-start  w-100">
            <div class="contact-start-item-heading fw-bold fs-4 pb-2 text-secondary ">Maps</div>

            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12788.078336166476!2d34.516675049999996!3d36.746101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15278a65a01e5581%3A0xd4f493615f9c80a4!2sMerkez%2C%2033330%20Mezitli%2FMersin!5e0!3m2!1str!2str!4v1712325074608!5m2!1str!2str" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
        <div class="col-12 col-md-6 mt-5 border-top border-bottom d-flex justify-content-center align-items-start py-5 px-md-5 px-4 order-md-0">
          <div class="contact-end-item-wrapper px-md-3 px-2 d-flex flex-column gap-5">
            <div class="contact-end-items-wrapper d-flex flex-column gap-4">
              <div class="contact-end-item d-flex align-items-center gap-4 ">
                <svg class="scale-2-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.5.5 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.5.5 0 0 0-.196 0zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1z" />
                </svg>
                <div class="adress">Çiftlikköy Mahallesi Mersin Üniversitesi Kampüsü, Teknopark No:201, 33100 Yenişehir/Mersin</div>
              </div>
              <div class="contact-end-item d-flex align-items-center gap-4"><svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                </svg>
                <a href="tel:5555 5555 555" class="btn-hover contactTel text-decoration-none text-black btn-hover-efect">+ 555 555 5555</a>
              </div>
              <div class="contact-end-item d-flex align-items-center gap-4  "><svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                </svg>
                <a href="mailto:qwfsafasd@gmail.com" class="btn-hover contactTel text-decoration-none text-black btn-hover-efect">y724teknik@gmail.com</a>
              </div>
            </div>
            <div class="contact-end-social-media-icons d-flex gap-5 justify-content-center">
              <a href="#?" class="btn-hover contact-social-item text-decoration-none text-black  btn-hover-efect ">
                <svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
              </a>
              <a href="#?" class="btn-hover contact-social-item text-decoration-none text-black  btn-hover-efect  ">
                <svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg>
              </a>
              <a href="#?" class="btn-hover contact-social-item text-decoration-none text-black  btn-hover-efect ">
                <svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
              </a>
              <a href="#?" class="btn-hover contact-social-item text-decoration-none text-black   btn-hover-efect ">
                <svg class="scale-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
              </a>
            </div>
          </div>


        </div>
      </div>





    </div>
  </section>

  <?php
  include 'footer.php'
 ?>
 
 <?php
  include 'wp_btn.php'
 ?>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay0: {
        delay: 4500,
        disableOnInteraction: false,
      }
    });
    var servicesswiper = new Swiper(".serviceswiper", {
      slidesPerView: 1.1,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>