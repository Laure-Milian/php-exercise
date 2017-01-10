<?php
	$login = $_POST["login"];
	setcookie("login", $login, time()+3600);

	$mdp = $_POST["mdp"];
	setcookie("mdp", $mdp, time()+3600);
