<?php                                     

include('../config/connect.php');

if(isset($_GET['flag'])){
  $name = $_GET['name'];
  $image = $_GET['image'];
  $contactname = $_GET['contactname'];
  $contactemail = $_GET['contactemail'];
  $liveurl = $_GET['formurl'];

  $query = "INSERT INTO `".$database."`.`School` VALUES ('', '".$name."', '".$image."', '".$contactname."', '".$contactemail."', '".$liveurl."');";
  mysql_query($query); 
  header("Location: ".$baseurl."/admin/index.php?alert=1");

}
else{
  $id = $_GET['id'];
  $name = $_GET['name'];
  $image = $_GET['image'];
  $contactname = $_GET['contactname'];
  $contactemail = $_GET['contactemail'];
  $liveurl = $_GET['formurl'];

  $query = "UPDATE `".$database."`.`School` SET name='".$name."', image='".$image."', contactname='".$contactname."', contactemail='".$contactemail."', formurl='".$liveurl."' WHERE id='".$id."';";
  //echo $query;
  //echo mysql_query($query) ? OK : FAIL;
  mysql_query($query);
    
 
  header("Location: ".$baseurl."/admin/edit_school.php?school=".$id."&alert=1");
}
?>
