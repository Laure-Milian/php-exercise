<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 4 Récupérer des cookies</title>
	<link rel="stylesheet" href="exercice4.css">
</head>
<body>
	<div class="container">
		<div> 
			<h2>Votre login :</h2>
			<span><?= $_COOKIE["login"] ?></span>
		</div>
		<div> 
			<h2>Votre mot de passe :</h2>
			<span><?= $_COOKIE["mdp"] ?></span>
		</div>
	</div>
</body>
</html>