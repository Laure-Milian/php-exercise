<?php

if ($_GET['dateDebut'] && $_GET['dateFin']) {
	echo 'debut = ' . $_GET['dateDebut'] . 'fin = ' . $_GET['dateFin'];
} else {
	echo "Il n'y a pas tous les paramètres.";
}