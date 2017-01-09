<h1>Fonctions - Exercice 3</h1>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>

<?php
	function ConcatStr($str1, $str2) {
		return $str1 . ' ' . $str2;
	}

	echo ConcatStr("Hola", "el mundo");
?>