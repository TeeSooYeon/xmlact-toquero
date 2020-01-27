<?php

	$rss .='<?xml version="1.0" encoding="UTF-8"?>';
	$rss .='<rss version"2.0">';
	$rss .='<channel>';

	$conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com","admin","root1234","db_1820921") or die(mysqli_error($conn));

	$sql = "SELECT * FROM tbl_viruses";
	$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
	
	while($record = mysqli_fetch_assoc($query)){
		extract($record);
		
		$rss.='<viruses>';
		$rss.='<name>'. $virus .'</name>';
		$rss.='<desc>'. $desc .'</desc>';
		$rss.='<cure>'. $cure .'</cure>';
		$rss.='</viruses>';
	}
	$rss.='</channel>';
	$rss.='</rss>';
	
	echo $rss;
?>