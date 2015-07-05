<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>post upload</title>
</head>

<body>
<?php
$title=$_REQUEST['title'];
$post=$_REQUEST['post'];
$imagepath=$_REQUEST['imagefile'];

session_start();
include("../Connection.php");

$query="UPDATE posts set title= '".$title."', post = '".$post."', images = '".$imagepath."' WHERE No=1; ";


 if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while updating the Post, Please try again!");}
		  else
		 {
		  
		  header("Location:ControlPanel.php");
		  
		  }


?>





</body>
</html>