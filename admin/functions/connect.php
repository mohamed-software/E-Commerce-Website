<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'training_project 2');

$conn = new mysqli(
				HOST,
				USER,
				PASS,
				DBNAME
		);

// arabic 
$conn -> set_charset('utf8');

if(!$conn){
	echo $conn -> connect_error ;
}
