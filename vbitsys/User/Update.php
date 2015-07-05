<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
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
	header("Location:../Login/Login.php");
}

else
{
$email=$_SESSION['ses_email'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

include("../Connection.php");

$query="UPDATE user SET Fname='".$fname."', Lname= '".$lname."', username='".$username."', email='".$email."' , password = '".$password."' WHERE email='$email' ";


		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  
		  header("Location:Profile.php");
		  
		  }
		  
}


?>






</body>
</html>