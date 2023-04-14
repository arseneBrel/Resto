<?php
session_start();
if (isset($_POST['submit'])) {
	$nom = htmlspecialchars($_POST['nom']);
	$pass = htmlspecialchars($_POST['pass']);

	try {
		$db = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}

	$sql = "SELECT * FROM client WHERE Nom = '$nom' AND Mot_de_passe = '$pass'";
	$exe = $db->prepare($sql);
	$exe->execute();
	if ($exe->rowCount() > 0) {
		$recuper = $exe ->fetch();
		$_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $recuper['Prenom'];
		$_SESSION['mail'] = $recuper['mail'];
		$_SESSION['tel'] = $recuper['Telephone'];
		header("Location: index.php");
	} else {
		$message = "Une erreur c'est produite";
	}
} else {
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
	<!--===============================================================================================-->
</head>

<body class="light">

<section id="header">
  <a href="#"> <img src="eds1.png" class="logo" alt="" height="100px" width="150px"></im g></a>

  <div>
    <ul id="navbar">
      <li><a  href="index.php"> Accueil</a></li>

      <li><a href="Boutique.php"> Boutique</a></li>

      <li><a href="A Propos.php">A propos</a></li>
      <li><a href="Contact.php"> Contact</a></li>
      <?php if (!isset($_SESSION['nom'])) {
        
      ?>
	  <li><a  href="login.php"> Se connecter</a></li>
      <?php  } else {
		//   session_destroy();
      ?>
	  <li><a class="active" href="login.php"> Se deconnecter</a></li>
      
      <?php  } 
      ?>
      <li><a href="Cart.php"> <i class="fa-solid fa-bag-shopping"></i></a></li>
      <form>
        <input type="search" placeholder="Rechercher"> <i class="fa-solid fa-magnifying-glass"></i>
      </form>

    </ul>

  </div>
</section>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/inscriptions.jpg);">
					<span class="login100-form-title-1">
						CONNEXION
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nom d'utilisateur</span>
						<input class="input100" type="text" name="nom" placeholder="Entrer un nom d'utilisateur">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="pass" placeholder="Entrer un mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<br>

						<div>
							<span>Pas de compte ?</span>
							<span ><a class="couleur" href="inscrire.php" class="txt1">
									S'inscrire
								</a></span>
						</div>
					</div>

					<div class="container-login100-form-btn post ">
						<button type="submit" class="login100-form-btn " name="submit">
							Connexion
						</button>
					</div>
					<span style="margin-left: 10px;"><?php if (isset($message)) {
															echo $message;
														}
														?></span>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<?php require "footer.php" ?>
</body>

</html>