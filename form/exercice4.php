<?php

	if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
		echo $_POST["prenom"] . ' ' . $_POST["nom"];
	} 