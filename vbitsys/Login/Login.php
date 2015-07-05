<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>





</head>

<body>

<?php


if(isset($_REQUEST['email']) && isset($_REQUEST['password']))
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

include("../Connection.php");

$query="SELECT * FROM user WHERE email='$email'";
$resource = mysql_query($query,$link);
$numrows = mysql_num_rows($resource);
$result=mysql_fetch_array($resource);


if ($numrows!=0)
{
	if($result[18]=="admin")
	{
		if ($result[5]==$password)
		{
			 $adminemail = $result['email']; 
			 $adminpassword = $result['password'];
		if($adminemail==$email && $adminpassword ==$password)
		{
			session_start();
	        $_SESSION['ses_email']=$email;
		    header("Location:../Admin/ControlPanel.php");
		}
		else 
		echo "Invalid";
		}
		else 
		echo "Wrong Credentials";
		
	}
	else
	{
	if ($result[5]==$password )
	{
		
			$dbemail = $result['email'];
			$dbpassword = $result['password'];
		if($dbemail==$email && $dbpassword==$password)
		{
		session_start();
	$_SESSION['ses_email']=$email;
	header("Location:../User/Profile.php");
		}
		else
		{
			echo "Invalid";
		}
	}
	else
	echo "Wrong Credentials";
	
	
}
}
else 
{
	echo "No user exists or invalid email/password";
}
?>
<span style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif"><a href="Login.html">Click here to Login</a>
</span>
</body>
</html>