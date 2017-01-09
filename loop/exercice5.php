<h1>Exercice 5</h1>
<p>
En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
</p>

<?php
	$len = 15;
	for ($i = 1 ; $i <= $len ; $i++) {
		echo '<div>' . $i . ' -> On y arrive presque </div>'; 
	}
?>