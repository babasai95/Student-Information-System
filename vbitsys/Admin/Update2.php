<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registraton Successfull</title>
<script type="text/javascript">
   $(document).ready(function() {
   $("#regform").validate();
   });
</script>


</head>

<body>
<?php

session_start();
if(!isset($_SESSION['ses_email']))
{
	header("Location:../Admin/ControlPanel.php");
}

else
{
$email=$_REQUEST['sessionvar'];

$attendance=$_REQUEST['attendance'];
$mid1=$_REQUEST['mid1'];
$mid2=$_REQUEST['mid2'];
$mid3=$_REQUEST['mid3'];


include("../Connection.php");

$query="UPDATE user SET attendance='".$attendance."', mid1= '".$mid1."', mid2='".$mid2."', mid3='".$mid3."'  WHERE email='$email' ";


		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			header("Location:../Admin/ControlPanel.php"); 
		 
		  
		  }
}

?>






</body>
</html>