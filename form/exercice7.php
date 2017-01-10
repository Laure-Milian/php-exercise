<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<?php 

	$form =	'<form action="/exercice7.php" method="post" enctype="multipart/form-data">
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
				<label for="file">Joindre un fichier (max 1 Mo) : </label>
				<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
				<input type="file" name="fichier" id="fichier">
			</div>
			<div>
				<input type="submit" value="Envoyer">
			</div>
		</form>';

	if ( isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) ) {
		echo 
			'<div>' .
				$_POST["civilite"] . ' ' . $_POST["prenom"] . ' ' . $_POST["nom"] . 
			'</div>' .
			'<div>' . 
				'Nom du fichier : ' . $_FILES["fichier"]["name"] .
				' Extension : ' . $_FILES["fichier"]["type"] . 
			'</div>' ;
	} 
	else {
		echo $form;
	}
?>
