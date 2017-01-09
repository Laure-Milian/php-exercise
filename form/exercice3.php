<?php
	if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
		echo $_GET["prenom"] . ' ' . $_GET["nom"];
	} 