<?php include("functions/function.php");gen_header(); ?>
<section class="slider">
  <div class="flexslider">
	<ul class="slides">
		<li clearfix>
			<div class="col-sm-6 slider_right">
			  <div class="col-sm-12 slider_caption">
				<h3>FUNAAB</h3>
				<h4>Senate Building</h4>
			  </div>
			</div>
			<div class="col-sm-6"><img src="images/4.jpg" alt=""/></div>
		</li>
		<li clearfix>
			<div class="col-sm-6"><img src="images/9.jpg" alt=""/></div>
			<div class="col-sm-6 slider_left">
			  <div class="col-sm-12 slider_caption1">
				<h3>FUNAAB</h3>
				<h4>Landscape</h4>
			  </div>
			</div>
		</li>
		<li clearfix>
			<div class="col-sm-6 slider_right">
			  <div class="col-sm-12 slider_caption">
				<h3>FUNAAB</h3>
				<h4>Gate</h4>
			  </div>
			</div>
			<div class="col-sm-6"><img src="images/5.jpg" alt=""/></div>
		</li>
	</ul>
  </div>
  <div class="clearfix"> </div>
</section>
<div class="box_1">
  <div class="container">
    <div class="box-info clearfix ">
      <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading"> introducing</small>
             <h3 style="font-size=12pt;">FUNICOM</h3>
         </div>   
      </div>   
    </div>  
    <div class="col-lg-9 col-md-9 right_grid">
      <h3>...share ideas, discuss issues and effectively collaborate</h3>
      <h4>FUNICOM is a place where FUNAABITE can share ideas, discuss issues and effectively collaborate with one another towards solving problems such as assignments and projects.</h4>
      <p>FUNICOM is a Software Engineering Project developed by the 300L students of Class 2014 at the Federal University of Agriculture, Abeokuta under the guidance of Professor A. S. Sodiya. </p>
    </div>  
    <div class="clearfix"> </div> 
   </div>
  </div> 
</div>
<div class="tabs_list">
  <div class="container">  
  	 <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <h3>Threads</h3>
         </div>   
      </div>   
    </div>
	       <div class="bs-example bs-example-tabs col-md-9" role="tabpanel" data-example-id="togglable-tabs">
	       	 <ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active presentation_2"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Latest thread</a></li>
			  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
			  	<div class="btn-group">
                    <a class="btn btn_1 btn-default dropdown-toggle dropdown-toggle_1" data-toggle="dropdown" aria-expanded="true">College<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#">COLPHYS</a></li>
                        <li><a href="#">COLBIOS</a></li>
                        <li><a href="#">COLANIM</a></li>
                        <li><a href="#">COLPLANT</a></li>
                        <li><a href="#">COLERM</a></li>
                        <li><a href="#">COLAMRUD</a></li>
												<li><a href="#">COLFHEC</a></li>
                        <li><a href="#">COLENG</a></li>
                        <li><a href="#">COLVET</a></li>
                        <li><a href="#">COLMAS</a></li>
                    </ul>
                 </div></a></li>
			  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">
                <input class="form-control" type="text" id="flocation" name="flocation" placeholder="Search" onkeypress="displayCity(this.value);" onblur="gotoFeed('location', this.value);" tabindex="99">
              </li>
			</ul>
		  <div id="myTabContent" class="tab-content">
		     <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		      <div class="panel-body">
<!-- PHP code to generate recent thread list-->
<?php
	$get_threads = "select * from thread";
	$run_threads = mysqli_query ($con,$get_threads);

	while ($row_threads = mysqli_fetch_array ($run_threads)){
		$thread_id = $row_threads['id'];
		$thread_title = $row_threads['title'];
		$thread_body = $row_threads['body'];
		$thread_dt = $row_threads['dt'];
		$thread_creator = $row_threads['creator'];
	
		echo "<div class='pull-left' style='margin:0 5px;'>
                		<a class='thumbnail' href='profile.php'>
                			<img src='images/pic13.jpg' width='50' height='50'>
                		</a>
                	</div>
                	<div class='panel-body_1'>
                	  <h3>
                		  <a href='profile.php' style='text-transform: capitalize;'> $thread_creator</a>
                		$thread_title <div class='pull-right'>$thread_dt<i class='fa fa-refresh refresh_1'></i></div>
                      </h3>
                      <h4>
                        <a href='thread.php'>$thread_body</a>
                      </h4>
                    </div>
                   <div class='clearfix'></div><hr>";
	}
?>

               </div>
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
		  </div>
		  <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
		   	  <div class="panel-body">

					 	Keywords Button
               </div>
		   </div>
	    </div>
      </div>
    </div>
</div>
<?php footer() ?>		
</body>
</html>
<?php

if (isset($_POST['register'])){

	global $con;

	$u_name = $_POST['username'];
	$u_matric = $_POST['matric'];
	$u_pass = $_POST['password'];
	$u_phone = $_POST['phone'];
	$u_skills = $_POST['skills'];
	$u_college = $_POST['college'];
	$u_level = $_POST['level'];

	$insert_u = "INSERT INTO `userprofile`(`username`, `matric`, `password`, `college`, `level`, `phone`, `skills`) VALUES 
	('$u_name','$u_matric','$u_pass','$u_college','$u_level','$u_phone','$u_skills')";
	$run_user = mysqli_query ($con, $insert_u);

if ($run_user){
	echo "<script> alert ('Registration Successful!') </script>";
}
}


if (isset($_POST['login'])){
	$u_name = $_POST['username'];
	$u_pass = $_POST['password'];

	$sel_user = "select * from userprofile where password='$u_pass' and username='$u_name'";
	$run_user = mysqli_query($con, $sel_user);

	$check_user = mysqli_num_rows($run_user);

	if ($check_user==0){
		echo"<script>alert('Incorrect Username or Password')</script>";
	}
	else{
		$_SESSION['username']=$u_name;
		echo"<script>window.open('profile.php','_self')</script>";
	}
}

?>