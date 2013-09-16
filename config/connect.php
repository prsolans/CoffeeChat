<?php	
/* 	ATK SERVER  		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "eventreg";
	$baseurl = "http://www.atkearney.com.mx/registration"
*/

/* LOCAL SERVER VARIABLE */
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "eventreg";
	$baseurl = "http://localhost:8888/atkearney";

    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}
?>