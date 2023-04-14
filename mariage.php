<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="script1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylemariage.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>mariage</title>
</head>
<body onload="slider()">
    <header>
        <a href="#" class="logo"><span>BL~R</span>esto</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="index.php" onclick="toggleMenu();">Accueil</a></li>
            <li><a href="#a-propos1" onclick="toggleMenu();">A propos</a></li>
            <li><a href="menu.html" onclick="toggleMenu();">Menu du jour</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Expert~Déco</a></li>
            <li><a href="#temoignage" onclick="toggleMenu();">Temoignage~~Déco</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
            <a href="paypal.html" class="btn-reserve"onclick="toggleMenu();">Payer </a>
            <div class="btn-toggle">Go Nuit</div>
        </ul>
    </header>
    <div class="bannerM">
        <div class="slider">
            <img src="./images/m4.webp" alt="" id="slideImg">
        </div>
        <div class="overlay">
            <div class="content">
                <h1>DECORATION $ SERVICE TRAITEUR</h1>
                <h3>Avez vous besoin d'une décoration ou/et d'un service traiteur pour votre ceremonie de mariage? sans soucis n'hesitez pas à nous contacter nous sommes a votre disposition. </h3>

                <div>
                    <button type="button"> <a href="#popular-destination""> VOIR PLUS</a></button>
                    <a href="./login_v15/index.php" class="btn2"><button type="button">RESERVER</button></a>
                </div>
            </div>
            
        </div>
    </div>









              
    <script>
        var slideImg = document.getElementById("slideImg");

        var images = new Array(
            "images/m4.webp",
            "images/m5.jpg",
            "images/m6.jpg",
            "images/m7.webp"
        );
        var len = images.length;
        var i = 0;
        function slider(){
            if(i > len-1){
                i = 0;

            }
            slideImg.src = images[i];
            i++;
            setTimeout('slider()',3000);
        }

    </script>










    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header =document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0 );
        });
   
        function toggleMenu(){
            const tmenuToggle = document.querySelector('.menuToggle');
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>







<!-- <section class="c1">

    <div class="slider2">
        <div class="slides">
            <input type="radio" name="radio-btn" value="radio1">
            <input type="radio" name="radio-btn" value="radio2">
            <input type="radio" name="radio-btn" value="radio3">
            <input type="radio" name="radio-btn" value="radio4">

            <div class="slide first">
                <img src="./images/m4.webp" alt="">
            </div>
            <div class="slide ">
                <img src="./images/m5.jpg" alt="">
            </div>
            <div class="slide ">
                <img src="./images/m6.jpg" alt="">
            </div>
            <div class="slide ">
                <img src="./images/m7.webp" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

</section> -->


<section id="a-propos1">
    <h1 class="title1">à propos</h1>
    <div class="img-desc">
        <div class="left1">
        <video src="./images/istockvideo.mp4" autoplay loop></video>
    </div>
        <div class="right1">
            <h3>nous sommes situés au cameroun plus precisement au centre de la ville de YAOUNDE</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, praesentium consequatur? Tenetur eos harum aut libero autem optio quae sapiente mollitia quo perspiciatis, magni velit, ipsam earum eius perferendis unde!</p>
            <a href="#">lire plus</a>
        </div>
    </div>
   
</section>



<section id="popular-destination">
    <h1 class="title2"> A Titre D'ILLUSTRATIONS :</h1>
    <p>chaque modèle ci_dessous corresponds à un chiffre numéroter de 1 à 6 . Alors à cet effet, si vous souhaitez pour votre ceremonie y avoir accès c'est très simple reserver maintenant</p>
    <div class="content2">
        <div class="box2">
            <img src="./images/m2.jpg" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>


        <div class="box2">
            <img src="./images/m3.webp" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>

        

        <div class="box2">
            <img src="./images/m4.webp" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>

                

        <div class="box2">
            <img src="./images/m5.jpg" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>

                

        <div class="box2">
            <img src="./images/m6.jpg" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>

                

        <div class="box2">
            <img src="./images/m7.webp" alt="">
            <div class="content2">
                <div>
                    <h4>SALLE 1 , 400.000FCFA</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>distinctio, ab autem quibusdam tem</p>
                    <a href="./login_v15/index.php" class="btn2">Reservation</a>
                </div>
            </div>
        </div>



    </div>
</section>












<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Inscrvivez vous pour plus d'actualité<samp></samp></h4>
        <p>Recevez des mises à jours par mail sur notre boutiques et <span>offres speciales </span> </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Votre addresse e-mail" id="email">
        <button class="normal" onclick="controlEmail();">S'incrire</button>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </div>

</section>











<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
        <p>CES DIFFERENTS CHEFS RENOMMES SONT LA POUR CONCOCTER TOUS VOS DELICES ET BIEN PLUS ENCORE. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe1.jpg" alt="">
            </div>
            <div class="text">
                <h3>Franck leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe2.jpg" alt="">
            </div>
            <div class="text">
                <h3>Franck leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Franck leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe4.jpg" alt="">
            </div>
            <div class="text">
                <h3>Franck leroi</h3>
            </div>
        </div>
    </div>
 </div>
</section>











<section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>QUELQUES TEMOIGNAGES RECENTS VENANTS DE NOTRE CLIENTELLE TRES SATISFAITE PAR NOS SERVICES ET QI ONT APRRECIE LA DEGUSTATIONS.
            MERCI. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/t1.jpeg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Franck leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t2.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Franck leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t3.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>Franck leroi</h3>
            </div>
        </div>
    </div>
 </section>














<footer class="s2">
    <div class="contenu3-footer">

        <div class="bloc footer-services">
            <h3>Nos services</h3>
            <ul class="liste-services">
                <li><a href="">Hebergement</a></li>
                <li><a href="">Nom de domaine</a></li>
                <li><a href="">restaurant</a></li>
                <li><a href="">machine learning</a></li>
                <li><a href="">finances</a></li>
                <li><a href="">start-up</a></li>
            </ul>
        </div>



        <div class="bloc footer-contact3">
            <h3>restons en contact</h3>
            <p>+237 656 415 191</p>
            <p>supportclient@gmail.com</p>
            <p>YAOUNDE 6325-rue des beaux arts</p>
           
        </div>



        <div class="bloc footer-horaires3">
            <h3>les horaires</h3>
            <ul class="liste-horaires">
                <li> ✅ Lundi 10h-19h</li>
                <li> ✅ mardi 10h-19h</li>
                <li> ✅ mercredi 10h-19h</li>
                <li> ✅ jeudi 10h-19h</li>
                <li> ✅ vendredi 10h-19h</li>
                <li> ✅ samedi 10h-19h</li>
                <li> ❌ dimanche      </li>
                
            </ul>
        </div>



        <div class="contenu-footer">

            <div class="bloc footer-medias">
                <h3>Nos réseaux </h3>
                <ul class="liste-services">
                    <li><a href=""> <img src="./images/facebook.png" alt="" width="30px">  Facebook</a></li>
                    <li><a href=""> <img src="./images/twiter.png" alt="" width="30px"> Twiter</a></li>
                    <li><a href=""> <img src="./images/instag.png" alt="" width="30px"> Instagram</a></li>
                    <li><a href=""> <img src="./images/ytbe.png" alt="" width="30px"> Youtube</a></li>
                </ul>
            </div>
















    </div>
</footer>


</body>
</html>