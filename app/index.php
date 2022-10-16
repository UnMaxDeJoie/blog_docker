<?php
session_start();
?>
<!--Démarre une session pour que les pages soit connéctées entre elles -->
<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Blog World</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--    Tout les liens pour avoir un front potable-->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
<!--                Titre -->
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Inscription & Connexion
					</span>
				</div>

<!--                Input de l'email -->
				<form class="login100-form validate-form" method="post" action="login.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="email @ nécessaire">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="moi@email.com">
						<span class="focus-input100"></span>
					</div>

<!--                    Input du mot de passe -->
					<div class="wrap-input100 validate-input m-b-18" data-validate = "mot de passe requis">
						<span class="label-input100">MDP</span>
						<input class="input100" type="password" name="pass" placeholder="mot de passe">
						<span class="focus-input100"></span>
					</div>

<!--                    Input du pseudo -->
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Ton surnom ?">
                        <span class="label-input100">Pseudo</span>
                        <input class="input100" type="text" name="pseudo" placeholder="pseudo">
                        <span class="focus-input100"></span>
                    </div>

<!--                    Case à cocher : ne sert à rien -->
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Coche pour plus de chance
							</label>
						</div>

<!--                        Ne sert à rien non plus à part pour la blague -->
						<div>
							<a href="#" id="clique" onclick="change" class="txt1">
								tu peux cliquer
							</a>
                            <button onclick="change()">ICI</button>
						</div>
					</div>

<!--                    Boutton d'envoi des informations -->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit1">
							Envoyer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--    Tout les scripts pour avoir un front potable -->
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!--    Blague pour le bouton cliquable -->
    <script>
        function change() {
            document.getElementById("clique").innerHTML = "mais ça ne sert à rien";
        }
    </script>
</body>
</html>