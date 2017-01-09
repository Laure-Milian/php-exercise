
<?php

if (isset($_GET['nom']) && isset($_GET['prenom'])) {
	echo $_GET['nom'];
	echo $_GET['prenom'];
}