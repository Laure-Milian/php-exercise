<?php
	$currentTimestamp = time();
	$mardiTimestamp = strtotime('02-08-2016')+15*60*60;
	$numDays = floor(abs($mardiTimestamp - $currentTimestamp)/60/60/24);

	echo $numDays;

/*	$aujourdhui = new DateTime("now");
	$mardiX = new DateTime("2016-05-16");
	echo $aujourdhui->diff($mardiX)->format('Lancé il y a : %d jours');
