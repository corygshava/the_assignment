<?php
	// code fot reading the excel file
	
	$stuff = [];
	$output = json_encode($stuff);
	file_put_contents('data.json', $output);
?>