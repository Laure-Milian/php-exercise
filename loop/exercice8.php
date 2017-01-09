<h1>Exercice 8</h1>
<p>
En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
</p>
<?php
	$len = 0;
	for ($i = 200; $i >= $len; $i = $i - 12) {
		echo '<div>' . $i . ' Enfin !!!! </div>';
	}
?>