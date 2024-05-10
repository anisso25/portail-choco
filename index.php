<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>All-in-One KaiTeckPlatform</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
    <link href="css/style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet" />
</head>

<body>
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Portail de Communication d'Entreprise</h3>
                    <!-- <a href="logout.php" class="btn btn-info">Déconnecté</a> -->
                </div>
            </div>
            <br />
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="swiper-container team-member-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-link="templaite02/index.html">
                                <div class="team-coverflow">
                                    <div class="team-img">
                                        <img src="tamplaite02.png" alt="" data-no-retina />
                                    </div>

                                    <div class="team-text">
                                        <br />
                                        <h3 class="color-black font-weight-normal m-0 text-capitalize">
                                            KaiTeck
                                        </h3>
                                        <h4 class="color-light-grey font-weight-light designation text-capitalize">
                                            templaite 02
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-link="templaite01/index.html">
                                <div class="team-coverflow">
                                    <div class="team-data-img">
                                        <div class="team-img">
                                            <img src="tamplaite01.png" alt="" data-no-retina />

                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <br />
                                        <h3 class="color-black font-weight-normal m-0 text-capitalize">
                                            KaiTeck
                                        </h3>
                                        <h4 class="color-light-grey font-weight-light designation text-capitalize">
                                            templaite 01
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-link="templaite03/index.html">
                                <div class="team-coverflow">
                                    <div class="team-data-img">
                                        <div class="team-img">
                                            <img src="tamplaite03.png" alt="" data-no-retina />
                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <br />
                                        <h3 class="color-black font-weight-normal m-0 text-capitalize">
                                            KaiTeck
                                        </h3>
                                        <h4 class="color-light-grey font-weight-light designation text-capitalize">
                                            templaite 03 App
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="swiper-slide" data-link="http://perfect.mc-solution.fr/vicidial/admin.php">
                <div class="team-coverflow">
                  <div class="team-data-img">
                    <div class="team-img">
                      <img src="images/markus-spiske-3_SvgDspSTE-unsplash.jpg" alt="" data-no-retina />

                    </div>
                  </div>
                  <div class="team-text">
                    <br />
                    <h3 class="color-black font-weight-normal m-0 text-capitalize">
                      KaiTeck
                    </h3>
                    <h4 class="color-light-grey font-weight-light designation text-capitalize">
                      CRM App
                    </h4>
                  </div>
                </div>
	      </div>-->
                        </div>
                        <div class="swiper-button-next slider-arrows">
                            <i class="ti ti-angle-right"></i>
                        </div>
                        <div class="swiper-button-prev slider-arrows">
                            <i class="ti ti-angle-left"></i>
                        </div>
                    </div>
                    <div>

                        <section class="early">
                            <article>
                                <marquee behavior="scroll" direction="left" style="font-size: 25px; color: burlywood;">
                                    Notre organisation est une entreprise spécialisée dans le développement de solutions
                                    informatiques sur mesure pour répondre aux besoins spécifiques de nos clients. Nous
                                    offrons des services de développement de logiciels, d'applications web et mobiles,
                                    de gestion de projets informatiques, ainsi que des services de conseil en
                                    technologie. Nous sommes passionnés par la technologie et travaillons sans relâche
                                    pour fournir des solutions innovantes et de qualité supérieure à nos clients. Nous
                                    sommes fiers de notre engagement envers la satisfaction du client et nous nous
                                    efforçons toujours de fournir un service exceptionnel.</marquee>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    const cards = document.querySelectorAll(".swiper-slide");

    cards.forEach((card) => {
        const link = card.dataset.link;
        card.addEventListener("click", () => {
            window.location.href = link;
            target = "_blank"
        });
    });
    </script>
</body>

</html>