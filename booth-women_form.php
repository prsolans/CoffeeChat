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
	data: 'school=15&date='+document.getElementById("date").value+'&date2='+document.getElementById("date").name,
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
<h1>A.T. Kearney is excited to host a Women’s Networking & Wine Tasting Event on November 29th! Come learn about the experiences of various consultants within the firm, ask them your most pressing questions and enjoy some great wine. Spots are limited, so do not miss this opportunity to learn more about A.T. Kearney!</h1>
<p><strong>When:</strong> November 29th<br>
<strong>Where:</strong> Bin36 located at 339 N. Dearborn, Chicago, IL 60654<br>
<strong>Time:</strong> 5-7pm</p>

<p>Thank you for your interest in the Women’s Networking and Wine Tasting Event. Unfortunately, we are at capacity for this event. Please reach out to <a href='mailto:abe.thomas@atkearney.com?subject=Booth Coffee Chats'>Abe Thomas</a>, <a href='mailto:avani.sunder@atkearney.com?subject=Booth Coffee Chats'>Avani Sunder</a> or <a href='mailto:alissa.bernardi@atkearney.com?subject=Booth Coffee Chats'>Alissa Bernardi</a> for any questions you may have about the recruiting process or A.T. Kearney.</p>