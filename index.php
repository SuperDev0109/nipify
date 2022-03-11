<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title id="title">Nipify</title>
		<meta name="description" content="Nipify ™ powered by KPVE Group" />
		<meta name="keywords" content="Pogody, Responsive Coming Soon Template, Under Construction Template, Responsive Template, HTML5 Template, themeforest.net, Bootstrap, HTML5, Creative, Landing Page, Sass, Clean, Design, Modern, Angular js, MailChimp Subscription," />
		<meta name="author" content="hencework" />
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!--Fonts - changed to Source Code Pro-->
		<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
		
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
	</head>
	
	<body data-ng-app="contactApp">
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<!--Container-->
		<div class="pad-zero">
			
			<!--Splitlayout -->
			<div id="splitlayout" class="splitlayout reset-layout">
				
				<!--Intro-->
				<div class="intro">
					
					<!--Left Content Intro-->
					<div class="side side-left">
						
						<!--About Nav-->
						<div class="call-to-action about">
								<i class="fa fa-info fa-2x"></i>	
								<i class="fa fa-times fa-2x opacity-hide"></i>	
								<span class="top"></span>
								<span class="right"></span>
								<span class="bottom"></span>
								<span class="left"></span>
						</div>
						<!--/About Nav-->
						
						<div class="col-lg-8 col-md-9 col-sm-9 col-xs-9 align-center content-wrap">
						
						<!--Logo-->
						<div class="logo align-center text-left"><img src="custom/img/logo_1.png" alt="logo">
						</div>
						<!--/Logo-->
						
						<!--main content-->
						<div class="main">
							
							<!--Content with Typing Intro-->
							<section id="home" class="section active">
								<div  class="preloader"></div>
								<div class="align-center text-left">
									<span class="small-hr animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="200"></span>
									<p class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="300" style="color: #067a3b">We are busy working on something awesome.</p>
									<div class="type-wrap text-left">
										<h1  class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="900"><span id="typed" style="color: #067a3b;"></span></h1>
									</div>
									
									<div class="notify-btn main-menu">
										<a  href="#contact_fullname" class="btn btn-default animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="button-label text-left">Register</span><span class="arrow-wrap"><span class="arrow"></span></span></a>
									</div>
								</div>		
							</section>
							<!--/Content with Typing Intro-->
							
							<!-- Notify Full Name Form-->
							<section id="contact_fullname" class="section text-left">
								<div  class="preloader"></div>	
								<div class="main-menu">
									<a class="close-notify black" href="#home" data-animation="fadeInDown" data-animation-delay="900" data-out-animation="fadeOutUp" data-out-animation-delay="100">
										<div class="call-to-action">
											<i class="fa fa-times fa-2x"></i>	
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
										</div>
									</a>
								</div>
								
								<!--CONTENT CHANGED & <br> ADDED-->								
								<div class="notify-wrap">
									<h3 class="wellcome-text textGreen" data-animation="fadeInLeft" data-animation-delay="900" data-out-animation="fadeOutLeft" data-out-animation-delay="100" data-ng-bind="notifyFullname || 'Full Legal Name..'">Please input Full Legal Name</h3>
									<!-- <form id="notifyMe" class="contact-form" action="" method="post"> -->
										<div class="input-wrap" data-animation="fadeInLeft" data-animation-delay="100" data-out-animation="fadeOutLeft" data-out-animation-delay="900">
											<input  data-ng-model="notifyFullname" class="col-lg-10  align-center form-control input input__field input__field--hoshi notify-input-box textGreen" name="fullname" id="fullname" placeholder="Full Legal Name"  type="text">
											<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>	
										<div class="notify-btn main-menu">
											<a  href="#contact_email" class="btn btn-default animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="arrow-wrap" style="margin-left: 8px; margin-top: 4px;"><span class="arrow"></span></span></a>
										</div>
									<!-- </form> -->
								</div>
							</section>
							<!--/Notify Full Name Form-->

							<!-- Notify Email Form-->
							<section id="contact_email" class="section text-left">
								<div  class="preloader"></div>	
								<div class="main-menu">
									<a class="close-notify black" href="#home" data-animation="fadeInDown" data-animation-delay="900" data-out-animation="fadeOutUp" data-out-animation-delay="100">
										<div class="call-to-action">
											<i class="fa fa-times fa-2x"></i>	
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
										</div>
									</a>
								</div>
								
								<!--CONTENT CHANGED & <br> ADDED-->								
								<div class="notify-wrap">
									<h3 class="wellcome-text textGreen" data-animation="fadeInLeft" data-animation-delay="900" data-out-animation="fadeOutLeft" data-out-animation-delay="100" data-ng-bind="notifyEmail || 'Email Address..'">Please input Email Address</h3>
									<!-- <form id="notifyMe" class="contact-form" action="" method="post"> -->
										<div class="input-wrap" data-animation="fadeInLeft" data-animation-delay="100" data-out-animation="fadeOutLeft" data-out-animation-delay="900">
											<input  data-ng-model="notifyEmail" class="col-lg-10  align-center form-control input input__field input__field--hoshi notify-input-box textGreen" name="email" id="email" placeholder="Email"  type="text">
											<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>	
										<div class="notify-btn main-menu">
											<a href="#contact_country" style="background-color: black !important;" class="btn animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="arrow-wrap" style="margin-left: 8px; margin-top: 4px;"><span class="arrow"></span></span></a>
										</div>
									<!-- </form> -->
								</div>
							</section>
							<!--/Notify Email Form-->

							<!-- Notify Country Form-->
							<section id="contact_country" class="section text-left">
								<div  class="preloader"></div>	
								<div class="main-menu">
									<a class="close-notify black" href="#home" data-animation="fadeInDown" data-animation-delay="900" data-out-animation="fadeOutUp" data-out-animation-delay="100">
										<div class="call-to-action">
											<i class="fa fa-times fa-2x"></i>	
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
										</div>
									</a>
								</div>
								
								<!--CONTENT CHANGED & <br> ADDED-->								
								<div class="notify-wrap">
									<h3 class="wellcome-text textGreen" data-animation="fadeInLeft" data-animation-delay="900" data-out-animation="fadeOutLeft" data-out-animation-delay="100" data-ng-bind="notifyCountry || 'Country...'">Please input Email Address</h3>
									<!-- <form id="notifyMe" class="contact-form" action="" method="post"> -->
										<div class="input-wrap" data-animation="fadeInLeft" data-animation-delay="100" data-out-animation="fadeOutLeft" data-out-animation-delay="900">
											<select data-ng-model="notifyCountry" class="col-lg-10  align-center form-control input input__field input__field--hoshi notify-input-box textGreen" name="country" id="country" placeholder="Country" id="country">
												<option>France</option>
												<option>Australia</option>
												<option>Russia</option>
											</select>
											<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>	
										<div class="notify-btn main-menu">
											<a href="#contact_city" style="background-color: black !important;" class="btn animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="arrow-wrap" style="margin-left: 8px; margin-top: 4px;"><span class="arrow"></span></span></a>
										</div>
									<!-- </form> -->
								</div>
							</section>
							<!--/Notify Country Form-->

							<!-- Notify City Form-->
							<section id="contact_city" class="section text-left">
								<div  class="preloader"></div>	
								<div class="main-menu">
									<a class="close-notify black" href="#home" data-animation="fadeInDown" data-animation-delay="900" data-out-animation="fadeOutUp" data-out-animation-delay="100">
										<div class="call-to-action">
											<i class="fa fa-times fa-2x"></i>	
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
										</div>
									</a>
								</div>
								
								<!--CONTENT CHANGED & <br> ADDED-->								
								<div class="notify-wrap">
									<h3 class="wellcome-text textGreen" data-animation="fadeInLeft" data-animation-delay="900" data-out-animation="fadeOutLeft" data-out-animation-delay="100" data-ng-bind="notifyCity || 'City...'">Please input Email Address</h3>
									<!-- <form id="notifyMe" class="contact-form" action="" method="post"> -->
										<div class="input-wrap" data-animation="fadeInLeft" data-animation-delay="100" data-out-animation="fadeOutLeft" data-out-animation-delay="900">
											<select data-ng-model="notifyCity" class="col-lg-10  align-center form-control input input__field input__field--hoshi notify-input-box textGreen" name="city" id="city" placeholder="City" id="city">
												<option>Paris</option>
												<option>Sydney</option>
												<option>Moscow</option>
											</select>
											<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>	
										<div class="notify-btn main-menu">
											<a href="#contact_success" style="background-color: black !important;" class="btn animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="arrow-wrap" style="margin-left: 8px; margin-top: 4px;"><span class="arrow"></span></span></a>
										</div>
									<!-- </form> -->
								</div>
							</section>
							<!--/Notify City Form-->

							<!-- Notify Success Form-->
							<section id="contact_success" class="section text-left">
								<div  class="preloader"></div>	
								<div class="main-menu">
									<a class="close-notify black" href="#home" data-animation="fadeInDown" data-animation-delay="900" data-out-animation="fadeOutUp" data-out-animation-delay="100">
										<div class="call-to-action">
											<i class="fa fa-times fa-2x"></i>	
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
										</div>
									</a>
								</div>
								
								<!--CONTENT CHANGED & <br> ADDED-->								
								<div class="notify-wrap">
									<h3 class="wellcome-text textGreen" data-animation="fadeInLeft" data-animation-delay="900" data-out-animation="fadeOutLeft" data-out-animation-delay="100">Success</h3>
									<!-- <form id="notifyMe" class="contact-form" action="" method="post"> -->
										<div class="input-wrap" data-animation="fadeInLeft" data-animation-delay="100" data-out-animation="fadeOutLeft" data-out-animation-delay="900">
											<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>	
									<!-- </form> -->
								</div>
							</section>
							<!--/Notify Success Form-->
													
							<div class="copyright" style="display: flex; flex-direction: column">
								
								<ul class="social-icons">
									<li>
										<a href="" class="social-icon">
											<i class="fa fa-facebook" style="color: #067a3b;"></i>
										</a>
									</li>
									<li>
										<a href="" class="social-icon">
											<i class="fa fa-instagram" style="color: #067a3b;"></i>
										</a>
									</li>
									<li>
										<a href="" class="social-icon">
											<i class="fa fa-youtube-play" style="color: #067a3b;"></i>
										</a>
									</li>
									<li>
										<a href="" class="social-icon">
											<i class="fa fa-twitter" style="color: #067a3b;"></i>
										</a>
									</li>
								</ul>
								<p style="margin-left: 4px; margin-top: 10px; color: #067a3b">Nipify ™ powered by KPVE Group</p>
							</div>
						</div>
						<!--/main content-->
						
						</div>
					</div>
					<!--/Left Content Intro-->
					
					<!--Right Content Intro-->
					<div class="side side-right">
						
						<!--slider image-->
						<ul class="cb-slideshow">
							<li><span>Image 01</span></li>
						</ul>
						<!--/slider image-->
						
						<!--Contect Nav-->
						<div class="call-to-action contact">
								<i class="fa fa-envelope fa-2x"></i>
								<i class="fa fa-times fa-2x opacity-hide"></i>
								<span class="top"></span>
								<span class="right"></span>
								<span class="bottom"></span>
								<span class="left"></span>
						</div>
						<!--/Contect Nav-->
						
						<div class="counter-content">
							<div class="col-lg-8 col-md-9 col-sm-9 col-xs-9 align-center text-left">
								<p class="tagline">Connect with talent from around the world</p>
								
								<!--Counter-->
								<div id="countdown">
								  <span class="days">00</span>
								</div>
								<span class="small-hr"></span>
								<span class="remain-days">More Days</span>
								<!--/Counter-->
								
							</div>	
						</div>
					<div class="trans-overlay-dark"></div>	
					</div>
					<!--/Right Content Intro-->
				</div>
				<!--/Intro-->
				
				<!--About Section-->
				<div class="page page-left">
					<div  class="page-inner full-height">
						<div class="container align-center detail-info">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3">
									<h3>About</h3>
								</div>	
								<div class="col-lg-9 col-md-8 col-sm-8 col-xs-9">
									<p class="tagline">Introducing Nipify! The worlds new and innovative freelancer platform launching in 2023</p>
									<span class="small-hr"></span>
									<p class="align-center">We're combining years of freelancing experience with a team of highly skilled web experts to bring you a new fast and easy way to connect with working professionals from around the world. Unlike other platforms we aim to provide more profits to our freelancers and more control over the quality of work</p>
									
									<!--Client Slider-->
									<div id="qualities">
										<div class="qualities"> 
											<div class="item" >
												<span class="fa-qual"><img src="custom/img/tech4.png" /></span>
												<span class="qual-tag"> Secure</span>
												<span class="qual-desc">
													We prioritise security and strive to ensure a safe and reliable working platform
												</span>
											</div>
											<div class="item" >
												<span class="fa-qual"><img src="custom/img/tech1.png" /></span>
												<span class="qual-tag">Global Connections</span>
												<span class="qual-desc">
													Connect with likeminded, talented individuals from around the world
												</span>
											</div>
											<div class="item" >
												<span class="fa-qual"><img src="custom/img/tech3.png" /></span>
												<span class="qual-tag"> Higher Earnings</span>
												<span class="qual-desc">
													Guaranteed higher earnings with our platform than our competitors
												</span>
											</div>
											<div class="item" >
												<span class="fa-qual"><img src="custom/img/tech2.png" /></span>
												<span class="qual-tag"> 24/7 Support</span>
												<span class="qual-desc">
													Our Nipify support staff are available to support you 24/7
												</span>
											</div>
										</div>
									</div>
									<!--/Client Slider-->
								</div>	
								<!--Team Slider-->
								<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-7 col-md-8 col-sm-8 col-xs-9 team-sec">
									<p class="tagline">Our Team</p>
									<span class="small-hr"></span>
									<div id="team">
										<div class="team"> 
											<div class="item">
												<div class="team-img-wrap">
													<img src="custom/img/tech5.png" alt="team1" />
												</div>	
												<span class="name"> Smart App </span>
												<span class="desgText"> Nipify will be available on all smart platform devices </span>
											</div>
											<div class="item" >
												<div class="team-img-wrap">
													<img src="custom/img/tech6.png" alt="team1" />
												</div>	
												<span class="name"> Blockchain </span>
												<span class="desgText"> We aim to utilise the blockchain technology to provide maximum security and proof of work	<span>
											</div>
										</div>
									</div>
								</div>	
								<!--/Team Slider-->
							</div>
						</div>
						<div class="trans-overlay-dark-about"></div>
					</div>		
				</div>
				<!--/About Section-->
				
				<!--Contact Section-->
				<div class="page page-right">
					<div  class="page-inner full-height">
						<div class="container align-center detail-info">
							<div class="row">
							<div data-ng-controller="ContactController" class="panel-body">
								<h3 class="col-lg-12 col-xs-9 textGreen" data-ng-bind="formData.inputName||'Hello..'" >Hello..</h3>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
									<form data-ng-submit="submit(contactform, $event)"  name="contactform" method="post" class="form-horizontal" role="form">
										<div class="form-group input--hoshi" data-ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi textGreen" id="inputName" name="inputName" placeholder="Name" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
											</div>	
										</div>
										<div class="form-group  input--hoshi" data-ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
											<div class="input-wrap">
												<input data-ng-model="formData.inputEmail" type="email" class="form-control input input__field input__field--hoshi textGreen" placeholder="Your Email" id="inputEmail" name="inputEmail" required>
												<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
											</div>	
										</div>
										<div class="form-group  input--hoshi" data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
											<div class="input-wrap">
												<textarea data-ng-model="formData.inputMessage" class="form-control input input__field input__field--hoshi textGreen" rows="4" id="inputMessage" name="inputMessage" placeholder="message" required></textarea>
												<label class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
											</div>	
										</div>
										<div class="form-group">
											<div class="align-center">
												<div class="notify-btn main-menu">
													<a  href="#" class="btn btn-default animated fadeInLeft" style="background-color: #067a3b" data-animation="fadeInLeft" data-animation-delay="1000" data-out-animation="fadeInLeft" data-out-animation-delay="600" data-toggle="modal" data-target="#notify-my"><span class="arrow-wrap" style="margin-left: 8px; margin-top: 4px;"><span class="arrow"></span></span></a>
												</div>
											</div>
										</div>
									</form>
									<p data-ng-class="result">{{ resultMessage }}</p>
								</div>
								 
							</div>
							</div>
						</div>
							
						<div class="trans-overlay-dark-contact"></div>	
            		</div>
				</div>
				<!--/Contact Section-->
				
			</div>
			<!-- /Splitlayout -->
		
		</div>
		<!-- /Container -->
		
		<!-- Scripts -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/angular.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpSplitLayout.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/app.js"></script>
		<script src="js/controllers.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/input-text.js"></script>
		<script src="js/notifyMe.js"></script>
		<script src="js/jquery.placeholder.js"></script>
		<script src="js/init.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
