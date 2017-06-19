<?php include("functions/function.php");gen_header(FF); ?>
</div>
<div class="about_banner">
	<div class="container">
		<h2>Forum</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Forum</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 forum">
	        <div class="fb-like-button social-item">
	  			<a href="#" title="" target="_blank"> <div class="social-item-inner"> 
	  				<span class="fa fa-facebook sc-icon"></span> 
	  				<span class="like-count">200</span> 
	  				<span class="like-text"> Likes </span> 
	  			</div></a> 
	  		</div>
	</div>
	<div class="col-md-9 column-15">
	   <h6>Forum</h6>
<?php
			$get_threads = "SELECT * FROM `thread` order by dt desc";
			$run_threads = mysqli_query ($con,$get_threads);

	while ($row_threads = mysqli_fetch_array ($run_threads)){
		$thread_id = $row_threads['id'];
		$thread_title = $row_threads['title'];
		$thread_body = $row_threads['body'];
		$thread_dt = $row_threads['dt'];
		$thread_creator = $row_threads['creator'];
		$thread_avatar = $row_threads['avatar'];
	
		echo "<div class='forum_box1'>
	   	 <span class='head_2'>
            <a href='thread.php'>$thread_title</a>
         </span>
	   	 <h3> $thread_dt </h3>
	   	 <div class='col-sm-3 forum_box1-left'>
	   	 	<h4><a href='profile.php'>$thread_creator</a></h4>
	   	 	<p>0 replies</p>
	   	 </div>
	   	 <div class='col-sm-9 forum_box1-right'>
	   	 	<p>'$thread_body'</p>
            <div class='post-element clearfix'>                         
 	  	        <div class='post__1'>
    	          <span class='post__1-item'><span class='link_2'><a  title='like me' class='like_button'>
    		          <i class='fa fa-heart-o'></i></a></span><span></span>
    		      </span>
    		       <span class='post__1-item'><span class='link_2'><a  title='like me' class='like_button'>
    		          <i class='fa fa-comment-o'></i></a></span><span></span>
    		      </span>
    		       <span class='post__1-item'><span class='link_2'><a  title='like me' class='like_button'>
    		          <i class='fa fa-eye'></i></a></span><span></span>
    		      </span>
    		    </div>                     
            </div>
	   	 </div>
	   	 <div class='clearfix'> </div>
	   </div>";
	}
?>
	  

	</div>		
    <div class="clearfix"> </div>
 </div>
</div>
<?php footer() ?>	
</body>
</html>