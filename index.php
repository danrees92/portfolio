<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daniel Rees | Portfolio</title>
  <meta name="description" content="My name is Dan and I am a Web Developer from Dartford, Kent. Here you can see some examples of my work, ranging from branding to fully functional websites.">
	<meta name="author" content="Daniel Rees">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<!-- Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<!-- Custom JavaScript -->
  <script src="js/scroll-div.js"></script>
  <script src="js/scroll-add-class.js"></script>
  <script src="js/show-effect.js"></script>
  <!-- Google Analytics -->
  <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38212149-1']);
	  _gaq.push(['_setDomainName', 'danielrees.co.uk']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
  </script>
</head>
	<body>
		<!-- Header -->
  	<header class="container-fluid">
  		<div class="container">
	  		<div class="row">
	  			<!-- logo -->
	  			<div class="hidden-xs col-sm-2 col-md-2"><a href="#home" title="Daniel Rees Home"><img src="images/logo.png" alt="Daniel Rees logo" id="logo" /></a></div>
	  			<!-- Nav -->
	  			<div class="col-md-8 col-lg-6 pull-right" id="nav-container">
	  				<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="visible-xs navbar-brand" href="#home"><img src="images/logo-small.png" alt="Daniel Rees logo" id="logo" /></a>
						    </div>

						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav">
						        <li><a href="#home" title="Home">Home</a></li>
						        <li><a href="#about" title="About Me">About Me</a></li>
						        <li><a href="#mywork" title="My Work">My Work</a></li>
						        <li><a href="#contact" title="Contact">Contact</a></li>
						      </ul>
						    </div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>
	  			</div>
	  		</div>
	  	</div>
  	</header>

  	<!-- Home -->
  	<div class="container-fluid slider-cont" id="home">
  		<div class="row">
  			<!-- Slider -->
				<ul class="slider">
					<li><img src="images/lh-slide.jpg" alt="London's Handyman Website Slide" /></li>
					<li><img src="images/lg-slide.jpg" alt="Lovely Grubbly Website Slide" /></li>
					<li><img src="images/sm-slide.jpg" alt="Senior Moments Website Slide" /></li>
				</ul>
			</div>
			<!-- Overlay -->
			<div class="row">
				<div id="banner-overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h1>Daniel Rees</h1>
								<p>I am a passionate Web Developer, always keen to improve on my skill set.</p>
								<a href="#about" title="Find out more" class="btn btn-primary">Find out more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Home -->

		<!-- About Me -->
		<div class="container" id="about">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>About Me</h1>
					<p>Hello and welcome! My name is Dan and I am a Web Developer from Dartford, Kent.</p>
					<p>As passionate as I am about building websites, I also enjoy starting from scratch with a blank Photoshop canvas and designing a website. Usually in this industry, you are one or the other, but I like to mix it up a little.</p>
					<p>In 2013, I graduated from the University of Greenwich with a 2:1 after three years of studying Web Technologies.</p>
					<p>Whether it is design or development, I am very keen to keep up to date with the latest trends and technologies. I will do what I can to study new industry trends, and implement them into my work flow as quickly as possible.</p>
					<a href="#mywork" title="View my work" class="btn btn-primary">View my work</a>
				</div>
			</div>
		</div><!-- End About me -->

		<!-- My Work -->
		<div class="container-fluid" id="mywork">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>My Work</h1>
					</div>
				</div>
				<div class="row">

					<!-- Londons Handyman -->
					<div class="col-md-6 col-lg-4 text-center" id="londons-handyman">
						<div class="work-cont">
							<img src="images/londons-handyman.jpg" alt="Londons Handyman website being displayed on Mobile and Desktop." />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- Londons Handyman Details -->
						<div class="col-md-6 col-lg-8 work-info" id="londons-handyman-details">
							<!-- Details -->
							<h1>London's Handyman</h1>
							<p>A handyman based in Welling, Kent required a website to challenge his competitors online.</p>
							<p>I built a responsive website and coded it for Concrete 5 CMS so they can update content on a regular basis. I also put together an instant quote option where users can get a price depending on how long they want to hire a handyman.</p>
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Responsive Design</li>
								<li>Front End Development</li>
								<li>Content Management System</li>
								<li>Bespoke Quote Application</li>
								<li>Copywriting</li>
								<li>SEO</li>
								<li>Social Media</li>
							</ul>
							<!-- Options -->
							<a href="http://londonshandyman.co.uk" class="btn btn-primary" title="Visit the London's Handyman website" target="_blank">Visit Site</a>

							<!-- Close -->
							<button id="londons-handyman-close" class="close-btn" title="Close">Close</button>
						</div>

					<!-- Senior Moments -->
					<div class="col-md-6 col-lg-4 text-center" id="senior-moments">
						<div class="work-cont">
							<img src="images/senior-moments.jpg" alt="Senior Moments Logo" />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- Senior Moments Details -->
						<div class="col-md-12 col-lg-12 work-info" id="senior-moments-details">
							<!-- Details -->
							<h1>Senior Moments</h1>
							<p>A local handyman required a website to expand his business online. With his target audience being elderly people, it was important to produce a clean, image heavy design.</p>
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Responsive Design</li>
								<li>Front End Development</li>
								<li>Content Management System</li>
							</ul>
							<!-- Options -->
							<a href="http://senior-moments.co.uk" class="btn btn-primary" title="Visit the Senior Moments website" target="_blank">Visit Site</a>
							<!-- Close -->
							<button id="senior-moments-close" class="close-btn" title="Close">Close</button>
						</div>

					<!-- 4 Corner Electrical Services -->
					<div class="col-md-6 col-lg-4 text-center" id="4-corner">
						<div class="work-cont">
							<img src="images/4-corner.jpg" alt="4 Corner Electrical Services website on a Mobile and Desktop device." />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- 4 Corner Electrical Servcies Details -->
						<div class="col-md-12 col-lg-12 work-info" id="4-corner-details">
							<!-- Details -->
							<h1>4 Corner Electrical Services</h1>
							<p>4 Corner Electrical Services required a fully responsive website for their business. A graphic designer worked on the look and feel of the website, and passed it over to me to develop their design.</p>
							<p>They requried a content management system, so I built a custom theme for Concrete 5, allowing the client to update the website when needed.</p>
	
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Responsive Design</li>
								<li>Front End Development</li>
								<li>Content Management System</li>
							</ul>
							<!-- Options -->
							<a href="http://4cornerelectricalservices.co.uk/" class="btn btn-primary" title="Visit the 4 Corner Electrical Services website" target="_blank">Visit Site</a>
							<!-- Close -->
							<button id="4-corner-close" class="close-btn" title="Close">Close</button>
						</div>

					<!-- Lovely Grubbly -->
					<div class="col-md-6 col-lg-4 text-center" id="lovely-grubbly">
						<div class="work-cont">
							<img src="images/lovely-grubbly.jpg" alt="Lovely Grubbly Website Design" />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- lovely Grubbly Details -->
						<div class="col-md-8 col-lg-8 work-info" id="lovely-grubbly-details">
							<!-- Details -->
							<h1>Lovely Grubbly</h1>
							<p>Lovely Grubbly are a catering franchise located at Dartford Bowls Club. They asked me to design them a website offering their services at the bowls club, and also for their mobile catering services for parties and weddings etc.</p>
							<p>As a part of this project, I also designed their branding, logo and their new menus</p>
							<p>This project is currently on going, and a link to the finished website will be available soon.</p>
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Responsive Design</li>
								<li>Logo Design/Branding</li>
								<li>Front End Development</li>
								<li>Menu Design</li>
							</ul>
							<!-- Close -->
							<button id="lovely-grubbly-close" class="close-btn" title="Close">Close</button>
						</div>

					<!-- Social Advisors Services -->
					<div class="col-md-6 col-lg-4 text-center" id="social-advisors">
						<div class="work-cont">
							<img src="images/social-advisors.jpg" alt="Social Advisors Logo" />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- Social Advisors Details -->
						<div class="col-md-12 col-lg-12 work-info" id="social-advisors-details">
							<!-- Details -->
							<h1>Social Advisors</h1>
							<p>Social Advisors offer content writing services to business to enhance their Social Media activity. They approached myself and a friend to help them style their WordPress website, and help them set up with MailChimp and integrate this with their website.</p>
							<p>Although we didn't re-design or develop their site, we gave them advice on their site, and helped them to move forward and have a better understanding of maintaining their website in WordPress. We also assisted them with hosting issues they were having at the time.</p>
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Wordpress Support</li>
								<li>Minor Front End Development</li>
							</ul>
							<!-- Close -->
							<button id="social-advisors-close" class="close-btn" title="Close">Close</button>
						</div>

					<!-- Home Refurb Services -->
					<div class="col-md-6 col-lg-4 text-center" id="home-refurb">
						<div class="work-cont">
							<img src="images/home-refurb.jpg" alt="Home Refurb Logo" />
							<!-- Overlay -->
						  <div class="hidden-xs hidden-sm hidden-md overbox">
						    <div class="title overtext"> View Project Details </div>
						  </div>
						</div>
					</div>
						<!-- 4 Corner Electrical Servcies Details -->
						<div class="col-md-12 col-lg-12 work-info" id="home-refurb-details">
							<!-- Details -->
							<h1>Home Refurb</h1>
							<p>Home Refurb are a small company based in South East London, specialising in high quality home refurbishment. They were potentially looking for a new brand identity, and asked me to mock up a new logo for them.</p>
							<!-- Services -->
							<h2>Services Include</h2>
							<ul>
								<li>Logo Design</li>
							</ul>
							<!-- Close -->
							<button id="home-refurb-close" class="close-btn" title="Close">Close</button>
						</div>

				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="#contact" title="Contact me" class="btn btn-primary">Contact me</a>
					</div>
				</div>
			</div>
			
		</div><!-- End My Work -->

		<!-- Contact -->
		<div class="container-fluid" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>Send A Message</h3>
						<?php
							//Set Variables
							$name = $_POST['name'];
							$email = $_POST['email'];
							$mes = $_POST['message'];

					  	if(isset($_POST['submit'])){
					  		mail ("contact@danielrees.co.uk", "Daniel Rees Portfolio", $mes, "From:" . $email);
								echo '<div class="success">Thank you for your message. I will get back to you shortly.</div>';
					  	}
				  	?>
						<form method="post" action="index.php#contact" id="contactform">
						  <div class="form-group">
						    <div class="col-md-2"><label for="Name">Name</label></div>
						    <div class="col-md-8"><input type="text" class="form-control" id="name" name="name" placeholder=""></div>
						  </div>
						  <div class="form-group">
						    <div class="col-md-2"><label for="Email">Email</label></div>
						    <div class="col-md-8"><input type="email" class="form-control" id="email" name="email" placeholder=""></div>
						  </div>
						  <div class="form-group">
						    <div class="col-md-2"><label for="Message">Message</label></div>
						    <div class="col-md-8"><input type="textarea" class="form-control" id="message" name="message" placeholder=""></div>
						  </div>
						  <div class="col-md-10">
						  	<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
						  </div>
						</form>
					</div>
					<div class="col-md-6" id="social-media">
						<h3>Social Media</h3>
						<ul class="list-inline">
							<li><a href="https://www.facebook.com/danielreeswebdeveloper" title="Find me on Facebook" target="_blank"><div class="sm-icon" id="facebook"></div></a></li>
							<li><a href="https://twitter.com/DanielReesWD" title="Follow me on Twitter" target="_blank"><div class="sm-icon" id="twitter"></div></a></li>
							<li><a href="http://uk.linkedin.com/in/danielrees92" title="Connect with me on LinkedIn" target="_blank"><div class="sm-icon" id="linkedin"></div></a></li>
							<li><a href="https://instagram.com/danrees92/" title="Follow me on Instagram" target="_blank"><div class="sm-icon" id="instagram"></div></a></li>
						</ul>
						<h3 style="margin-bottom: 0;">Contact Me</h3>
						<div class="contact-details">
							<a href="mailto:contact@danielrees.co.uk" title="Email me today"><span style="margin-right: 15px;"><img src="images/email-icon.png"></span>contact@danielrees.co.uk</a>
						</div>
						<div class="contact-details">
							<a href="tel:07921191281" title="Call me today"><span style="margin-right: 15px;"><img src="images/phone-icon.png"></span>07921 191 281</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Contact -->

		<!-- Footer -->
		<footer class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>&copy; Copyright | <?php echo date("Y"); ?> Daniel Rees</p>
				</div>
			</div>
		</footer>

  	<!-- Slick JS -->
  	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript">
	    $(document).ready(function(){
	      $('.slider').slick({
	        dots: false,
				  infinite: true,
				  speed: 300,
				  fade: true,
				  cssEase: 'linear',
				  autoplay: true
	      });
	    });
	  </script>
	  <script type="text/javascript">
	    $(document).ready(function(){
	      $('.work-slider').slick({
	        dots: false,
				  infinite: true,
				  speed: 300,
				  fade: true,
				  cssEase: 'linear',
				  autoplay: true
	      });
	    });
	  </script>
  	<!-- Bootstrap JS -->  
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/respond.min.js"></script>
	</body>
</html>