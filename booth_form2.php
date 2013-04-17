<?php	 	 		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "__global";
	
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
<style type="text/css">
<!--
.table_label {
	text-align: right;
	padding-right: 11px;
	vertical-align: top;
}
-->
</style>
<div style="padding: 25px;">
<h1>Registration Form: Booth MBA1 Summer Associate Case Preparation</h1>
<script type="text/javascript" src="http://www.atkearney.com/recruiting/images/test/coffeechat/jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'http://www.atkearney.com/recruiting/images/test/coffeechat/time.php',
	data: 'school=1&date='+document.getElementById("date").value+'&date2='+document.getElementById("date").name,
	success: function(response) {
		var result = (typeof response.j) == 'string' ? eval('(' + response.j + ')') : response.j;				
		document.getElementById('chattime').innerHTML = response;
	}
  });
  
}

$(document).ready(function(){
						  

	ajaxTime();
	
	
});

</script>
A.T. Kearney is happy to invite you into our Chicago office for case preparation.  Please sign up below for a time for Friday, January 27th.  During your 30 minute time slot you will have a mock case given to you by an A.T. Kearney consultant to help you prepare for first round interviews on Monday, January 30th.  All case preparation sessions will occur at A.T. Kearney's office (222 W. Adams St.), on the 26th floor.</p>

<p>Please contact Megan Geelhoed (megan.geelhoed@atkearney.com) or Kevin Phillippi (kevin.phillippi@atkearney.com) with any questions or concerns. </p>
<form action="http://www.atkearney.com/recruiting/images/test/coffeeChat/booth_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Case Prep Date</td>
    <td><?php	 	 		 		 	 	 		 		 		 		 		 	 
$datesQuery = 'SELECT id, slot_date FROM `__global`.`x_rec_chatdates` WHERE schoolID = 1 AND active = 0 ORDER BY slot_date';
$datesResult = mysql_query($datesQuery);

while($countRow = mysql_fetch_array($datesResult)) {

echo "<select name='date' id='date' onchange='ajaxTime()'>";
while($datesRow = mysql_fetch_array($datesResult)){
    echo "<option name='".$datesRow['slot_date']."' value='".$datesRow['id']."'>" .$datesRow['slot_date']. "</option>";    
}
echo "</select>";
}
//echo $confirmedDate;

//echo "<input type='hidden' name='confirmedDate' value='".$confirmedDate."'>";
?></td>
  </tr>
  <tr>
    <td class="table_label">Case Prep Time</td>
    <td><div id="chattime"></div>
    </select></td>
  </tr>
  <tr>
    <td class="table_label">First name</td>
    <td><input class="cf_inputbox required" align="left" maxlength="150" size="30" title="" id="text_2" name="first_name" type="text" /></td>
  </tr>
   <tr>
    <td class="table_label">Last name</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_8" name="last_name" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label">Email</td>
    <td><input class="cf_inputbox required validate-email" maxlength="150" size="30" title="" id="text_9" name="email" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label">Phone</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_10" name="phone" type="text" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
</div>