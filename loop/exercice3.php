<h1>Exercice 3</h1>
<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable</p>

<?php 
	$b = 40;
	$len = 10;
	for ($a = 100 ; $a >= $len; $a--) {
		echo '<div>' . $a * $b . '</div>';
	}
	?>