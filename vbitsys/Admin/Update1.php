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

$name=$_REQUEST['name'];
$branch=$_REQUEST['branch'];
$rollno=$_REQUEST['rollno'];
$fathername=$_REQUEST['fathername'];
$fathernumber=$_REQUEST['fathernumber'];
$address=$_REQUEST['address'];
$bloodgroup=$_REQUEST['bloodgroup'];
$aggregate10=$_REQUEST['aggregate10'];


include("../Connection.php");

$query="UPDATE user SET username='".$name."', branch= '".$branch."', rollno='".$rollno."', fathername='".$fathername."' , fathernumber = '".$fathernumber."' , address = '".$address."' , bloodgroup = '".$bloodgroup."' , aggregate10 = '".$aggregate10."' WHERE email='$email' ";


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