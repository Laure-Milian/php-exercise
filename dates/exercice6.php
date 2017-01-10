<?php 

$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo '<div> Il y avait ' . $number . ' jours en février 2016. </div>';