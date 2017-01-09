<h1>Fonctions - Exercice 8</h1>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>

<?php

	function Sum($a=2, $b=4, $c=6) {
		return $a + $b + $c;
	}

	echo '<div>' . Sum() . '</div>';
	echo '<div>' . Sum(5, 5, 5) . '</div>';

?>