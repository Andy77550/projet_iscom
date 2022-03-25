<!DOCTYPE html>
<html>

<head>
    <title>Training Center 4.0</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/img-icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">


</head>

<body>



    <!-- header start -->
    <header class="header">
        <div class="ctn">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li class="menu-item-has-children">
                                <a href="#">Nous connaitre <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item text-center">
                                        <a href="propos.html">
                                            <img src="img/p1.jpg" alt="new Product">
                                            <h4 class="title">Qui sommes nous ?</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="partenaire.html">
                                            <img src="img/p2.jpg" alt="new Product">
                                            <h4 class="title">Nos Partenaires</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="inscription.html">
                                            <img src="img/p3.jpg" alt="new Product">
                                            <h4 class="title">Inscriptions</h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="formation.html">Formation</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">E-Learning <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="distance.html">Formation à distance</a></li>
                                        <li><a href="outils.html">Outils à disposition</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="actu.html">Actualités</a>
                            </li>
                            <li>
                                <a href="https://www.paris-villaroche-training-center.parcours.pro/" target="_blank">Plateforme</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end here -->
                <div class="header-item item-right">
                    <!-- <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"> <i class="fab fa-linkedin"></i></a> -->

                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header end -->

    <!-- img background -->

    <section class="cont">
        <h2>Contact</h2>
    </section>
    <br><br><br><br>
    <div class="main">

        <section id="contact" class="py-4">
            <div class="container">
                <div class="title-wrap">
                    <h2 class="lg-title"> Merci de noter ci dessous vos noms, coordonnées ainsi que vos questions !
                    </h2>
                </div>

            </div>
        </section>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50236.83156661273!2d2.6484609497713203!3d48.56679442490831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5fb7b3824bca1%3A0xcb4dffb41c4ad580!2sA%C3%A9rodrome%20de%20Melun%20Villaroche!5e0!3m2!1sfr!2sfr!4v1646993857757!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <section id="contact" class="py-4">
            <div class="container">
                <div class="title-wrap">
                    <span class="sm-title" style="display: inline;">Nous vous répondrons dans les plus brefs délais.</span>
                </div>
                <div class="contact-row">
                    <div class="contact-left">
                        <form class="contact-form"  method="post">
                            <input type="text" name="nom" class="form-control" placeholder="Nom/Prénom" required>
                            <input type="email" name="email" class="form-control" placeholder=" Email" required>
                            <input type="text" name="phone" class="form-control" placeholder="Téléphone">
                            <input type="text" name="sujet" class="form-control" placeholder="Sujet">
                            <textarea rows="4" name="message" class="form-control" placeholder="Your message" style="resize: none;" aria-required></textarea>
                            <input type="checkbox"> Je souhaite recevoir les informations complémentaires
                            <br><br>
                            <input type="submit" id="submit" class="btn-form" value="Envoyer">
                        </form>
                        <?php
                        if (isset($_POST['message'])) {
                            $entete  = 'MIME-Version: 1.0' . "\r\n";
                            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                            $entete .= 'From:' . $_POST["email"] . "\r\n";
                            $entete .= 'Reply-to: ' . $_POST['email'];

                            
                            $message = '
                            <html>
                                <head>
                                <style>
                                    .mail{
                                        border: 2px solid #273c75;
                                        border-radius: 10px;
                                        text-align: center;
                                    }
                                </style>
                                
                                </head>
                                <body>
                                    <div class="mail">
                                        <img src="https://www.parisvillaroche.com/themes/thegobeliners/images/logo-tc4.png" width="300" height="300"/>
                                        <h3 style="color: #273c75">Ce message vous a été envoyé via la page contact du site Training Center 4.0</h3>
                                        <br>
                                        <p><b style="color: #273c75">Nom/Prénom : </b>'. $_POST["nom"] . '<br>
                                        <p><b style="color: #273c75">Email : </b>' . $_POST['email'] . '<br>
                                        <p><b style="color: #273c75">Téléphone : </b>' . $_POST['phone'] . '<br>
                                        <p><b style="color: #273c75">Message : </b>' . htmlspecialchars($_POST['message']) . '</p>
                                    </div>


                                </body>
                            </html>';
                           

                            $retour = mail('trainingcenter@parisvillaroche.com', $_POST["sujet"], $message, $entete);
                            
                            if($retour){
                               echo "<br><p style='color: #273c75; text-align: center;'>L'email a bien été envoyé !</p>";        
                            }
                               
                        }
                    ?>


                    </div>
                    <div class="contact-right">

                        <div class="contact-item">
                            <span class="contact-icon flex">
                                <i class="fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Téléphone</span>
                                <p class="text">07 57 07 94 55</p>
                            </div>
                        </div>
                        <br>
                        <div class="contact-item">
                            <span class="contact-icon flex">
                                <i class="fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Adresse</span>
                                <p class="text">Aérodrome de Melun Villaroche
                                    77950 Montereau-sur-le-Jard</p>
                            </div>
                        </div>
                        <br>
                        <div class="contact-item">
                            <span class="contact-icon flex">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Message</span>
                                <p class="text">trainingcenter@parisvillaroche.com</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>





        <!--==================== SPONSORS ====================-->
        <section class="sponsor section">
            <div class="sponsor__container container grid">
                <div class="sponsor__content">
                    <img src="img/img-logo/CAMVS.jpg" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="img/img-logo/logo-ue.jpg" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="img/img-logo/htec.jpg" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="img/img-logo/PREF77.jpg" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="img/img-logo/region-IDF.jpg" alt="" class="sponsor__img">
                </div>
            </div>
        </section>
    </div>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Training Center 4.0</h3>
                    <br>
                    <p class="footer__description"> Centre de formation aéronautique et industriel soutenu par l'Europe.
                    </p>
                    <div>
                        <a href="https://m.facebook.com/trainingcentersympav/" target="_blank" class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://twitter.com/TCenter4_0/" target="_blank" class="footer__social">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/trainingcenter4.0/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/" target="_blank" class="footer__social">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">À propos </h3>
                    <ul>
                        <li class="footer__item">
                            <a href="formation.html" class="footer__link">Formation</a>
                        </li>
                        <li class="footer__item">
                            <a href="actu.html" class="footer__link">Actualités </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://www.paris-villaroche-training-center.parcours.pro/" target="_blank" class="footer__link">Plateforme</a>
                        </li>
                        <li class="footer__item">
                            <a href="contact.php" class="footer__link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Informations</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Aérodrome de Melun Villaroche<br>
                                77950 Montereau-sur-le-Jard</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">trainingcenter@parisvillaroche.com</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">07 57 07 94 55</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Qui sommes-nous</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Partenaires</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Inscriptions</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2022 Training Center 4.0. Tous droits réservés.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Termes et accords</a>
                    <a href="#" class="footer__terms-link">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        $('.blog-row').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>

</html>