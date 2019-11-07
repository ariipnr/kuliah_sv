<?php
	$c = array(
		"caption"=>"Monthly Revenue",
		"subCaption"=>"TEK MART Cilibende",
		"xAxisName"=>"month",
		"yAxisName"=>"revenue($)",
		"theme"=>"fint"
	);

	$d = array();

	$koneksi = mysqli_connect("localhost","root","","tekomb");

	$q = "SELECT * FROM `revenue_data`";
	
	$hq = mysqli_query($koneksi,$q);
	while($rc = mysqli_fetch_assoc($hq)){
		array_push($d, array("label"=>$rc["month"],"value"=>$rc["revenue"]));
	}

	$gab = array("chart"=>$c,"data"=>$d);
	echo $jsonnya = json_encode($gab);

?>