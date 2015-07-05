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

$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

include("../Connection.php");

$query="INSERT INTO user (Fname, Lname, username, email, password) values('".$fname."', '".$lname."', '".$username."', '".$email."' , '".$password."')";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
			
		  header("Location:../Login/Login.html");
		  
		  }


?>






</body>
</html>