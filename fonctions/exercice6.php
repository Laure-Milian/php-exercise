<h1>Fonctions - Exercice 6</h1>
<p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>

<?php
	function Concat($nom, $prenom, $age) {
		return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
	}

	echo Concat('Dupond', 'Frank', 27);
?>