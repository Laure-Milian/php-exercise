<?php

if ($_GET['langage'] && $_GET['serveur']) {
	echo 'langage = ' . $_GET['langage'] . 'serveur = ' . $_GET['serveur'];
} else {
	echo "Il n'y a pas tous les paramètres.";
}