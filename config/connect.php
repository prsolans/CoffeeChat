<?php	
/* 	ATK SERVER  		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "__global";
	$baseurl = "http://www.atkearney.com.mx/coffeeChat/CoffeeChat"
*/

/* LOCAL SERVER VARIABLE */
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "registration";
	$baseurl = "http://localhost:8888/atkearney/admin/";

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