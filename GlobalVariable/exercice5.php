<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire et cookies</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" href="exercice3.css">
</head>
<body>
	<div class="container">
		<form method="post" action="/exercice5-cookie.php">
			<div class="divForm">
				<label for="login">Nouveau login : </label>
			</div>
			<div class="divForm">
				<input type="text" name="newlogin" id="login">
			</div>
			<div class="divForm">
				<label for="mdp">Nouveau mot de passe : </label>
			</div>
			<div class="divForm">
				<input type="text" name="newmdp" id="mdp">
			</div>
			<div class="divForm">
				<input class="fluid massive ui teal button" type="submit" value="S'identifier">
			</div>
		</form>
	</div>
</body>
</html>
