<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
</head>

<body>
<?php

$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];


include("../Connection.php");

$query="INSERT INTO contact (email, subject, message) values('".$email."', '".$subject."', '".$message."')";


		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occurred while saving the record, Please try again!");}
		  else
		 {
		  
		echo htmlentities("Contact details sent successfully. We will contact you soon.");
		  
		  }
?>

</body>
</html>