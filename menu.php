<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylemariage.css">
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<script src="script1.js"></script>

<script src="paypal.js"></script>
    <title>menu</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><span>BL~R</span>esto</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="index.php" onclick="toggleMenu();">Accueil</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
            <a href="#paypal" class="btn-reserve"onclick="toggleMenu();">Reservation</a> 
            <div class="btn-toggle">Go Nuit</div>
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>Bienvenue sur notre espace menu </h2> 
            <p>parcourez notre espace menu et découvrez toutes les propositions de nos plats spéciaux  .</p> 
            <a href="#menu" class="btn1">Notre Menu</a>
            <a href="index.php" class="btn2">Accueil</a>
        </div>
    </section>

    
    <section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-texte"><span>M</span>enu</h2>
            <p>VENEZ DECOUVRIR LA DIVERSITEE DE NOS MENUS SPECIAUX. </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="./images/c1.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade </h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c2.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c3.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c4.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c5.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c6.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c7.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/c8.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Special salade</h3>
                </div>
            </div>

<!--ajout de photos-->




<div class="box">
    <div class="imbox">
        <img src="./images/c8.jpg" alt="">
    </div>
    <div class="text">
        <h3>Special salade</h3>
    </div>
</div>

<div class="box">
    <div class="imbox">
        <img src="./images/c8.jpg" alt="">
    </div>
    <div class="text">
        <h3>Special salade</h3>
    </div>
</div>

<div class="box">
    <div class="imbox">
        <img src="./images/c8.jpg" alt="">
    </div>
    <div class="text">
        <h3>Special salade</h3>
    </div>
</div>

<div class="box">
    <div class="imbox">
        <img src="./images/c8.jpg" alt="">
    </div>
    <div class="text">
        <h3>Special salade</h3>
    </div>
</div>











        </div>
     </div>
    
    </section>
    



































    

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