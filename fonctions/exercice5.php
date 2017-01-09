<h1>Fonctions - Exercice 5</h1>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>

<?php
	function Concat($a, $b) {
		if (is_numeric($a) && is_string($b) || is_numeric($b) && is_string($a)) {
			return $a . ' ' . $b;
		} else {
			return "L'un des paramètres doit être un nombre et l'autre une chaîne de caractères";
		}
	}
	echo '<div>' . Concat('bla', 5) . '</div>';
	echo '<div>' . Concat(5, 'bla') . '</div>';
	echo '<div>' . Concat('bl', 'aaaaaa') . '</div>';
	echo '<div>' . Concat(5, 6) . '</div>';
?>