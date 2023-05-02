<?php 
	$mysqli = new mysqli("localhost","root","","weblaptop");

	// Check connection
	if ($mysqli -> connect_errno) {
	  echo " Ket noi MYSQli loi" . $mysqli -> connect_error;
	  exit();
}

 ?>