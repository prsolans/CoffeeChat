<?php	 	 		 		 	 	 		 		 		 		 		 	
include('connect.php');

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
	data: 'school=2&date='+document.getElementById("date").value+'&date2='+document.getElementById("date").name,
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
<p>A.T. Kearney consultants will be at Le Monde (2885 Broadway) on Friday, October 4 and Friday, November 8 to answer your questions and share their consulting experiences in a less formal and more personal manner.</p>
<p>To sign up for a Coffee Chat, please answer the questions below and select an available time slot. Note that you must meet the following eligibility requirements to sign up for the Coffee Chat or be considered for a Summer Associate position at A.T. Kearney:</p> 
<ul>
<li>Currently enrolled in the Full Time MBA program</li>
<li>Graduating from the Full Time MBA program in May 2015</li>
<li>Able to start the summer program at A.T. Kearney in May or June 2014</li>
</ul>
<p>Questions that all applicants should answer are:</p> 
<ul>
<li>What industry did you work in prior to your MBA?</li>
<li>What would you like to learn about A.T. Kearney?</li>
<li>Which A.T. Kearney office(s) are you interested in learning more about?</li>
</ul>
<p>You can also learn more about us by reaching out to members of our A.T. Kearney Columbia Recruiting team or visiting us at <a href="www.atkearneyprospect.com" target="_blank">www.atkearneyprospect.com</a></p>
<p><strong>Patrick Haischer</strong> (04&#39;) &#124; School Officer &#124; <a href="mailto:patrick.haischer@atkearney.com">patrick.haischer@atkearney.com<br>
</a><strong>Adam Coe</strong> (11&#39;) &#124; School Manager &#124; <a href="mailto:adam.coe@atkearney.com">adam.coe@atkearney.com<br>
</a><strong>Jodie Kassack</strong> (12&#39;) &#124; Global Prize Lead &#124; <a href="mailto:jodie.kassack@atkearney.com">jodie.kassack@atkearney.com<br>
</a><strong>Catherine Ransone</strong> (12&#39;) &#124; MBA Class Manager &#124; <a href="mailto:catherine.ransone@atkearney.com">catherine.ransone@atkearney.com<br>
</a><strong>Katrin Korban</strong> (13&#39;) &#124; MBA Class Manager &#124; <a href="mailto:katrin.korban@atkearney.com">katrin.korban@atkearney.com</a>
<p>If you have any questions regarding Coffee Chats, please contact <a href="mailto:catherine.ransone@atkearney.com">catherine.ransone@atkearney.com</a> or <a href="mailto:katrin.korban@atkearney.com">katrin.korban@atkearney.com</a>.</p>
<form action="columbia_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Coffee Chat Date</td>
    <td><?php	 	 		 		 	 	 		 		 		 		 		 	 
$datesQuery = 'SELECT id, slot_date FROM `__global`.`x_rec_chatdates` WHERE schoolID = 2 AND active = 0 ORDER BY slot_date;';
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
    <td class="table_label">Coffee Chat Time</td>
    <td><div id="chattime"></div>
    </select></td>
  </tr>
  <tr>
    <td class="table_label">First name</td>
    <td><input class="cf_inputbox required" align="left" maxlength="150" size="30" title="" id="text_2" name="first_name" type="text" /></td>
  </tr>
<!--  <tr>
    <td class="table_label">Name you prefer</td>
    <td><input class="cf_inputbox" maxlength="150" size="30" title="" id="text_7" name="preferred_name" type="text" /></td>
  </tr>
-->  <tr>
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
    <td class="table_label">What industry did you work in prior to MBA?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="industry"></textarea></td>
  </tr>
  <tr>
    <td class="table_label">What would you like to learn about A.T. Kearney?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="learn"></textarea></td>
  </tr>
  <tr>
    <td class="table_label">Which A.T. Kearney office(s) are you interested in learning more about? </td>
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
    <td></td>
    <td><input value="Submit" name="button_18" type="submit" /></td>
  </tr>
</table>
