<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Account</title>




<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="Style.css" rel="stylesheet" type="text/css">
</head>

<body style="padding-top: 70px">



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="../index.php">VBIT</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Updates</a></li>
        
        <li><a href="../Default/Contact.html">Contact</a></li>
        
        <li><center></center></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group"> </div>
</form>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../Logout/Logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<?php

session_start();
if(!isset($_SESSION['ses_email']))
{
	header("Location:../Login/Login.php");
}

else
{
$email=$_SESSION['ses_email'];

include("../Connection.php");
$query ="SELECT * FROM user where email='$email'";
$resource = mysql_query($query,$link);

$result=mysql_fetch_array($resource);

}
?>



<div class="container-fluid">
 
    <div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home1" data-toggle="tab" role="tab"><h4>Edit UserInfo</h4></a></li>
        </ul>
      <div id="tabContent1" class="tab-content">
        <div class="tab-pane fade in active" id="home1">
           <form name="edituser"  action="Update.php">
           <div>&nbsp;</div>
    <div class="row">
            <div class="col-md-6 col-xs-3" align="right"><strong>Firstname</strong><br>
            </div>
              <div class="col-md-6"><input name="fname" type="text" class="text-info" value="<?php echo $result[1] ?>"></div>
      </div>
            <div class="row">
            <div>&nbsp;</div>
            <div class="col-md-6 col-xs-3" align="right">Lastname</div>
              <div class="col-md-6"><input name="lname" type="text" class="text-info" value="<?php echo $result[2] ?>"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-3" align="right">Username</div>
              <div class="col-md-6"><input name="username" type="text" class="text-info" value="<?php echo $result[3] ?>"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-5" align="right">Email</div>
              <div class="col-md-6"><input name="email" type="text" class="text-info" value="<?php echo $result[4] ?>"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Password</div>
              <div class="col-md-6"><input name="password" type="text" class="text-info" value="<?php echo $result[5] ?>"></div>
            </div>
            <div>&nbsp;</div>
           <!-- <input type="submit" value="Update">-->
            
           <center> <button type="sumbit" class="btn btn-success">&nbsp;Update</button> </center>
           </form>
        </div>
        
      </div>
    </div>
  
</div>



<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
