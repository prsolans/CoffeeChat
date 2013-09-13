<?php	 	 		 		 	 	 		 		 		 		 		 	
include('connect.php');

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

<h1>Registration Form: Ross MBA1 Office Hours</h1>
<script type="text/javascript" src="http://www.atkearney.com/images/test/coffeechat/jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'http://www.atkearney.com/images/test/coffeechat/time.php',
	data: 'school=9&date='+document.getElementById("date").value+'&date2='+document.getElementById("date").name,
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
<p>A.T. Kearney consultants will be at Ross on Thursday, 3 October and Friday, 4 October 2013 to answer your questions and share our consulting experiences.  There may be two students per session and specific room assignments will be communicated prior to the event.  Please complete the information below to sign-up for a time slot.  This event is for First Year MBA students interested in our Summer Associate program.</p>

<!-- <P><strong>No slots are currently available.</strong> For more information, please contact the school team at <a href="mailto:RossMBARecruiting@atkearney.com">RossMBARecruiting@atkearney.com</a>.</P>
-->

<p>To sign up for office hours, please fill in the form below.
</p>
<form action="http://www.atkearney.com/images/test/coffeeChat/ross_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Available Times</td>
    <td>
	<?php	 	 		 		 	 	 		 		 		 		 		 	 
	/*
$datesQuery = 'SELECT id, slot_time FROM `joomla`.`x_rec_9_times` WHERE date = 122 AND slots_total > slots_filled ORDER BY id;';
$datesResult = mysql_query($datesQuery);

echo "<select name='time' id='time' onchange='ajaxTime()'>";
while($datesRow = mysql_fetch_array($datesResult)){
    echo "<option name='".$datesRow['slot_time']."' value='".$datesRow['id']."'>" .$datesRow['slot_time']. "</option>";    
}

echo "</select>";

//echo $confirmedDate;

//echo "<input type='hidden' name='confirmedDate' value='".$confirmedDate."'>";

*/
?>
</td>
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
    <td class="table_label"> Email</td>
    <td><input class="cf_inputbox required validate-email" maxlength="150" size="30" title="" id="text_9" name="email" type="text" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
