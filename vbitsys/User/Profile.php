<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
history.pushState(null, null, 'Profile.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'Profile.php');});
</script>

<title>User Profile</title>
<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="Style.css" rel="stylesheet" type="text/css">
<link href="../Home/css/style.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="padding-top: 35px"  >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">VBIT</a></div>
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
        <li><a href="UserAccount.php">My Account</a></li>
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

$query = "SELECT * FROM user where email='$email'";

$resource=mysql_query($query,$link);
$result=mysql_fetch_array($resource);

}
?>
<div class="container-fluid" >
<div class="containerbody">
 <h2>Welcome <?php  echo strtoupper($result[1]) ." ". strtoupper($result[2])?></h2>
&nbsp;
    <div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home1" data-toggle="tab" role="tab">Profile</a></li>
        <li><a href="#paneTwo1" data-toggle="tab" role="tab">Other Info</a></li>
        <li><a href="#paneTwo2" data-toggle="tab" role="tab">Requests</a></li>
        
      </ul>
      <div id="tabContent1" class="tab-content">
        <div class="tab-pane fade in active" id="home1">
          <p><div class="container-fluid">
  <form id="form1" name="profile" method="post" action="Profile.php">
	<div>&nbsp;</div>
    <div class="row">
            <div class="col-md-6 col-xs-3" align="right" ><strong>Name</strong><br>
            </div>
              <div class="col-md-6"><input name="name" type="text" value="<?php echo $result[3]; ?>" disabled class="text-info"></div>
      </div>
            <div class="row">
            <div>&nbsp;</div>
            <div class="col-md-6 col-xs-3" align="right" >Branch</div>
              <div class="col-md-6"><input name="branch" type="text" value="<?php echo $result[7]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-3" align="right" >Roll No</div>
              <div class="col-md-6"><input name="rollno" type="text" value="<?php echo $result[8]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-5" align="right" >Father's Name</div>
              <div class="col-md-6"><input name="fathername" type="text" value="<?php echo $result[9]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-6" align="right">Father's Number</div>
              <div class="col-md-6"><input name="fathernumber" type="text" value="<?php echo $result[10]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-5" align="right">Address</div>
              <div class="col-md-6"><input name="address" type="text" value="<?php echo $result[11]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-5" align="right">Blood Group</div>
              <div class="col-md-6"><input name="bloodgroup" type="text" value="<?php echo $result[12]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row ">
            <div class="col-md-6 col-xs-6" align="right">10th Aggregate</div>
              <div class="col-md-6"><input name="aggregate10" type="text" value="<?php echo $result[13]; ?>" disabled="disabled" class="text-info"></div>
            </div>
            
         </form>
 <!--End of Form-->
  </div></p>
        </div>
        <div class="tab-pane fade" id="paneTwo1">
          <p><div class="container-fluid">
  <form id="otherinfo" name="profile" method="post" action="Profile.php">
	<div>&nbsp;</div>
    <div class="row">
            <div class="col-md-6 col-xs-3" align="right" >Attendance<br>
            </div>
              <div class="col-md-6"><input name="attendance" type="text" value="<?php echo $result[14]; ?>"  disabled class="text-info"></div>
      </div>
            <div class="row">
            <div>&nbsp;</div>
            <div class="col-md-6 col-xs-3" align="right" >1st Mid Total</div>
              <div class="col-md-6"><input name="mid1" type="text" value="<?php echo $result[15]; ?>"  disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-3" align="right">2nd Mid Total</div>
              <div class="col-md-6"><input name="mid2" type="text" value="<?php echo $result[16]; ?>"  disabled="disabled" class="text-info"></div>
            </div>
            <div>&nbsp;</div>
            <div class="row">
            <div class="col-md-6 col-xs-5" align="right">3rd Mid Total</div>
              <div class="col-md-6"><input name="mid3" type="text" value="<?php echo $result[17]; ?>"  disabled="disabled" class="text-info"></div>
            </div>
            
            
            
         </form>
 <!--End of Form-->
  </div></p>
        </div>
        <!-- Request Box -->
        <div class="tab-pane fade" id="paneTwo2">
          <div class="contact-section" id="contact">
				<div class="container">
				  <div class="contact-header">
						<h3>Request Us</h3>
						<span></span>
		  	<p>For any private info </p>
            &nbsp;
            <div class="container-fluid">
            
                    <!--<form class="container-fluid" name="requests" method="post" action="updaterequest.php">
            <div class="row">
                      <div class="col-md-12"><input style="height: 35px; width:300px; border-bottom:thick; " type="text" name="email" placeholder="E-Mail"></div>
                    </div>
                    &nbsp;
                    <div class="row">
                      <div class="col-md-12"><input style=" height:45px; width:400px; border-bottom:thick; " type="text" name="subject" placeholder="Subject"></div>
                    </div>
                    &nbsp;
                    <div class="row">
                      <div class="col-md-12"><textarea style=" height:80px; width:800px; border-bottom:thick; " name="message" placeholder="Message"></textarea></div>
                    </div>
                    &nbsp;
                    <div class="row">
                      <div class="col-md-12"><button type="submit" class="btn btn-success">Submit</button></div>
                    </div>
                    </form>-->
                    <div class="col-md-8 contact-grid1">
                                <form name="requests" method="post" action="updaterequest.php">
						
					<div class="text-field-email-1">
						
							<input  type="text" name="email" class="text contacttext" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						
					</div>
					<div class="clearfix"> </div>
					<div class="text-field-subject-2">
						
							<input type="text" name="subject" class="text contacttext" value="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						
					</div>
					<div class="text-field-area-">
						
							<textarea name="message" class="contacttextarea" value="REQUEST" onfocus="if(this.value == 'REQUEST') this.value='';" onblur="if(this.value == '') this.value='REQUEST';">REQUEST</textarea>
                         <center> <button type="submit" class="btn btn-success">Submit</button></center>
                        
					</div>		
                    </form>
								</div>
                    
                    </div>
</div>
                        
			</div>
		  </div>
        </div>
       
      </div>
    </div>
</div >
</div>
	
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<!-- <script src="../js/bootstrap.js" type="text/javascript"></script> -->
<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
