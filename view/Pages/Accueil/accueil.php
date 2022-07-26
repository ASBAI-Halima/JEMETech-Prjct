<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- ----------- la biblio chartjs ---------- -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <!-- material icon  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
        <!--       swiper css -->
        <link rel="stylesheet" href="../../Css/swiper-bundle.min.css">
          
      <!-- STYLESHEET -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link
  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../../Css/accueil.css">
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <div class="menu">
                <div class="menu-shrink">
                    <div class="menu-left">
                       <div class="menu-brand"><img id="logo" src="../../img/logoJemeTech.png" alt="logo"></div>
                    </div>
                    <div class="menu-center">
                        <a id="telephone" href="#">
                            <span class="material-icons-sharp">phone</span>
                             Applez nous 08008526877
                        </a>
                        <a href="#">Connexion</a>
                        <a href="#">Inscription</a>
                    </div>
                    <div class="menu-right">
                        <a class="menu-r" href="#"><span class="material-icons-sharp">menu</span></a>
                    </div>
                </div>            
            </div>

        </div>
    </div>
    <div class="text-container ">
        <div class="div"></div>  
        <div class="div"></div>   
        <div class="div"></div>   
        <div class="div" id="div4">
            <div class="slide-container swiper"> 
                <div class="slide-content">  
                    <div class="card-wapper swiper-wapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../img/profile.jpg" alt="avis" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Halima Asbai</h2>
                                <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, praesentium molestias doloribus tempore quo autem mollitia sit. Mollitia iste, repellendus sunt consequatur, aliquam similique ut exercitationem possimus aspernatur porro ex!</p>
                                <p id="ville"><i class="fa fa-map-marker" style="font-size:28px"></i> Oujda</p>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
    
            </div>
        </div>   
        <div id ="div5" class="div"> 
                <div class="title">La plateforme de référence pour réaliser vos travaux</div> 

                <p>Jeme-Tech a sélectionné pour vous les meilleurs artisans, qualifiés et honnêtes, pour tous vos travaux. Tous nos professionnels
                    sont recommandés, testés et suivis en continu. Vous souhaitez réparer une fuite d'eau, peindre les murs de votre salons,
                    rénover votre cuisine... ? Jeme-Tech vous permet de trouver un artisan qualifié pour tous vos travaux.
                    </p>
                    <p>
                    Nous sommes disponibles sur <span style="font-weight:bold"> Oujda, Berkane, Saidia, Nador, Taourirt, Bouarfa, Guercif.</span>
                    </p>
                    <p>
                        Jeme-Tech permet de choisir l'artisan qui répondra au mieux à votre besoin en consultant son profil détaillé et les notes et avis de 
                        ses précédents clients.
                    </p>
        </div>

             
       
    </div>

    
<footer>
   <div class="container footer_container">
         <div class="footer_1">        
            <h4>Liens Utiles</h4>
            <a href="#">Conditions générales d'utilisation</a>
            <a href="#">Qui sommes-nous ?</a>
            <a href="#">Données personnelles</a>
            <a href="#">Mentions légales</a>
            <a href="#">FAQ</a>
            <a href="#">Contactez-nous</a>
        </div>
        
        <div class="footer_2"> 
            <h4>Les services les plus demandés</h4>   
        </div>   
        <ul class="footer_socilas">
                <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="uil uil-instgram-alt"></i></a>
                </li>
        </ul>     
        <div class="footer_copyright">
            <small>Copyright &copy; JEMETech</small>
            <small>Suivez-nous</small>
        </div>
   </div>
</footer>

<script src="../../Js/swiper-bundle.min.js"></script>
<script src="../../Js/accueil.js"></script>
</body>
</html>