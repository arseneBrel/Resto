<?php

if (isset($_POST['submit'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$tel = $_POST['tel'];
	$password = $_POST['pass'];
	try {
		$db = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}


	$sql = 'INSERT INTO client(Nom,Prenom,mail,Mot_de_passe,Telephone) VALUE (:Nom, :Prenom, :mail, :Mot_de_passe, :Telephone)';
	$execute = $db->prepare($sql);
	$execute->execute(array(
		'Nom' => $nom,
		'Prenom' => $prenom,
		'mail' => $mail,
		'Mot_de_passe' => $password,
		'Telephone' => $tel,

	));
	$row = $execute->rowCount();
	if ($row == 1) {
		header('Location: login.php');
	} else {
		$message = "Erreur";
	}
}




?>
<!DOCTYPE php>
<php lang="en">

	<head>
		<title>Inscription</title>
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
		<link rel="stylesheet" href="stylez.css">
		<link rel="stylesheet" href="style1.css">
		<!--===============================================================================================-->
	</head>

	<body class="light">
		<section id="header">
			<a href="#"> <img src="eds1.png" class="logo" alt="" height="100px" width="150px"></im g></a>

			<div>
				<ul id="navbar">
					<li><a href="index.php"> Accueil</a></li>

					<li><a href="Boutique.php"> Boutique</a></li>

					<li><a href="A Propos.php">A propos</a></li>
					<li><a href="Contact.php"> Contact</a></li>
					<li><a class="active" href="inscrire.php"> S'inscrire</a></li>
					<li><a href="Cart.php"> <i class="fa-solid fa-bag-shopping"></i></a></li>
					<form>
						<input type="search" placeholder="Rechercher"> <i class="fa-solid fa-magnifying-glass"></i>
					</form>

				</ul>

			</div>
		</section>
		
		<div class="btn-toggle">Go Nuit</div>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(Login/images/inscriptions.jpg);">
						<span class="login100-form-title-1">
							Inscription
						</span>
						<span style="color: red;"><?php if (isset($message)) {
														echo $message;
													}
													?></span>
					</div>

					<form class="login100-form validate-form" method="POST" action="">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Nom</span>
							<input class="input100" type="text" name="nom" placeholder="Entrer un nom d'utilisateur" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Prénom</span>
							<input class="input100" type="text" name="prenom" placeholder="Entrer un nom d'utilisateur" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Adress Email</span>
							<input class="input100" type="email" name="mail" placeholder="Entrer un nom d'utilisateur" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Téléphone</span>
							<input class="input100" type="tel" name="tel" placeholder="Entrer un nom d'utilisateur" required>
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<span class="label-input100">Mot de passe</span>
							<input class="input100" type="password" name="pass" placeholder="Entrer un mot de passe" required>
							<span class="focus-input100"></span>
						</div>

						<div class="flex-sb-m w-full p-b-30">
							<br>


						</div>

						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn" name="submit">
								S'inscrire
							</button>
						</div>
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
		<script src="script.js"></script>
	</body>

</php>