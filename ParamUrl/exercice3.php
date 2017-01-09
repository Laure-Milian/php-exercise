<?php

if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
	echo 'debut = ' . $_GET['dateDebut'] . 'fin = ' . $_GET['dateFin'];
} else {
	echo "Il n'y a pas tous les paramètres.";
}