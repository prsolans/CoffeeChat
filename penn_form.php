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
	data: 'school=13&date=182&date2=September 21, 2012',
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
<p>A.T. Kearney consultants will be in Philadelphia on September 21 for Coffee Chats. We look forward to sharing with you our consulting experiences at A.T. Kearney and answering your questions about the interview process!</p>
<p>To sign up for a Coffee Chat, please answer the questions below. Note that the following eligibility requirements must apply to sign up for the Coffee Chat or be considered for a full time position at A.T. Kearney: 
<ul>
  <li>Currently enrolled in the University of Pennsylvania</li>
  <li>Graduating from Penn in Fall 2012/ Spring 2013</li>

</ul>
</p>
<form action="penn_submit.php" name="coffeeChatBooth">
<table>
  <tr>
    <td class="table_label">Coffee Chat Date</td>
    <td>September 21, 2012</td>
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
    <td class="table_label"> Email</td>
    <td><input class="cf_inputbox required validate-email" maxlength="150" size="30" title="" id="text_9" name="email" type="text" /></td>
  </tr>
  <tr>
    <td class="table_label">Phone</td>
    <td><input class="cf_inputbox required" maxlength="150" size="30" title="" id="text_10" name="phone" type="text" /></td>
  </tr>
  <tr>
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
   
    </select></td>
  </tr>
  <tr>
    <td class="table_label"> What would you like to learn about A.T. Kearney?</td>
    <td><textarea class="cf_inputbox" rows="3" id="text_12" title="" cols="30" name="learn"></textarea></td>
  </tr>
  <tr>
    <td class="table_label"> Would you like to join our mailing list for future events? </td>
    <td><input value="Yes" title="" class="radio validate-one-required" id="radio00" name="radio0" type="radio" />
      <label for="radio00" class="radio_label">Yes</label>
      <br />
      <input value="No" title="" class="radio validate-one-required" id="radio01" name="radio0" type="radio" />
      <label for="radio01" class="radio_label">No</label>
    <br /></td>
  </tr>
<!--  <tr>
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
