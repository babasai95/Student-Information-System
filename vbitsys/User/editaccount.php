<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php

@session_start();

include("../Connection.php");

$query = " SELECT * from user where email='babasai95@gmail.com' ";

$resource = mysql_query($query,$link);

$result= mysql_fetch_array($resource);




?>

</body>
</html>