<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <!-- ----------- la biblio chartjs ---------- -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <!-- material icon  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../Css/SignIn.css">
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
    <div class="text-container">
          <div class="container-form">
            <input type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img src="../../img/cover.png" alt="cover">
                </div>
            </div>
                <form  action="#">
                  <div class="form-content">
                  <div class="login-form">
                        <div class="title">Connexion</div>
                        <div class="input-boxes">
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Votre Email" required> 
                            </div>
                            <div class="input-box">
                                <label>Mot de passe</label>
                                <input type="password" placeholder="Votre mot de passe" required> 
                            </div>
                           <div id="pssd" class="text">
                                <a  href="#">Mot de passe oublié? </a>
                            </div> 
                            <div class="button input-box">                                
                               <input type="submit" value="Connexion"> 
                            </div> 
                            <div class="text"><label  id="insc" class="sign" for="flip">Créer un nouveau compte</label></div>
                        </div>
                    </div>

                    <div class="signup-form">
                        <div class="title">Inscription</div>
                        <div class="input-boxes">
                            <div class="input-box">
                                <label for="nom">Nom</label>
                                <input type="text" placeholder="Votre Nom" required> 

                            </div>
                            <div class="input-box">
                            <label for="prenom">Préom</label>
                                <input type="text" placeholder="Votre Prénom" required> 
                            </div>
                            <div class="input-box">
                            <label for="email">Email</label>
                                <input type="text" placeholder="Votre Email" required> 
                            </div>
                            <div class="input-box">
                            <label for="telephone">Téléphone</label>
                                <input type="text" placeholder="06 xx xx xx xx" required> 
                            </div>
                            <div class="input-box">
                                <label for="psswd">Mot de passe</label>    
                                <input type="password" placeholder="Votre mot de passe" required> 
                            </div>
                            <label class="chek">
                                <p>
                                     J'ai lu et j'accepte  <span style="color:#87CEFA;">les conditions gé,érales d'utilisation,</span> 
                                    notamment la mention relative à la protection <span style="color:#87CEFA;">des données personnelles.</span> Conformément à la 
                                    loi 09-08, vous disposez d'un droit d'accès, de rectification et d'opposition au traitement de vos données personnelles.
                               </p>                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>
                            <div class="button input-box">
                                <input id="insc" type="submit" value="Inscription"> 
                                
                            </div>
                            <div class="text"><label class="sign"  for="flip">J'ai déja un compte</label></div>
                        </div>
                    </div>

                  </div>
                </form>
          </div>         
    </div>

    
<footer>
    <div class="liens">  
        <div class="tit">        
            <div class="title">Liens Utiles</div>
        </div>
         <a href="#">Conditions générales d'utilisation</a>
         <a href="#">Qui sommes-nous ?</a>
         <a href="#">Données personnelles</a>
         <a href="#">Mentions légales</a>
         <a href="#">FAQ</a>
         <a href="#">Contactez-nous</a>
    </div>
    
    <div class="services"> 
        <div class="tit">  
            <div class="title">Les services les plus demandés</div>   
        </div>
    </div>
</footer>

</body>
</html>