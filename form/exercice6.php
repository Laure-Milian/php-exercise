<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<?php 
	if ( isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) ) {
		echo $_POST["civilite"] . ' ' . $_POST["prenom"] . ' ' . $_POST["nom"];
	} 
	else {
		echo 
		'<form action="/exercice6.php" method="post">
			<div>
				<label for="civilite">Civilité :</label>
			</div>
			<div>
				<select name="civilite" id="civilite">
					<option value="Mr">Mr</option>
					<option value="Mme">Mme</option>
				</select>
			</div>
			<div>
				<label for="nom">Nom :</label>
			</div>
			<div>
				<input type="text" id="nom" name="nom">
			</div>
			<div>
				<label for="prenom">Prénom :</label>
			</div>
			<div>
				<input type="text" id="prenom" name="prenom">
			</div>
			<div>
				<input type="submit" value="Envoyer">
			</div>
		</form>';
	}
?>

</body>
</html>