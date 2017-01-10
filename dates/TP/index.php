<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendrier</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="container">

		<form action="/">
			<div>
				<label for="month">Sélectionner le mois : </label>
			</div>
			<div>
				<select name="month" method="get" id="month">
					<option value="1">Janvier</option>
					<option value="2">Février</option>
					<option value="3">Mars</option>
					<option value="4">Avril</option>
					<option value="5">Mai</option>
					<option value="6">Juin</option>
					<option value="7">Juillet</option>
					<option value="8">Août</option>
					<option value="9">Septembre</option>
					<option value="10">Octobre</option>
					<option value="11">Novembre</option>
					<option value="12">Décembre</option>
				</select>
			</div>
			<div>
				<label for="year">Sélectionner l'année : </label>
			</div>
			<div>
				<select name="year" id="year">
					<option value="2017">2017</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2013">2011</option>
					<option value="2012">2010</option>				
				</select>
			</div>
			<div>
				<input type="submit" value="Créer le calendrier">
			</div>
		</form>
		
		<?php 
			// Récupérer le mois et l'année
			setlocale(LC_TIME, 'fr_FR.UTF8');
			$month = $_GET["month"];
			$year = $_GET["year"];

			//Définir le nombre de jours dans le mois
			$days_num = cal_days_in_month(CAL_GREGORIAN, $month, $year);
			echo $days_num;

			// Définir quel est le premier jour (lundi, mardi...)
			$firstdayTimestamp = strtotime('01-' . $month . '-' . $year);
			$first_day = date("N", $firstdayTimestamp);
			$first_td = $first_day - 1;

			// Tableau mois
			$arr_month = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
			$index = $month - 1;
			$month_str = $arr_month[$index];

		?>


		<h1><?= $month_str . " " . $year ?></h1>
		<table>
			<tr>
				<td>Lundi</td>
				<td>Mardi</td>
				<td>Mercredi</td>
				<td>Jeudi</td>
				<td>Vendredi</td>
				<td>Samedi</td>
				<td>Dimanche</td>
			</tr>
			<tr>
			<?php 
				$len = $days_num + $first_td;
				echo $len;
				$value = 1;
				for ($i = 0 ; $i < $len ; $i++) {
					if ($i < $first_td) {
						echo '<td></td>';
					}
					elseif ($i % 7 === 0) {
						echo '</tr>
						<tr>
							<td>' . $value . '</td>';
							$value++;
					} else {
						echo '<td>' . $value . '</td>';
						$value++;
					}
				}
			?>
			</tr>
		</table>

	</div>
	
</body>
</html>