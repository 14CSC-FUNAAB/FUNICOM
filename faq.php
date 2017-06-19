<?php 
include("functions/function.php");
gen_header(F); ?>
<div class="about_banner">
	<div class="container">
		<h2>Faqs</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <a href="news.html" class="home_desc">News</a> / <span>Faq</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-10">
	</div>
	<div class="col-md-9 column-15">
	   <h6>Faqs</h6>
	   <div class="accordation">
		    <div class="jb-accordion-wrapper wrapper_1">
				<div class="jb-accordion-title title-grey"> Q: Do I need to pay to use Funicom? Are there any charges I need to know about?  <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion-1-"><i class="fa fa-minus minus_1"></i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id="accordion-1-" class="jb-accordion-content collapse in" style="height: auto;">
				<p>Funicom is entirely free. There are no hidden charges. Being a student of Funaab qualifies you to be a user of Funicom. </p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
<!-- PHP code to generate faq list-->
<?php
	$get_faqs = "select * from faqs";
	$run_faqs = mysqli_query ($con,$get_faqs);

	while ($row_faqs = mysqli_fetch_array ($run_faqs)){
		$faqs_id = $row_faqs['id'];
		$faqs_ques = $row_faqs['question'];
		$faqs_ans = $row_faqs['answer'];
		
	echo "
		<div class='jb-accordion-wrapper wrapper_2'>
				<div class='jb-accordion-title'> Q: $faqs_ques <button type='button' class='jb-accordion-button collapsed' data-toggle='collapse' data-target='#accordion$faqs_id-'><i class='fa fa-plus'></i></button></div>
				<p><!-- /.accordion-title -->
				</p><div id='accordion$faqs_id-' class='jb-accordion-content collapse' style='height: 40px;'>
				<p>$faqs_ans</p>
				</div>
				<p><!-- /.collapse --></p>
			</div>
		";
	}
?>



	    </div>
	  </div>
	  <div class='clearfix'> </div>
</div>
<?php footer() ?>	
</body>
</html>