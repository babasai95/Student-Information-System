<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit User</title>



<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../User/Style.css" rel="stylesheet" type="text/css">
</head>

<body style="padding-top: 70px" >



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="../Admin/ControlPanel.php">VBIT</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Updates</a></li>
        
        <li><a href="#">Blog Posts</a></li>
        
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

$newemail=$_REQUEST['newemail'];


include("../Connection.php");

$query="SELECT * FROM user WHERE email='$newemail'";

$resource = mysql_query($query,$link);

$result= mysql_fetch_array($resource);

?>

<div class="container-fluid">
<div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home1" data-toggle="tab" role="tab">Edit User Profile</a></li>
        <li><a href="#paneTwo1" data-toggle="tab" role="tab">User Academics</a></li>
        </ul>
      <div id="tabContent1" class="tab-content">
        <div class="tab-pane fade in active" id="home1" align="center">
         <p>&nbsp;</p>
         <p><div class="container-fluid" id="edit">
  <form id="form1" name="profile" method="post" action="Update1.php">
	<div>&nbsp;</div>
    <input type="hidden" name="sessionvar" value="<?php $newemail ?>">
    <div class="row">
            <div class="col-md-6 col-xs-6" align="right"><strong>Name</strong><br>
            </div>
              <div class="col-md-6" align="left"><input name="name" type="text" value="<?php echo $result[3] ?>" class="text-info"></div>
    </div>
            <div class="row">
            <div>&nbsp;</div>
            <div class="col-md-6 col-xs-6" align="right">Branch</div>
              <div class="col-md-6" align="left"><input name="branch" type="text" value="<?php echo $result[7] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Roll No</div>
              <div class="col-md-6" align="left"><input name="rollno" type="text" value="<?php echo $result[8] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Father's Name</div>
              <div class="col-md-6" align="left"><input name="fathername" type="text" value="<?php echo $result[9] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Father's Number</div>
              <div class="col-md-6" align="left"><input name="fathernumber" type="text" value="<?php echo $result[10] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Address</div>
              <div class="col-md-6" align="left"><input name="address" type="text" value="<?php echo $result[11] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Blood Group</div>
              <div class="col-md-6" align="left"><input name="bloodgroup" type="text" value="<?php echo $result[12] ?>" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
    <div class="row">
            <div class="col-md-6 col-xs-6" align="right">10th Aggregate</div>
              <div class="col-md-6" align="left"><input name="aggregate10" type="text" value="<?php echo $result[13] ?>" class="text-info"></div>
            </div>
            &nbsp;
        <center> <button type="submit" class="btn btn-success">Update</button></center>
  </form>
 
  </div></p>
          </div>
        <div class="tab-pane fade" id="paneTwo1" align="center">
        <p><div class="container-fluid">
  <form id="otherinfo" name="profile" method="post" action="Update2.php">
	<div>&nbsp;</div>
    <input type="hidden" name="sessionvar" value="<?php $newemail ?>">
    <div class="row">
            <div class="col-md-6 col-xs-3" align="right">Attendance<br>
            </div>
              <div class="col-md-6" align="left"><input name="attendance" type="text" value="<?php echo $result[14]; ?>"   class="text-info"></div>
      </div>
            <div class="row">
            <div>&nbsp;</div>
            <div class="col-md-6 col-xs-3" align="right">1st Mid Total</div>
              <div class="col-md-6" align="left"><input name="mid1" type="text" value="<?php echo $result[15]; ?>"   class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-3" align="right">2nd Mid Total</div>
              <div class="col-md-6" align="left"><input name="mid2" type="text" value="<?php echo $result[16]; ?>"   class="text-info"></div>
            </div>
            <div>&nbsp;</div>
          <div class="row">
            <div class="col-md-6 col-xs-3" align="right">3rd Mid Total</div>
              <div class="col-md-6" align="left"><input name="mid3" type="text" value="<?php echo $result[17]; ?>"  class="text-info"></div>
            </div>
            &nbsp;
         <center> <button type="submit" class="btn btn-success">Update</button></center>
  </form>
 <!--End of Form-->
  </div></p>
        </div>
       
      </div>
    </div>
    </div>

<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
