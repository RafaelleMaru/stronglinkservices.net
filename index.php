<?php $menu = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gl-matrix/2.4.0/gl-matrix-min.js"></script>
	<style>.
		arrows{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.arrows span{
			display: block;
			width: 30px;
			height: 30px;
			border-bottom: 5px solid #5DA4D2;
			border-right: 5px solid #5DA4D2;
			transform: rotate(45deg);
			margin: -10px;
			animation: animate 2s infinite;
		}
		.arrows span:nth-child(2){
			animation-delay: -0.2s;
		}
		.arrows span:nth-child(3){
			animation-delay: -0.4s;
		}
		@keyframes animate {
			0%{
				opacity: 0;
				transform: rotate(45deg) translate(-20px,-20px);
			}
			50%{
				opacity: 1;
			}
			100%{
				opacity: 0;
				transform: rotate(45deg) translate(20px,20px);
			}
		}
	</style>
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-area"></div>
	<?php include 'header.php'; ?>
    <!-- Content -->
    <div>
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner carousel-fade" role="listbox">
			  <!-- Slide First - Set the background image for this slide in the line below -->
			  <div class="carousel-item active" style="background-image: url('images/banner/bnrhome1.jpg');  opacity: 1;">
				<div class="carousel-caption d-md-block">
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
				

			  <!-- Slide Second - Set the background image for this slide in the line below -->
			  <div class="carousel-item " style="background-image: url('images/banner/bnrhome2.jpg'); opacity: 1">
				<!--div class="carousel-caption d-none d-md-block" -->
				<div class="carousel-caption d-md-block" >
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
			  
			  <!-- Slide Third - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url('images/banner/bnrhome3.jpg'); opacity: 1;">
				<div class="carousel-caption d-md-block">
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
			  
			  
			  <!-- Slide Fourth - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url('images/banner/bnrhome4.jpg'); opacity: 1;">
				<div class="carousel-caption d-md-block">
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
			  
			  
			  <!-- Slide Fifth - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url('images/banner/bnrhome5.jpg'); opacity: 1;">
				<div class="carousel-caption d-md-block">
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
			  
			  
			  <!-- Slide Sixth - Set the background image for this slide in the line below -->
			  <div class="carousel-item" style="background-image: url('images/banner/bnrhome6.jpg'); opacity: 1;">
				<div class="carousel-caption d-md-block">
					<h1>STRONGLINK SERVICES</h1>
					<p >Stronglink helps clients maintain a clean and organized  environment.</p>
				</div>
			  </div>
			</div>
		  
		</div>
		
		
		
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
		
	
      </div>
    </div>
	 <div class="page-content bg-white">
        <!-- Main Slider -->
        

        <!-- Main Slider -->
        <!-- contact area -->
        <div class="content-block"><!-- About Us -->
            <div class="section-full industry-" style="background-image:url(images/background/bg17.jpg)">
				<div class="container">
						<!-- About Us -->
				<div class="section-full bg-white content-inner-1 about-us  m-b80 mb-3">
					<div class="container">
						<div class="row ">
							<div class="col-lg-7 col-md-8">
								<div class="abuot-box row wow fadeIn" data-wow-delay="0.6s">
									<div class="col-lg-4">
										<h2 class="box-title m-tb0">Who We Are<span class="bg-primary"></span></h2>
										<h4 class="text-gray-dark">We create unique experiences</h4>
									</div>
									<div class="col-lg-8">
										<p>Stronglink Services, Inc. is an all-Filipino stock corporation incorporated on October 2003. Currently located at RL Bldg. Francisco Village, Brgy. Pulong, Santa Cruz, Santa Rosa, Laguna. We are a professional and highly efficient cleaning service company with our fifteen years of hands-on experience, and we offer a great assortment of high level cleaning services for facilities and commercial buildings. We provide trained staff and quality equipment and supplies and deliver quality service at a competitive price for local and multinational companies.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-4 about-img wow fadeIn" data-wow-delay="0.8s">
								<img src="images/about-us/img7.jpg" data-tilt alt=""/>
							</div>
						</div>
					</div>
				</div>
				<!-- About Us End -->
			
				</div>	
				<!-- Mission And Vision -->
				<div class="section-full overlay-black-dark our-projects" style="background-image:url(images/background/bg3.jpg)">
					<div class="container text-white">
						<div class="row m-lr0 d-flex align-items-stretch">
							<div class="col-lg-6 col-md-6 p-lr0 d-flex ind-ser-info-bx">
								<div class="ind-service-info align-self-stretch">
									<span><i class="fa fa-bullseye"></i></span>
									<div class="ind-service-info-in">
										<h2><span>Our</span>Mission</h2>
										<p>We are committed to creating value for our clients by providing equipped and qualified employees who, with their utmost performance, are able to deliver accurately and thoroughly.</p>
									</div>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 p-lr0 d-flex ind-ser-info-bx">
								<div class="ind-service-info align-self-stretch">
									<span><i class="fa fa-eye"></i></span>
									<div class="ind-service-info-in">
										<h2><span>Our </span>Vision</h2>
										<p>We aim to be the front runner business partner to all our clients.</p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>	
				
				
            </div>
			<!-- About Us End -->
            
			<div class="container pt-5 pb-5">
				<div class="row">	
					<div class="col-lg-12">	
						<!-- Our Core Values End -->
						<div class="section-full bg-blue-light content-inner about-us-box" style="background-image:url(images/background/bg15.jpg); background-size:cover">
						
							<div class="section-head text-black text-center">
								<h2 class="text-uppercase m-b10">Our Core Values</h2>
							</div>
							<div class="container">
								<div class="row  ">
									<div class="col-lg-3 col-md-3  dis-tbl text-justify d-md-none mt-4">
										
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-pen"></i></span> SERVICE<span class="bg-primary"></span></h3>
											<p class="font-16">We are committed to providing the highest quality services to meet and exceed client satisfaction. </p>
											
									</div>
									<div class="col-lg-3 col-md-3 wow fadeIn" data-wow-delay="0.8s">
										<div class="owl-fade-one owl-carousel owl-theme owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 black owl-drag about-img" >
											<div class="item">
												<img src="images/our-company/1.jpg" alt=""/>
											</div>
											<div class="item">
												<img src="images/our-company/2.jpg" alt=""/>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3  dis-tbl text-justify d-none d-md-block mt-4">
										
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-pen"></i></span> SERVICE<span class="bg-primary"></span></h3>
											<p class="font-16">We are committed to providing the highest quality services to meet and exceed client satisfaction. </p>
											
									</div>
									<div class="col-lg-3 col-md-3 dis-tbl text-justify mt-4">
										<div class="">
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-diamond"></i></span> INTEGRITY<span class="bg-primary"></span></h3>
											<p class="font-16">We are dignified to work to the best of our abilities. </p>
										</div>	
									</div>
									<div class="col-lg-3 col-md-3 about-img wow fadeIn mb-3" data-wow-delay="0.8s">
										<div class="owl-fade-one owl-carousel owl-theme owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 black owl-drag about-img" >
												<div class="item">
													<img src="images/our-company/3.jpg" alt=""/>
												</div>
												<div class="item">
													<img src="images/our-company/8.jpg" alt=""/>
												</div>
												<div class="item">
													<img src="images/our-company/9.jpg" alt=""/>
												</div>
										</div>
									</div>
									
								</div>
								<div class="row dzseth ">
									
									<div class="col-lg-3 col-md-3  dis-tbl text-justify  d-md-none mt-4">
										<div class="">
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-team"></i></span> TEAMWORK<span class="bg-primary"></span></h3>
											<p class="font-16">We bring out the goodness in each other. </p>
										</div>	
									</div>
									<div class="col-lg-3 col-md-3 wow fadeIn" data-wow-delay="0.8s">
										<div class="owl-fade-one owl-carousel owl-theme owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 black owl-drag about-img" >
												<div class="item">
													<img src="images/our-company/4.jpg" alt=""/>
												</div>
												<div class="item">
													<img src="images/our-company/5.jpg" alt=""/>
												</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3  dis-tbl text-justify d-none d-md-block mt-4">
										<div class="">
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-team"></i></span> TEAMWORK<span class="bg-primary"></span></h3>
											<p class="font-16">We bring out the goodness in each other. </p>
										</div>	
									</div>
									<div class="col-lg-3 col-md-3 dis-tbl text-justify mt-4">
										<div class="">
											<h3 class="box-title"><span class="icon-cell icon-sm text-primary"><i class="flaticon-bar-chart"></i></span> INNOVATION<span class="bg-primary"></span></h3>
											<p class="font-16">We keep ourselves up to date with emerging trends and needs of our clients. </p>
										</div>	
									</div>
									<div class="col-lg-3 col-md-3 wow fadeIn" data-wow-delay="0.8s">
										<div class="owl-fade-one owl-carousel owl-theme owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 black owl-drag about-img" >
												<div class="item">
													<img src="images/our-company/6.jpg" alt=""/>
												</div>
												<div class="item">
													<img src="images/our-company/7.jpg" alt=""/>
												</div>
												<div class="item">
													<img src="images/our-company/10.jpg" alt=""/>
												</div>
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
                </div>
            </div>
			<!-- Our Core Values End -->
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
	 
</div>
<?php include 'footer.php'; ?>
<?php include 'scripts.php'; ?>

<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_2();
});	/*ready*/
</script>


</body>
</html>
