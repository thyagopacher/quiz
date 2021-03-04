<?php 
	$p1 = "frutas";
	$p2 = "1hora";
	$p3 = "75";
	$p4 = "agua";
	$p5 = "a";
	$p6 = "8510";
	$p7 = "verdadeiro";
	$p8 = "945";
	$p9 = "sempre";

	$pagina = $_GET['pg']-1;

	if (${"p$pagina"} == $_GET['res']) {
		echo "1";
	} else {
		echo "0";
	}

?>