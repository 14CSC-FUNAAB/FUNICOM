<?php include("functions/function.php");gen_header(D); ?>
<div class="about_banner">
	<div class="container">
		<h2>Profile</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Profile</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	 <div class='col-md-3 column-8'>
	 <?php
	$user=$_SESSION['username'];
	$get_avatar = "select * from userprofile where username='$user'";
	$run_avatar = mysqli_query ($con,$get_avatar);

	while ($row_avatar = mysqli_fetch_array ($run_avatar)){
		$user_avatar= $row_avatar['avatar'];
	
		echo "<a>
	 <img style='
	 
	min-height: 300px;
	max-width:  300px;
    z-index: 10;
    padding: 0;' src='users/users_images/$user_avatar'> </a>";}
	?>
		 </div>
		 
	
	<div class="col-md-9 column-2">
	   <h4>About Me</h4>
		 <div class="entry-meta"> 
		 	
		 	<p> This section should ONLY cointain information about you which you wish other people to know about you. Note that it will be visible to whoever visits your profile.</p>
		 	
		 	<div class="footer-social about_social">
			    <a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-google-plus"></i></a>
	        </div>
			
	  <div class="clearfix"></div>


	 </div>
		 </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<?php footer() ?>
</body>
</html>
