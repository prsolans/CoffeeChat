<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>

<h1 style='margin:15px;'>Recruiting Coffee Chat Administration Panel</h1>
<ul>
<li><a href="coffeeChat_admin.php?school=1">Booth School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=2">Columbia School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=6">Kellogg School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=9">Ross School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=10">Rotman School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=11">Tepper School of Business</a></li>
<li><a href="coffeeChat_admin.php?school=12">Wharton School of Business</a></li>

</ul>
