<h1>Fonctions - Exercice 4</h1>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
	<ul>
		<li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
		<li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
		<li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
	</ul>
</p>

<?php
	function Compare($a, $b) {
		if(!is_numeric($a) || !is_numeric($b)) {
			return "Au moins l'un des paramètres n'est pas un nombre.";
		} elseif ($a > $b) {
			return 'Le premier nombre est plus grand.';
		} 
		elseif ($a < $b) {
			return 'Le premier nombre est plus petit.';
		} 
		elseif ($a === $b) {
			return 'Les deux nombres sont identiques.';
		}
	}

	echo '<div>' . Compare(10, 5) . '</div>';
	echo '<div>' . Compare(5, 10) . '</div>';
	echo '<div>' . Compare(5, 5) . '</div>';
	echo '<div>' . Compare("bla", 5) . '</div>';
?>