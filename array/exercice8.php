<?php

$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

$len = count($mois);

for ($i = 0 ; $i < $len ; $i++) {
	echo '<div>' . $mois[$i] . '</div>';
}