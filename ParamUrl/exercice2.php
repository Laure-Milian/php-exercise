<?php

if (isset($_GET['age'])) {
	echo $_GET['age'];
} else {
	echo "Le paramètre age n'existe pas";
}