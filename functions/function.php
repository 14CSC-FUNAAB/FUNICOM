<?php
$con = mysqli_connect("localhost","root","","funicom");

function footer()
{
	echo ";
<div class='footer_widget'>
	<div class='container'>
		<div class='col-md-4'>
			<aside id='text-1' class='widget widget_text'>
				<h3 class='widget-title'><span>FUNICOM</span></h3>
				<div class='textwidget'><p>a place where FUNAABITE can share ideas, discuss issues and effectively collaborate with one another towards solving problems such as assignments and projects. </p>
				   <p><em style='color: #fff;'>FUNAAB<br> COLPHYS<br> CSC, Class 2014</em></p>
				</div> 
			</aside>
		</div>
		<div class='col-md-4'>
			<aside id='text-2' class='widget widget_text'>
				<h3 class='widget-title'><span>MORE ABOUT THE PROJECT</span></h3>
				<div class='textwidget'>
					<p>It is a Software Engineering Project developed by the 300L students of Class 2014 at the Federal University of Agriculture, Abeokuta under the guidance of Professor A. S. Sodiya.</p></div>
		    </aside>
		</div>
		<div class='col-md-4'>
			<aside>
				<h3 class='widget-title'><span>FUNAAB GALLERY</span></h3>
				<ul class='gallery'>
					<li><a href='images/images/1.jpg' class='img-responsive' title='Senate Building' rel='title1'>
						<img src='images/images/1.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li><a href='images/images/2.jpg' class='img-responsive' title='Landscape' rel='title1'>
						<img src='images/images/2.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li><a href='images/images/3.jpg' class='img-responsive' title='Post Graduate' rel='title1'>
						<img src='images/images/3.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li class='last'>
						<a href='images/images/5.jpg' class='img-responsive' title='COLBIOS afar' rel='title1'>
						<img src='images/images/5.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li>
						<a href='images/images/6.jpg' class='img-responsive' title='Senate via Motion Ground' rel='title1'>
						<img src='images/images/6.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li>
					   <a href='images/images/8.jpg' class='img-responsive' title='COLFHEC' rel='title1'>
						<img src='images/images/8.jpg' class='img-responsive' alt='name'>
					   </a>
				    </li>
					<li>
						<a href='images/images/10.jpg' class='img-responsive' title='Nimbe Library afar' rel='title1'>
						<img src='images/images/10.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li class='last'>
						<a href='images/images/11.jpg' class='img-responsive' title='After Gate' rel='title1'>
						<img src='images/images/11.jpg' class='img-responsive' alt='name'>
					   </a>
				    </li>
				    <li>
						<a href='images/images/12.jpg' class='img-responsive' title='COPLANT afar' rel='title1'>
						<img src='images/images/12.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li>
					   <a href='images/images/13.jpg' class='img-responsive' title='Motion Ground' rel='title1'>
						<img src='images/images/13.jpg' class='img-responsive' alt='name'>
					   </a>
				    </li>
					<li>
						<a href='images/images/14.jpg' class='img-responsive' title='Senate Building side view' rel='title1'>
						<img src='images/images/14.jpg' class='img-responsive' alt='name'>
					   </a>
					</li>
					<li class='last'>
						<a href='images/images/16.jpg' class='img-responsive' title='ICT' rel='title1'>
						<img src='images/images/16.jpg' class='img-responsive' alt='name'>
					   </a>
				    </li>

					<div class='clearfix'> </div>
				</ul>
			</aside>
		</div>
	</div>
</div>
		
<div class='footer_bottom'>
	<div class='container'>
		<div class='copy'>
            <p>Copyright © 2017 FUNICOM. All Rights Reserved | Design by <a href='http://w3layouts.com/' target='_blank'>W3layouts & FUNICOM TEAM</a> </p>
	    </div>
	</div>
	<a href='#' id='toTop' style='display: block;'> <span id='toTopHover' style='opacity: 1;'>Top </span></a>
      <script type='text/javascript' src='js/move-top.js'></script>
      <script type='text/javascript' src='js/easing.js'></script>
      <script type='text/javascript'>
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
</div>	
<!-- FlexSlider -->
<link href='css/flexslider.css' rel='stylesheet' type='text/css' />
<script defer src='js/jquery.flexslider.js'></script>
	  <script type='text/javascript'>
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: 'slide',
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!-- FlexSlider -->";
}

function gen_header(){
	session_start();
	echo"
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>FUNICOM</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='keywords' content='FUNAAB, community, interactive, students, funaabite, funicom' />
<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='css/bootstrap-3.1.1.min.css' rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<!-- Custom Theme files -->
<link href='css/style.css' rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type='text/javascript' src='js/move-top.js'></script>
<script type='text/javascript' src='js/easing.js'></script>
<!----drop down----->
<script>
$(document).ready(function(){
    $('.dropdown').hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown('fast');
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp('fast');
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!----font-Awesome----->
<link href='css/font-awesome.css' rel='stylesheet'> 
<!----font-Awesome----->
<!--light-box-files -->
<script src='js/jquery.chocolat.js'></script>
<link rel='stylesheet' href='css/chocolat.css' type='text/css' media='screen' charset='utf-8' />
<!--light-box-files -->
<script type='text/javascript' charset='utf-8'>
$(function() {
	$('.gallery a').Chocolat();
});
</script>
</head>
<body>
<div class='header'>
		<div class='container'>
			<div class='col-sm-3 logo'>
			  <h1><a href='index.php'><span class='highlight'>FUN</span>ICOM</a></h1>
			</div>
		    <div class='col-sm-9 logo_right'>
		       <div class='social'>
				  <a href='http://fb.com/funicom' class='link facebook' target='_parent'><span class='fa fa-facebook'></span></a>
				  <a href='http://twitter.com' class='link twitter' target='_parent'><span class='fa fa-twitter'></span></a>
				  <a href='http://googleplus.com' class='link google' target='_parent'><span class='fa fa-google-plus'></span></a>
				  <a href='http://linkedin.com' class='link google' target='_parent'><span class='fa fa-linkedin'></span></a>
				  <a href='http://tumblr.com' class='link google' target='_parent'><span class='fa fa-tumblr'></span></a>
               </div>
			<!-- script for menu -->
			<span class='menu'></span>
			<div class='top-menu'>
				<ul>";


				if(!isset($_SESSION['username'])){
					echo"
					<li><a href='#' class='btn btn-default btn-default_2 pull-left' data-toggle='modal' data-target='#applyModal'>Login</a></li>
					<li><a href='#' class='btn btn-default btn-default_2 pull-left' data-toggle='modal' data-target='#applyModal_1'>Register</a></li>
					";}
					else{
						echo"
					<li><a href='profile.php' class='btn btn-default btn-default_2 pull-left' >Welcome " . $_SESSION['username'] . "</a></li>
					<li><a href='logout.php' class='btn btn-default btn-default_2 pull-left' >Logout</a></li>
					";};
			
			echo"
					</ul>
			</div>
			<div class='clearfix'> </div>
			<!-- Modal -->
				<div class='modal fade' id='applyModal' tabindex='-1' role='dialog' aria-labelledby='applyModalLabel' aria-hidden='true'>
				  	<div class='modal-dialog modal-dialog_2'>
				    	<div class='modal-content'>
					      	<div class='modal-header'>
					        	<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
					        	<h4 class='modal-title' id='myModalLabel'>
					        		<div class='head_4'>
			                          <p>Login</p>
			                        </div>
			                    </h4>
					      	</div>
	                        <div class='modal-body'>
                             <form class='register' action='index.php' method='post'>
                               <div class='section'>
                                <label for='username' class='field prepend-icon'>
                                    <input type='text' name='username' id='username' placeholder='Username not Matric' required=''>
                                    <label for='username' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                    </label>
                                </label>
                               </div>
                               <div class='section'>
                                <label for='password' class='field prepend-icon'>
                                    <input type='password' name='password' id='password' placeholder='Password' required=' '>
                                    <label for='password' class='field-icon'>
                                        <i class='fa fa-lock'></i>
                                    </label>
                                </label>
                             </div>
                             <div class='section'>
                                <div class='submit'><input type='submit' onclick='myFunction()' value='Login' name='login'></div>
                             </div>
                             <ul class='new'>
								<li class='new_left'><p><a href='#'>Forgot Password ?</a></p></li>
								<li class='new_right'><p class='sign'>New here ?&nbsp;&nbsp;<a href='#' data-toggle='modal' data-target='#applyModal_1'>Sign Up</a></p></li>
								<div class='clearfix'></div>
						     </ul>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
				 <!-- Modal -->
				<div class='modal fade' id='applyModal_1' tabindex='-1' role='dialog' aria-labelledby='applyModalLabel' aria-hidden='true'>
				  	<div class='modal-dialog dialog_3'>
				    	<div class='modal-content'>
					      	<div class='modal-header'>
					        	<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
					        	<h4 class='modal-title' id='myModalLabel'><div class='head_4'>
			                         <p>Register</p>
			                        </div></h4>
					      	</div>
					      	<form name='row' action='index.php' method='post' enctype='multipart/form-data' class='register'>
					      		<div class='section'>
                                  <label for='username' class='field prepend-icon'>
                                    <input type='text' name='username' id='User id' placeholder='Username'>
                                    <label for='username' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                    </label>
                                  </label>
                               </div>
	                            <div class='section'>
                                  <label for='matric' class='field prepend-icon'>
                                    <input type='text' name='matric' id='matric' placeholder='Matric Number'>
                                    <label for='matric' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                    </label>
                                  </label>
                               </div>
                               <div class='section'>
                                 <label for='password' class='field prepend-icon'>
                                    <input type='password' name='password' id='password' placeholder='Password'>
                                    <label for='password' class='field-icon'>
                                        <i class='fa fa-lock'></i>
                                    </label>
                                 </label>
                               </div>
                               <div class='section'>
                                  <label for='username' class='field prepend-icon'>
                                    <input type='text' name='phone' id='Mobile Number' placeholder='Mobile Number'>
                                    <label for='mobile number' class='field-icon'>
                                        <i class='fa fa-phone'></i>
                                    </label>
                                  </label>
                               </div>
	                            <div class='section'>
                                  <label for='username' class='field prepend-icon'>
                                    <input type='text' name='skills' id='skills' placeholder='Skills'>
                                    <label for='username' class='field-icon'>
                                        <i class='fa fa-apple'></i>
                                    </label>
                                  </label>
                               </div>
                               <div class='section'>
                                  <label for='name' class='field prepend-icon'>
                                    <select name='college' path='college' id='college' class='form-control input-sm'>
				                        <option value=''>Select College</option>
				                        <option value='1'>COLPHYS</option>
				                        <option value='2'>COLBIOS</option>
				                        <option value='3'>COLPLANT</option>
				                        <option value='4'>COLANIM</option>
				                        <option value='5'>COLAMRUD</option> 
				                        <option value='6'>COLERM</option> 
				                        <option value='7'>COLFHEC</option> 
				                        <option value='8'>COLVET</option> 
				                        <option value='9'>COLMAS</option> 
				                        <option value='10'>COLENG</option> 
				                    </select>
                                    <label for='name' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                    </label>
                                  </label>
                               </div>
                              <div class='section'>
                                  <label for='name' class='field prepend-icon'>
                                      <select name='level' path='level' id='level' class='form-control input-sm'>
                                         <option value=''>Select Level</option>
					<option value='1'>100L</option>
				        <option value='2'>200L</option>
				        <option value='3'>300L</option>
				        <option value='4'>400L</option>
				        <option value='5'>500L</option>
								<option value='6'>600L</option>

                                      </select>
                                      <label for='name' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                      </label>
                                  </label>
                               </div>
                               <div class='section'>
                                  <div class='submit'><input type='submit' onclick='myFunction()' value='Register' name='register'></div>
                               </div>
                               <div class='checkbox check_1'>
									<input id='check1' type='checkbox' name='check' value='check1'>
									<label for='check1'>I agree to the Terms of Service and Privacy Policy</label>
							   </div>
						  </form>
                     </div>
		         </div>
		     </div>
			 <div class='clearfix'></div>
		 </div>
	   </div>
</div>
<nav class='navbar nav_bottom' role='navigation'>
 <div class='container'>
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class='navbar-header nav_2'>
      <button type='button' class='navbar-toggle collapsed navbar-toggle1' data-toggle='collapse' data-target='#bs-megadropdown-tabs'>Menu
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='#'></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-megadropdown-tabs'>
        <ul class='nav navbar-nav nav_1'>
            <li class='current_page'><a href='index.php'>Home</a></li>
            <li><a href='forum.php'>Forum</a></li>
            <li><a href='faq.php'>FAQs</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
   </div>
</nav>
<div class='demo'>
  <marquee behavior='scroll' style='background:#F3DB28; color:#000;' direction='left' onmouseover='this.stop();' onmouseout='this.start();'>				
    This is a sample of a scrolling text which can be used to pass urgent or important information to your audience. Whao that's nice! This is a sample of a scrolling text which can be used to pass urgent or important information to your audience. Whao that's nice! This is a sample of a scrolling text which can be used to pass urgent or important information to your audience. Whao that's nice!
  </marquee> 	 
</div>";
}
?>