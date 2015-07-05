<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Request</title>
</head>

<body>
<?php

$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];


include("../Connection.php");

$query="INSERT INTO requests (email, subject, message) values('".$email."', '".$subject."', '".$message."')";


		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  
		header("Location:Profile.php");
		  }


?>






</body>
</html>