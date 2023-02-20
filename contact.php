
<?php
include("connexion/configr.php");
if (isset($_POST['b1'])){
	if(!empty($_POST['nom'])&& !empty($_POST['email'])&& !empty($_POST['message'])
    ){

$req="INSERT INTO contact(nom,email,message)
 VALUES('$_POST[nom]','$_POST[email]','$_POST[message]')";
		$res=$pdo->exec($req);
        }  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<link rel="icon" type="image/png" href="icon.png"/>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <!-- Google Font -->
    <link href="https://fonts1.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css1/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css1/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css1/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css1/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css1/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css1/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css1/style.css" type="text/css">
</head>
<style>
    .loaderr {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #f5f4e8;
    display: flex; 
    justify-content: center;
    align-items: center;
}
.lettre {
    color: #000000;
    font-size: 80px;
    letter-spacing: 15px;
    margin-bottom: 150px;
    animation: flash 1.2s linear infinite;
}
@keyframes flash {
    0% {
        color: #000000;
        text-shadow: 0 0 7px#000000;
    }
    90% {
        color:#000000;
        text-shadow: none;
    }
    100% {
        color:#000000;
        text-shadow: 0 0 7px #000000;
    }
}

.lettre:nth-child(1){
    animation-delay: 0.1s;
}
.lettre:nth-child(2){
    animation-delay: 0.2s;
}
.lettre:nth-child(3){
    animation-delay: 0.3s;
}
.lettre:nth-child(4){
    animation-delay: 0.4s;
}
.lettre:nth-child(5){
    animation-delay: 0.5s;
}
.lettre:nth-child(6){
    animation-delay: 0.6s;
}
.lettre:nth-child(7){
    animation-delay: 0.7s;
}
.lettre:nth-child(8){
    animation-delay: 0.8s;
}
.lettre:nth-child(9){
    animation-delay: 0.9s;
}
.lettre:nth-child(10){
    animation-delay: 1s;
}

.fondu-out {
    opacity: 0;
    transition: opacity 0.4s ease-out;
}
</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loaderr"> 
        <span class="lettre">B</span>
        <span class="lettre">I</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">V</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">U</span>
        <span class="lettre">E</span>
        <span class="lettre">-</span>
        <span class="lettre">M</span>
        <span class="lettre">T</span>
        <span class="lettre">K</span>
        
      </div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <img src="img/logo1.png  " style="height: ;" alt="">
        </div>
        <div class="humberger__menu__cart">
          
        
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                
                
               
             
            </div>
            <div class="header__top__right__auth">
                <a href="./Login.php
                "><i class="fa fa-user"></i> Connexion</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./indexSite.php
                ">Home</a></li>
                
                <li><a href="#">Pages</a>
                   
                </li>
               
                <li><a href="./contact.php
                ">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/profile.php?id=100064151615406"><i class="fa fa-facebook"></i></a>
        
        
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> 	<a href="mailto:mtk@planet.tn" style="color:#c99b1e;">mtk@planet.tn</a></li>
                <li>	Manufacture des Tabacs de Kairouan</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                            <li><i class="fa fa-envelope"></i> 	<a href="mailto:mtk@planet.tn" style="color:#c99b1e;">mtk@planet.tn</a></li>
                                <li>Manufacture des Tabacs de Kairouan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                               
                                
                                    <a href="https://www.facebook.com/profile.php?id=100064151615406"><i class="fa fa-facebook"></i></a>
                                   
                               
                            </div>
                           
                            <div class="header__top__right__auth">
                                <a href="Login.php"><i class="fa fa-user"></i> Connexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                       <img src="img/logo1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li ><a href="indexSite.php
                            ">Accueil</a></li>
                            
                       
                            
                            <li class="active"><a href="./contact.php
                            ">Contact</a></li>
                            <li><a href="http://www.rnta.tn/evenements
                            ">Evenements</a></li>
                            <li><a href="http://www.rnta.tn/index.php/la-production">Production</a></li>
                         
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
              
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Lien Utiles</span>
                        </div>
                        <ul>
                            <li><a href="http://www.rnta.tn/technique-culturale">Activité de cuture</a></li>
                            <li><a href="http://www.rnta.tn/index.php/la-production">Production</a></li>
                            <li><a href="http://www.rnta.tn/vente-et-marketing">Vente et Marketing</a></li>
                            <li><a href="http://www.rnta.tn/controle-de-qualite">Controle de qualité</a></li>
                            <li><a href="http://www.rnta.tn/appeloffres">Appels d'offres / Consultation</a></li>
                            <li><a href="http://www.rnta.tn/evenements">Evénements</a></li>
                            <li><a href="http://www.rnta.tn/presse">Presse</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                            <div class="hero__search__categories"> 
                            <form action="http://www.google.com/search" method="get">
                        
                                </div>
                                <h5 style="margin-top: 10px;"> Bienvenu Dans Le Site Officiel De MTK </h5>
                            </form>
                        </div>
                          </div>
                            </form>
                        </div>
                      
                                
                            </div>
                          
                        </div>
                    </div>
                
                        <div class="hero__text">
                        
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- Hero Section End -->

    
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+2167 7281699</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>El Mansourah Beit El Hekma - Kairouan, 3100</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Ouverture</h4>
                        <p>8:00 - 15:00</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>MTK.tn@planet.tn</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6639146.267225233!2d1.6485261999999934!3d35.658022199999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fddaa92dcfc0a7%3A0x36c9ea48db9958c9!2sKairouan%20Tobacco%20Manufacture!5e0!3m2!1sen!2stn!4v1673963472320!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>MTK</h4>
                <ul>
                    <li>Phone: +21677281699</li>
                    <li>Addresse : M33P+JMW, BP 106 3100, Rue Beït Al Hekma Kairouan</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->
    <script>
    function verification()
    {
    if(document.f1.nom.value=="")
    { alert("veuillez entrer votre nom SVP");return false;
    }
    if(document.f1.email.value=="")
    { alert("veuillez entrer votre email SVP");return false;
    }
    if(document.f1.message.value=="")
    { alert("veuillez entrer votre Message SVP");return false;
    }
    
   
    alert("Message achevée!!");}
    </script>
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Laisser Votre Message/Proposition/Réclamation</h2>
                    </div>
                </div>
            </div>
            <form action="contact.php" method="POST" name="f1" onsubmit="return verification()">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Votre nom" name="nom">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Votre Email" name="email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Votre message" name="message"></textarea>
                        <button type="submit" class="site-btn" name="b1">ENVOYER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                        </div>
                        <ul>
                            <li>El Mansoura - Kairouan, 3100</li>
                            <li>Phone: +(216) 77 281 699</li>
                            <li>MTK.tn@planet.tn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liens A Propos de production de tabac</h6>
                        <ul>
                            <li><a href="https://youtu.be/holtI11fMa0">La Production Dans MTK</a></li>
                            <li><a href="https://www.tobaccoinaustralia.org.au/chapter-3-the-industry/tobacco-production">Production Par Etapes</a></li>
                            <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6382575/">Libraries de Medecine</a></li>
                            <li><a href="https://www.statista.com/topics/2224/tobacco-production/">Statistques Mondiales</a></li>
                            <li><a href="https://www.tobaccoatlas.org/topic/tobacco-production/">Tobacco Atlas</a></li>
                            
                        </ul>
                        <ul>
                
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                        <h6>Liens pour lutter contre le Tabagisme:</h6>
                        <ul>
                            <li><a href="https://www.cancer.org/healthy/stay-away-from-tobacco.html">Socité Americaine contre le cancer </a></li>
                            <li><a href="https://www.lung.org/stop-smoking">American Lung Association</a></li>
                            <li><a href="https://www.cdc.gov/tobacco/index.htm">Centers for Disease Control and Prevention (CDC)</a></li>
                            <li><a href="https://www.clearwaymn.org/">ClearWay Minnesota</a></li>
                            <li><a href="https://www.cancer.gov/about-cancer/causes-prevention/risk/tobacco">National Cancer Institute</a></li>
                            <li><a href="https://www.quitday.org/">QuitDay</a></li>
                        </ul>
                        
                        <ul>
                       
                           
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   &copy;<script>document.write(new Date().getFullYear());</script> Créer Par : Labidi Mohamed Amine & Belghith Adem  <a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js1/jquery-3.3.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/jquery.nice-select.min.js"></script>
    <script src="js1/jquery-ui.min.js"></script>
    <script src="js1/jquery.slicknav.js"></script>
    <script src="js1/mixitup.min.js"></script>
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/main.js"></script>
    



</body>

</html>