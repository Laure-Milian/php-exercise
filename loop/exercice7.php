<h1>Exercice 7</h1>
<p>
En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
</p>
<?php
$len = 100;
	for ($i = 1; $i <= $len ; $i = $i + 15) {
		echo '<div>' . $i . ' On tient le bon bout. </div>';
	}
?>