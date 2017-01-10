<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice Session Page 2</title>
	<link rel="stylesheet" href="exercice2.css">
</head>
<body>
	<div class="container">
		<?php 
			session_start();
			echo
			"<h2> Hello " . $_SESSION["prenom"] . " " . $_SESSION["nom"] . " ! </h2>" .
			"<h3> Tu as " . $_SESSION["age"] . " ans. </h3>";
		?>
	</div>
	
</body>
</html>