<?php
	$new_login = $_POST["newlogin"];
	setcookie("login", $new_login, time()+3600);

	$new_mdp = $_POST["newmdp"];
	setcookie("mdp", $new_mdp, time()+3600);

	echo $_COOKIE["login"] . $_COOKIE["mdp"];