<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Global Variables Exercice</title>
	<link rel="stylesheet" href="exercice1.css">
</head>
<body>

	<?php
		$User_Agent = $_SERVER['HTTP_USER_AGENT'];
		$IP_Address = $_SERVER['REMOTE_ADDR'];
		$Server_name = $_SERVER['SERVER_NAME'];
	?>

	<div class="container">
		<div> 
			<h2>Votre User Agent :</h2>
			<span><?= $User_Agent ?></span>
		</div>
		<div> 
			<h2>Votre addresse IP :</h2>
			<span><?= $IP_Address ?></span>
		</div>
		<div> 
			<h2>Nom du serveur :</h2>
			<span><?= $Server_name ?></span>
		</div>
	</div>
	
</body>
</html>