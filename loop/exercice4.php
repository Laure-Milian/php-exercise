<h1>Exercice 4</h1>
<p>Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut : 
l'afficher
l'incrementer de la moitié de sa valeur</p>

<?php
	$len = 10;
	for ($a = 1; $a < $len; $a = $a + $a / 2) {
		echo '<div>' . $a . '</div>'; 
	}

?>