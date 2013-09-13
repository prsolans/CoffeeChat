<html>
<head>
</head>
<body style="font-family: Helvetica, Arial, sans-serif;">
<?php	 	 		 		 	 	 		 		 		 		 		 	

include('../config/connect.php');

?>

<h1 style='margin:15px;'>Recruiting Coffee Chat Administration Panel</h1>
<p><a href='index.php'>Home</a></p>
<?php	 	 		 		 	 	 		 		 		 		 		 	



echo "<div style='clear: both;'>";
include 'manage_current_chats.php';
include 'create_new_chat.php';
include 'active_chat_dates.php';
echo "</div>";

?>
