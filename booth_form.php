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
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, table
{
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;}
</style>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'time.php',
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
<p><strong>Location:</strong> <br/>A.T. Kearney's Chicago Office <br/><a href="https://maps.google.com/maps?q=222+west+adams+chicago+il&ie=UTF-8&hq=&hnear=0x880e2cbec103f27b:0x13df44a5e61123bd,222+W+Adams+St,+Chicago,+IL+60606&gl=us&ei=eXv4UM-dIcaP2gWsuYDgAw&ved=0CDsQ8gEwAQ" target="_blank">222 W Adams Street<br/>Chicago IL</a></p>
<p>Please bring a form of ID for building security to get a temporary access card to get to our office on the 26th floor. Please check in when you get to the 26th floor lobby.

<p><strong>Register:</strong><br/>
<form action="/coffeeChat/booth_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Date</td>
    <td><?php	 	 		 		 	 	 		 		 		 		 		 	 
$datesQuery = 'SELECT id, slot_date FROM `__global`.`x_rec_chatdates` WHERE schoolID = 1 AND active = 0 ORDER BY slot_date;';
$datesResult = mysql_query($datesQuery);

echo "<select name='date' id='date' onchange='ajaxTime()'>";
while($datesRow = mysql_fetch_array($datesResult)){
    echo "<option name='".$datesRow['slot_date']."' value='".$datesRow['id']."'>" .$datesRow['slot_date']. "</option>";    
}

echo "</select>";

//echo $confirmedDate;

//echo "<input type='hidden' name='confirmedDate' value='".$confirmedDate."'>";
?></td>
  </tr>
  <tr>
    <td class="table_label">Time</td>
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
 <!-- <tr>
    <td class="table_label">Office preferences </td>
    <td><label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_14" size="1" title=""  name="1st_choice">
        <option value="1st choice">1st choice</option>
               
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
        <option value="International">International</option>
      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_13" size="1" title=""  name="2nd_choice">
        <option value="2nd Choice">2nd Choice</option>
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
        <option value="International">International</option>
      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_15" size="1" title=""  name="3rd_choice">
        <option value="3rd Choice">3rd Choice</option>
        <option value="Atlanta">Atlanta</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Toronto">Toronto</option>
        <option value="Washington">Washington D.C.</option>
				<option value="International">International</option>
    </select></td>
  </tr>

<tr>
    <td class="table_label">   What industry did you work in prior to MBA?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="industry"></textarea></td>
  </tr>
  <tr>
    <td class="table_label"> What would you like to learn about A.T. Kearney?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="learn"></textarea></td>
  </tr>
--> <tr>
 
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
<p><strong>For any questions, contact:</strong><br/><a href='mailto:Avani.Sunder@atkearney.com?subject=Chicago Booth Case Prep'>Avani Sunder</a>, <a href='mailto:abe.thomas@atkearney.com?subject=Chicago Booth Case Prep'>Abe Thomas</a> or <a href='mailto:alissa.bernardi@atkearney.com?subject=Chicago Booth Case Prep'>Alissa Bernardi</a>