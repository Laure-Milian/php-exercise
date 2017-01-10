<?php 

	$currentTimestamp = time();
	$mardiTimestamp = strtotime('02-08-2016')+15*60*60;

	echo '<div> Timestamp du jour : ' . $currentTimestamp . '</div>';
	echo '<div> Timestamp du mardi 2 août 2016 à 15h00 : ' . $mardiTimestamp . '</div>';
?>