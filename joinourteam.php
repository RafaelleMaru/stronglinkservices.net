<!DOCTYPE html>
<html lang="en">
<?php $menu = 5; ?>
<head>
	<?php include 'head.php'; ?>		
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"><div class="la-anim-10"></div></div>
	<?php include 'header.php'; ?>
    <!-- Content -->
    <div class="page-content bg-white rubik-font">
	  <!-- inner page banner -->
        <div class="dlab-bnr-inr" style="background-image:url(images/banner/bnr14.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Job Posting</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Our Company</a></li>
							<li>Job Posting</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
			<!-- Team Section -->
			<div class="section-full text-center bg-white content-inner-1">
				<div class="container">	
					<div class="section-head text-black text-center">
						<h2>WE ARE HIRING!</h2>
						<p>Apply at Stronglink Services Inc.
						<br/><br/>
						Address: 
						<br/>
						<i>RL Bldg. Francisco Village Brgy. Pulong Santa Cruz, Santa Rosa Laguna</i>
						<br/><br/>
						<strong>You may also send your resume at:</strong><br/> 
						<i>i.asuncion@stronglinkservices.net</i>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- contact area -->
    
			<div class="section-full content-inner wow fadeIn" data-wow-delay="0.4s" style="background-image:url(images/background/bg16.jpg); background-position:center; background-repeat:no-repeat;">
		<div class="container">	
			
			
			
			<div class="row justify-content-center">
			<div class="col-md-8">
			
			
				<h6>All applicants must possess the following qualifications:</h6>
							
							<ul class="list-check primary">
									<li>Male or Female</li>
									<li>Age:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Must be of legal age (no below 18 yrs old)</li>
									<li>Education:&ensp;&ensp;&ensp;High School / College Graduate / College Level  <br /> 
										&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
										Graduate of 2 year Technical or Vocational Courses
									</li>
									<li>Experience:&ensp;&ensp;With or without experience</li>
							</ul>
							
								
							
							<h6>All applicants are required to bring the following documents:</h6>
							<ul class="ml-5">
								<li>NSO Authenticated Birth Certificate (3 copies)</li>
								<li>Community Tax Certificate (Cedula)</li>
								<li>TIN Card </li>
								<li>SSS ID  /E1 or E4 Form</li>
								<li>NBI / Barangay / Police Clearance</li>
								<li>Diploma / Certificate of Graduation</li>
								<li>Transcript of Records (TOR) / Certificate of Grades</li>
								<li>Birth Certificate of Qualified dependents</li>
								<li>Marriage Contract (if married)</li>
								<li>Certificate of Employment</li>
								<li>ID Pictures (2 x 2 &#8208 3 copies , 1 x 1 &#8208 6 copies) &#8208 Person should wear white t-shirt over white background</li>

							</ul>
				
				
				
				
			</div>
		</div>
	</div>
			
			
			<!-- contact area -->
			<div class="section-full content-inner wow fadeIn" data-wow-delay="0.4s" style="background-image:url(images/background/bg6.png); background-position:center; background-repeat:no-repeat;">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h2 class="font-weight-700 m-t0 m-b40">Application</h2>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="ActiveForm" method="post" action="application.php" enctype="multipart/form-data"  class="tab-pane active">
									<h4 class="font-weight-700">Submit Your Resume</h4>
									<p class="font-weight-300">  </p>
									<div class="form-group">
										<label class="font-weight-700">Name (First and last) *</label>
										<input name="fullname" id="fullname" class="form-control" onblur="this.value = this.value.trim()" placeholder="Full Name" type="text" required="required" >
									</div>
									<div class="form-group">
										<label class="font-weight-700">Age *</label>
										<input name="age" id="age" class="form-control" placeholder="Age" type="number" min="18" max="100" required="required">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Email Address *</label>
										<input name="email" class="form-control" placeholder="Your Email Address" type="email" required="required">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Resume *</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="uploaded_file" name="uploaded_file" accept="application/msword, text/plain, application/pdf" required="required">
											<label class="custom-file-label" id="custom-file-label" for="uploaded_file">Choose file</label>
											<label class="text-red ">pdf, doc, docx, txt</label>
										</div>
									</div>
									  
									  
									<div class="text-left">
										<input type="submit" name="submit" value="SUBMIT" class="site-button button-lg radius-no outline outline-2">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	
	<div class="section-full add-to-call bg-primary p-tb30">
		<div class="container">
			<div class="d-lg-flex d-sm-block justify-content-between align-items-center">
				<h2 class="m-b10 m-t10 text-white">Looking for Reliable Service?</h2>
				<div><a href="ourteam.php?#contactus" class="site-button button-md white">Contact Us</a></div>
			</div>
		</div>
	</div>	
    <button class="scroltop fa fa-chevron-up" ></button>
</div>

<?php
if (empty(!$_GET)) {
	$name = $_GET["n"];
}
?>	
    <!-- Modal Inquiry -->
    <div class="modal fade" id="modelinquiry" tabindex="-1" role="dialog" aria-labelledby="modal-feature-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal__title text-white">
                        <h2>Application Sent!</h2>
                    </div>
                    <!--end modal__slider-->
                </div>
                <!--end modal-header-->
                <div class="modal-body">
					<div class="row">
						<div class="float-left p-5 col-md-12">
							<h4>Hi <?php echo $name ?>, <br><br>Thanks for sending your resume. 
							We will be reaching you out soon. <br><br>Best Regards,<br>HR / Admin<br>Stronglink Services Inc.</h4>
							
								
							</p>
						</div>
						<!--end float-left-->
					</div>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->

	
<?php include 'footer.php'; ?>
<?php include 'scripts.php'; ?>

    <script>
	
	
		$(document).ready(function(){
			<?php
				if ($name != "") {
					echo "$('#modelinquiry').modal('show');";
				}
			?>
			$('#uploaded_file').on('change',function(){
				
			  var fileName = document.getElementById("uploaded_file").files[0].name;
			  document.getElementById('custom-file-label').innerHTML = fileName;
			});
			
			//document.getElementById("fullname").onblur = function() {myFunction()};

			function myFunction() {
			  alert("Input field lost focus.");
			};
			
		}
		
					

		
		
	</script>
	<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_5();
	
});	/*ready*/
</script>
</body>
</html>
