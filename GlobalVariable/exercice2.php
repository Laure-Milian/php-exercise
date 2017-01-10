<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session exercise</title>
	<link rel="stylesheet" href="exercice2.css">
</head>
<body>
	<div class="container">
		<div> 
			<h1> Hey there </h1>
			<?php
				session_start();
				$_SESSION["nom"] = "Horseman";
				$_SESSION["prenom"] = "BoJack";
				$_SESSION["age"] = 52;
				echo '<a href="exercice2-page2.php">Aller sur le site</a>';
			?>
		</div>
	</div>
</body>
</html>