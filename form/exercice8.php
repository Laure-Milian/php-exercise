<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<?php 

	$form =	'<form action="/exercice8.php" method="post" enctype="multipart/form-data">
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

		$ext = strrchr($_FILES["fichier"]["name"], '.');
		$ext_low = strtolower($ext);
		$ext_sub = substr($ext_low, 1);

		$ext_sub == 'pdf' ? $msg_ext="Le fichier est bien un pdf" : $msg_ext="Le fichier n'est pas un pdf.";
		
		echo'<div>' .
				$_POST["civilite"] . ' ' . $_POST["prenom"] . ' ' . $_POST["nom"] . 
			'</div>' .
			'<div>' . 
				'Nom du fichier : ' . $_FILES["fichier"]["name"] .
				' Extension : ' . $ext_sub . 
			'</div>' .
			'<div>' .
				$msg_ext .
			'</div>';
	
	} 
	else {
		echo $form;
	}
?>