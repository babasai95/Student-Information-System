<!DOCTYPE HTML>
<html>
<head>
<title>HomePage</title>
<link href="Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Expire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<script src="Home/js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="Home/css/flexslider.css" type="text/css" media="screen" />
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="Home/js/move-top.js"></script>
<script type="text/javascript" src="Home/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<link rel="stylesheet" href="Home/css/swipebox.css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script src="Home/js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
</script>
 <script src="Home/js/jquery.wmuSlider.js"></script> 
<script>
       			$('.example1').wmuSlider();         
   		     </script> 	
             
            
             
             
</head>
<body >
	<div class="header">
		<div class="container">
			<div class="top-header">
			<div class="logo">
				<a href="index.php"><img src="Vbit Logo.png" width="82"></a>
				</div>
				<div class="top-menu">
					<span class="menu"> </span>
					<ul>
						<li><a href="index.php">home</a></li>
						<li><a href="#contact">contact</a></li>
                        <li>&nbsp;</li>
						<li><a href="Register/Register.html">Register</a></li>
						<li><a href="Login/Login.html">Login</a></li>
					     
					</ul>
		 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			</div>
					</div>
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="slider-info">
								<h3>VBIT SYS</h3>
							<p>Welcome to VBIT Student Information System</p>
				   		<div class="buttons">
				   		<a href="#" class="button">Broswe</a>
		                <a href="Login/Login.html" class="button1">Login</a>

	          </div>
									</div>
								</li>
								<li>
									<div class="slider-info">
									<h3>Stack</h3>
				   	<p>One place to get to know all the college stuff</p>
				   		<div class="buttons">
				   		<a href="Register/Register.html" class="button">Register</a>
		                <a href="Login/Login.html" class="button1">Login</a>

	          	</div>
				</div>
								</li>
								<li>	
								<div class="slider-info">
									<h3>Request</h3>
							<p>Want to know some private info. Dont worry sumbit a request and you are done.</p>
				   		<div class="buttons">
				   		<a href="#" class="button">Request</a>
		                

	          </div>
									</div>
								</li>
							</ul>
						</div>
                        <!-- FlexSlider -->
							  <script defer src="Home/js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
					</section>
						
	<!-- slider -->
			</div>
		
		</div>
        
      <?php 
	  
	  include("Connection.php");
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
        
		<div class="content">
<div class="blog-section">
	  <div class="container">
						<div class="blog-header">
							<h3>Latest Posts</h3>
							<span> </span>
							<p>All the updates about new events and other academic information.</p>
							</div>
							<div class="blog-grids">
								<div class="col-md-4 blog">
								<img src="Home/images/Avk-Logo.png">
										<div class="blog12">
									<a href="#" class="just"><?php  echo $result1[1]?></a>
									<div class="icon9"> </div>
									<p class="text"><?php  echo $result1[2]?></p>
									<a href="#" class="button3">read more</a>
								</div>
								</div>
								<div class="col-md-4 blog">
									<img src="Home/images/VBITSB.png">
									<div class="blog12">
									<a href="#" class="just"><?php  echo $result2[1]?></a>
									<div class="icon9"> </div>
									<p class="text"><?php  echo $result2[2]?> </p>
									<a href="#" class="button3">read more</a>
								</div>
								</div>
								<div class="col-md-4 blog">
									<img src="Home/images/WIE.png">
									<div class="blog12">
									<a href="#" class="just"><?php  echo $result3[1]?></a>
									<div class="icon9"> </div>
									<p class="text"><?php  echo $result3[2]?>.</p>
									<a href="#" class="button3">read more</a>
								</div>
								</div>
								<div class="clearfix"> </div>
						</div>
					</div>

</div>

			<div class="contact-section" id="contact">
				<div class="container">
					<div class="contact-header">
						<h3>Contact Us</h3>
						<span></span>
		  	<p>For any queries and requests</p>
						</div>
						<div class="contact-grids">
							<div class="col-md-4 contact-grid">
								<ul>
									<li><i class="indicat"></i></li>
														<li><p>Aushapur</p>
															<p>Ghatkesar</p>
															<p>Hyderabad</p></li>
												</ul>
												<ul>
													<li><i class="message"></i></li>
													<li><a href="mail-to:bcdefg@hijs.dfh">admin@vbitsys.com</a></li>
														
												</ul>
												<ul>
													<li><i class="smartphone"></i></li>
                                                        <li><p>Phone: +91 8801000215</p>
															</li>    
												</ul>
                                                

								</div>
								<div class="col-md-8 contact-grid1">
                                <form name="contact" method="post" action="Admin/contact.php">
						
					<div class="text-field-email-1">
						
							<input  type="text" name="email" class="text contacttext" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						
					</div>
					<div class="clearfix"> </div>
					<div class="text-field-subject-2">
						
							<input type="text" name="subject" class="text contacttext" value="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						
					</div>
					<div class="text-field-area-">
						
							<textarea name="message" class="contacttextarea" value="MESSAGE:" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">Message</textarea>
                         <center> <button type="submit" class="btn btn-success">Submit</button></center>
                        
					</div>		
                    </form>
								</div>
							<div class="clearfix"> </div>
							</div>
					</div>
					</div>
				
					</div>
		<div class="footer-section">
			<div class="container">
				<div class="col-md-4 social-icons footer-grid">
		<a href="#"><i class="icon1"></i></a>
			<a href="#"><i class="icon2"></i></a>
			<a href="#"><i class="icon3"></i></a>
			<a href="#"><i class="icon4"></i></a>
		</div>
			<div class="col-md-4 logo2 footer-grid">
		<div class="logo1">
			<a href="index.php"><img src="Vbit Logo.png" width="77" height="80"></a>
		</div>
		</div>
		<div class="col-md-4 footer-right footer-grid">
			
				<p> Copyright &copy;VBIT  All rights  Reserved | Developed by<a href="http://facebook.com/babasai95" target="target_blank">Baba Sai</a></p>
			
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


			</div>
			<div class="clearfix"></div>
			</div>
			</div>
		
	</body>
</html>