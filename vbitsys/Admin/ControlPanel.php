<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
history.pushState(null, null, 'ControlPanel.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'ControlPanel.php');});
</script>
<title>Admin Panel</title>

<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link href="../css/custom.css" rel="stylesheet" type="text/css">
<link href="../User/Style.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->





</head>



<body style="padding-top: 35px" >

<?php
session_start();
if(!isset($_SESSION['ses_email']))
{
	header("Location:../Login/Login.php");
}
else
{
	include("../Connection.php");
	
	 $post1 = "SELECT * FROM posts WHERE No=1"; 
	   $post2 = "SELECT * FROM posts WHERE No=2"; 
	   $post3 = "SELECT * FROM posts WHERE No=3"; 
	   
	   $exe1 = mysql_query($post1,$link); 
	   $exe2 = mysql_query($post2,$link);
	   $exe3 = mysql_query($post3,$link);
	   
	   $result1 = mysql_fetch_array($exe1);
	   $result2 = mysql_fetch_array($exe2);
	   $result3 = mysql_fetch_array($exe3);
	?>

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
        <li><a href="#">Blog Posts</a></li>
        
        
        <li><center></center></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group"> </div>
</form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="AdminAccount.php">My Account</a></li>
        <li><a href="../Logout/Logout.php">Logout</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
&nbsp;
  <div class="containerbody">
    <div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home1" data-toggle="tab" role="tab">Edit User</a></li>
        <li><a href="#paneTwo1" data-toggle="tab" role="tab">Manage Posts</a></li>
        <li><a href="#paneTwo2" data-toggle="tab" role="tab">Others</a></li>
        
      </ul>
      <div id="tabContent1" class="tab-content">
        <div class="tab-pane fade in active" id="home1">
         <p>&nbsp;</p>
        
           
          <div class="container-fluid">
          &nbsp;
			<form name="buttons" action="EditUser.php" method="post" >
				<div class="row" align="center">
                <div class="col-md-12"><input type="email" name="newemail" placeholder="Enter User Email"></div>
              </div>
              &nbsp;
              <div class="row" align="center">
                <div class="col-md-12">
                <button type="submit" class="btn btn-danger" >Modify</button>
                <button type="button" class="btn btn-danger" onClick=" <?php $deleteuser=$_POST['newemail'];
				 $delete = "DELETE FROM user WHERE email='$deleteuser'";
				if(!mysql_query($delete,$link))
				{
				echo "Invalid";
				}
				else
				{
				echo "User Deleted Successfully";
				}
				 ?>">Delete</button>
                </div>
              </div>
</form>
</div>
</center>
          
          
  
  
        </div>
        <div class="tab-pane fade" id="paneTwo1">
        
        &nbsp;
        <div role="tabpanel">
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#postno1" data-toggle="tab" role="tab">Post 1</a></li>
    <li><a href="#postno2" data-toggle="tab" role="tab">Post 2 </a></li>
    <li><a href="#postno3" data-toggle="tab" role="tab">Post 3</a></li>
  </ul>
  <div id="tabContent1" class="tab-content">
    <div class="tab-pane fade in active" id="postno1">
    &nbsp;
      <div class="container-fluid" align="center">
        <div class="col-md-8 contact-grid1" align="center">
        <form class="table-responsive" name="posts" method="post" action="updatepost1.php">
        
        <div class="text-field-email-1">
						
							<input  type="text" name="title" class="text contacttext" value="<?php echo $result1[1];?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php $result1[1]; ?>';}">
						
			</div>
			<div class="clearfix"> </div>
					
					<div class="text-field-area-">
						
							<textarea name="post" class="contacttextarea" value="<?php echo $result1[2];?>" onfocus="if(this.value == '<?php $result1[2]; ?>') this.value='';" onblur="if(this.value == '') this.value='<?php $result1[2]; ?>';"></textarea>
                            
                    </div>
                     
                     <input type="file" name="imagefile" placeholder="max size: 2mb">
                     &nbsp;
            <center> <button type="submit" class="btn btn-success">Upload Post</button></center>
       </form>      
       </div>
      
      </div>
    </div>
    <div class="tab-pane fade" id="postno2">
      &nbsp;
      <div class="container-fluid" align="center">
        <div class="col-md-8 contact-grid1" align="center">
        <form class="table-responsive" name="posts" method="post" action="updatepost2.php">
        
        <div class="text-field-email-1">
						
							<input  type="text" name="title" class="text contacttext" value="<?php echo $result2[1];?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php $result2[1]; ?>';}">
						
			</div>
			<div class="clearfix"> </div>
					
					<div class="text-field-area-">
						
							<textarea name="post" class="contacttextarea" value="<?php echo $result2[2];?>" onfocus="if(this.value == '<?php $result2[2]; ?>') this.value='';" onblur="if(this.value == '') this.value='<?php $result2[2]; ?>';"></textarea>
                            
            </div>
                     
                     <input type="file" name="imagefile" placeholder="max size: 2mb">
                     &nbsp;
            <center> <button type="submit" class="btn btn-success">Upload Post</button></center>
       </form>      
       </div>
      
      </div>
    </div>
    <div class="tab-pane fade" id="postno3">
      &nbsp;
      <div class="container-fluid" align="center">
        <div class="col-md-8 contact-grid1" align="center">
        <form class="table-responsive" name="posts" method="post" action="updatepost3.php">
        
        <div class="text-field-email-1">
						
							<input  type="text" name="title" class="text contacttext" value="<?php echo $result3[1];?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php $result3[1]; ?>';}">
						
			</div>
			<div class="clearfix"> </div>
					
					<div class="text-field-area-">
						
							<textarea name="post" class="contacttextarea" value="<?php echo $result3[2];?>" onfocus="if(this.value == '<?php $result3[2]; ?>') this.value='';" onblur="if(this.value == '') this.value='<?php $result3[2]; ?>';"></textarea>
                            
                    </div>
                     
                     <input type="file" name="imagefile" placeholder="max size: 2mb">
                     &nbsp;
            <center> <button type="submit" class="btn btn-success">Upload Post</button></center>
       </form>      
       </div>
      
      </div>
    </div>
    
  </div>
</div>
          
        </div>
        <div class="tab-pane fade" id="paneTwo2">
          <p>This section is yet to be added</p>
        </div>
       
      </div>
    </div>
  </div >
  

  </div>
  
  
  

	
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<!-- <script src="../js/bootstrap.js" type="text/javascript"></script> -->
<script src="../js/bootstrap-3.3.4.js" type="text/javascript"></script>
<?php } ?>
</body>
</html>
