<?php

$arrAssoc = [02=>"Aisne",
			59=>"Nord",
			60=>"Oise",
			62=>"Pas de Calais",
			80=>"Somme"];

foreach ($arrAssoc as $number => $name) {
	echo '<div>' . $name . '</div>';
}