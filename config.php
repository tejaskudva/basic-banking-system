<?php
	$servername = 'localhost';
	$user = 'id17587041_blaugrana_bank_db';
	$pass = ')n9o(#K&^1N0g$|3';
	$dbname = 'id17587041_blaugrana_bank';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>
