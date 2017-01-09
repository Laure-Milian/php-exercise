<h1>Fonctions - Exercice 7</h1>
<p>Faire une fonction qui prend deux paramètres : age et genre.</p>
<p>Le paramètre genre peut prendre comme valeur : Homme / Femme.</p>
<p>La fonction doit renvoyer en fonction des paramètres :
	<ul>
		<li>Vous êtes un homme et vous êtes majeur</li>
		<li>Vous êtes un homme et vous êtes mineur</li>
		<li>Vous êtes une femme et vous êtes majeur</li>
		<li>Vous êtes une femme et vous êtes mineur</li>
	</ul>
</p>
<p>Gérer tous les cas.</p>

<?php
	function Describe($genre, $age) {

		$genre_low = strtolower($genre);
		
		if($genre_low === "homme" && $age >= 18) {
			return 'Vous êtes un homme et vous êtes majeur';
		}
		elseif($genre_low === "homme" && $age < 18) {
			return 'Vous êtes un homme et vous êtes mineur';
		}
		elseif($genre_low === "femme" && $age >= 18) {
			return 'Vous êtes une femme et vous êtes majeure';
		}
		elseif($genre_low === "femme" && $age < 18) {
			return 'Vous êtes une femme et vous êtes mineure';
		}
	}

	echo '<div>' . Describe("Homme", 26) . '</div>';
	echo '<div>' . Describe("homme", 14) . '</div>';
	echo '<div>' . Describe("femme", 26) . '</div>';
	echo '<div>' . Describe("femme", 14) . '</div>';
?>