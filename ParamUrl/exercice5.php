<?php

if (isset($_GET["semaine"])) {
	echo $_GET["semaine"];
} else {
	echo "le paramètre semaine n'existe pas";
}