<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Blog World</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Inscription & Connexion
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="login.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="email @ nécessaire">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="moi@email.com">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "mot de passe requis">
						<span class="label-input100">MDP</span>
						<input class="input100" type="password" name="pass" placeholder="mot de passe">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Ton surnom ?">
                        <span class="label-input100">Pseudo</span>
                        <input class="input100" type="text" name="pseudo" placeholder="pseudo">
                        <span class="focus-input100"></span>
                    </div>

<!--                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Montre ta petite bouille">-->
<!--                        <span class="label-input100">Photo de Profil</span>-->
<!--                        <input class="input100" type="file" name="photo_profil">-->
<!--                        <span class="focus-input100"></span>-->
<!--                        <img id="photo" src="photo_profil" alt="">-->
<!--                    </div>-->

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Coche pour plus de chance
							</label>
						</div>

						<div>
							<a href="#" id="clique" onclick="change" class="txt1">
								tu peux cliquer
							</a>
                            <button onclick="change()">ICI</button>
						</div>

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Envoyer
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
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

    <script>
        function change() {
            document.getElementById("clique").innerHTML = "mais ça ne sert à rien";
        }
    </script>
</body>
</html>