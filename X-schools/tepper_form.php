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

<h1>Registration Form: Tepper School of Business 1st Year MBA Coffee Chat for A.T. Kearney Summer Associate Position</h1>
<script type="text/javascript" src="http://www.atkearney.com/images/test/coffeechat/jquery.js"></script>
<script type="text/javascript">
function ajaxTime() {
  $.ajax({
	type: 'GET',
	url: 'http://www.atkearney.com/images/test/coffeechat/time.php',
	data: 'school=11&date='+document.getElementById("date").value+'&date2='+document.getElementById("date").name,
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
<p>A.T. Kearney consultants will be at the Tepper School of Business on November 12th to answer your questions and share their consulting experiences in a less formal and more personal manner. All Coffee Chats will be held at the COC. </p>
<p>To sign up for a Coffee Chat, please answer the questions below. Note that the following eligibility requirements must apply to sign up for the Coffee Chat or be considered for a Summer Consultant position at A.T. Kearney: 
<ul>
  <li>Current 1st year Full-Time Student applying for Summer Internships
  <li>Current 1st year or 2nd year Flex-Time Students applying for Summer Internships

</ul>
</p>
<form action="http://www.atkearney.com/images/test/coffeeChat/tepper_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Coffee Chat Date</td>
    <td><?php	 	 		 		 	 	 		 		 		 		 		 	 
$datesQuery = 'SELECT id, slot_date FROM `joomla`.`x_rec_chatdates` WHERE schoolID = 11 AND active = 0 ORDER BY slot_date;';
$datesResult = mysql_query($datesQuery);

echo "<select name='date' id='date' onchange='ajaxTime()'>";
while($datesRow = mysql_fetch_array($datesResult)){
    echo "<option name='".$datesRow['slot_date']."' value='".$datesRow['id']."'>" .$datesRow['slot_date']. "</option>";    
}

echo "</select>";

?></td>
  </tr>
  <tr>
    <td class="table_label">Coffee Chat Time</td>
    <td><div id="chattime"></div>
    </select></td>
  </tr>
  <tr>
    <td class="table_label">First name</td>
    <td><input class="cf_inputbox required" align="left" maxlength="150" size="30" title="" id="text_2" name="first_name" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label">Name you prefer</td>
    <td><input class="cf_inputbox" maxlength="150" size="30" title="" id="text_7" name="preferred_name" type="text" /></td>
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
    <td class="table_label">Phone</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_10" name="phone" type="text" /></td>
  </tr>
<!--  <tr>
    <td class="table_label">Office preferences </td>
    <td><label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_14" size="1" title=""  name="1st_choice">
        <option value="1st choice">1st choice</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Washington">Washington D.C.</option>
        <option value="Canada">Canada</option>
        <option value="Dubai">Dubai</option>
        <option value="Iberia">Iberia (Spain and Portugal)</option>
        <option value="Benelux">Benelux (Belgium and the Netherlands)</option>
        <option value="Eastern_Europe">Eastern Europe</option>
        <option value="Brazil">Brazil</option>
        <option value="Mexico">Mexico</option>
        <option value="Korea">Korea</option>
        <option value="Japan">Japan</option>
      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_13" size="1" title=""  name="2nd_choice">
        <option value="2nd Choice">2nd Choice</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Washington">Washington D.C.</option>
        <option value="Canada">Canada</option>
        <option value="Dubai">Dubai</option>
        <option value="Iberia">Iberia (Spain and Portugal)</option>
        <option value="Benelux">Benelux (Belgium and the Netherlands)</option>
        <option value="Eastern_Europe">Eastern Europe</option>
        <option value="Brazil">Brazil</option>
        <option value="Mexico">Mexico</option>
        <option value="Korea">Korea</option>
        <option value="Japan">Japan</option>
      </select>
      <br/>
      <label class="cf_label" text-align="right" style="width: 250px;"></label>
      <select class="cf_inputbox" id="select_15" size="1" title=""  name="3rd_choice">
        <option value="3rd Choice">3rd Choice</option>
        <option value="Chicago">Chicago</option>
        <option value="Dallas">Dallas</option>
        <option value="New York">New York</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Southfield">Southfield (Detroit)</option>
        <option value="Washington">Washington D.C.</option>
        <option value="Canada">Canada</option>
        <option value="Dubai">Dubai</option>
        <option value="Iberia">Iberia (Spain and Portugal)</option>
        <option value="Benelux">Benelux (Belgium and the Netherlands)</option>
        <option value="Eastern_Europe">Eastern Europe</option>
        <option value="Brazil">Brazil</option>
        <option value="Mexico">Mexico</option>
        <option value="Korea">Korea</option>
        <option value="Japan">Japan</option>
    </select></td>
  </tr>-->
  <tr>
    <td class="table_label"> What industry did you work in prior to MBA?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_11" title="" cols="30" name="industry"></textarea></td>
  </tr>
  <tr>
    <td class="table_label"> What would you like to learn about A.T. Kearney?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="learn"></textarea></td>
  </tr>
<!--  <tr>
    <td class="table_label"> Would you like to join our mailing list for future events? </td>
    <td><input value="Yes" title="" class="radio validate-one-required" id="radio00" name="radio0" type="radio" />
      <label for="radio00" class="radio_label">Yes</label>
      <br />
      <input value="No" title="" class="radio validate-one-required" id="radio01" name="radio0" type="radio" />
      <label for="radio01" class="radio_label">No</label>
    <br /></td>
  </tr>
  <tr>
    <td class="table_label">Do you meet all of the eligibility requirements as stated above?</td>
    <td><input value="Yes" title="" class="radio validate-one-required" id="check10" name="check1[]" type="checkbox" />
      <label for="check10" class="check_label">Yes</label>
    <br /></td>
  </tr>
-->  <tr>
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
