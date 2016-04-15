<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form'; 
		$to = 'jwalkerlyle@gmail.com'; 
		$subject = 'Message from walkerlyle.com ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You, I will be in touch shortly!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Walker Lyle</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/responsive.css" />
    
    <!-- My Styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css"/>

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="images/favicon.ico">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

    <!-- Pre Loader -->
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
    
    
    <!--Header-->
    <header id="header">
        <nav class="navbar st-navbar navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="index.html">Walker Lyle</a>
            </div>
            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#services">Experience</a></li>
                    <li><a href="#our-works">Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="http://southhousetunes.com" target="_blank">Blog</a></li>
                    <li><a href="http://donjuanpedro.github.io/" target="_blank">GitHub</a></li>
                </ul>
            </div>
          </div>
        </nav>
    </header>
    
    <!--Slider-->
    
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active walker">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1>I am</h1>
                                <h2>your next storyteller</h2>
                                <p>for the masses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item junebug">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1>I am</h1>
                                <h2>your next developer</h2>
                                <p>from the ground up.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item brisket">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1>I am</h1>
                                <h2>your next creative mind</h2>
                                <p>shaping, moving, crafting.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item  river">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-sm-7">
                                <h1>I am</h1>
                                <h2>your next visionary</h2>
                                <p>beyond the norm.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    
    <!--Experience thus far-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Experience thus far</h1>
                        <span class="st-border"></span>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-desktop"></i>Account Management</h2>
                    <p>Celeb-status, personal touch.</p>
                </div>
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-code"></i>Web Development </h2>
                    <p>Currently training / currently mastering.</p>
                </div>
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-cogs"></i>Technical Support</h2>
                    <p>Logistics, software, hardware, life.</p>
                </div>
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-users"></i>Customer Experience</h2>
                    <p>Tickets, merch, shipping, all with a smile.</p>
                </div>
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-music"></i>Live Events</h2>
                    <p>Festivals, concerts, sound, $</p>
                </div>
                <div class="col-md-4 col-sm-6 st-service funtimes">
                    <h2><i class="fa fa-weixin"></i> Hardware Training</h2>
                    <p>Volunteers, managers, promotors: point & click.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!--Favorite Accounts-->
    <section id="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Favorite Past <i class="fa fa-ticket" aria-hidden="true"></i> Projects</h1>
                        <span class="st-border"></span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/shooter.jpg" alt="Shooter Jennings">
                        </div>
                        <div class="member-info">
                            <h4>Shooter Jennings</h4>
                            <span>VIP</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/down.jpg" alt="Down">
                        </div>
                        <div class="member-info">
                            <h4>Down</h4>
                            <span>VIP</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/vince.jpg" alt="Vince Gill">
                        </div>
                        <div class="member-info">
                            <h4>Vince Gill</h4>
                            <span>Fan Club</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/martina.jpg" alt="Martina McBride">
                        </div>
                        <div class="member-info">
                            <h4>Martina McBride</h4>
                            <span>Fan Club</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/willie.jpg" alt="Martina McBride">
                        </div>
                        <div class="member-info">
                            <h4>Willie Nelson</h4>
                            <span>July 4th Picnic</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/thewho.jpg" alt="Martina McBride">
                        </div>
                        <div class="member-info">
                            <h4>The Who</h4>
                            <span>Fan Club</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/loslonely.jpg" alt="Martina McBride">
                        </div>
                        <div class="member-info">
                            <h4>Los Lonely Boys</h4>
                            <span>Fan Club</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="team-member">
                        <div class="member-image">
                            <img class="img-responsive" src="images/radiohead.jpg" alt="Martina McBride">
                        </div>
                        <div class="member-info">
                            <h4>Radiohead</h4>
                            <span>Fan Club</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Recent Dabblings-->
    
    <section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Recent Dabblings</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">All</a></li>	
							<li><a href="#" data-filter=".recordings">Recordings</a></li>
							<li><a href="#" data-filter=".essays">Essays</a></li>
							<li><a href="#" data-filter=".travel">Travel</a></li>
							<li><a href="#" data-filter=".meats">Craft Meats</a></li>
							<li><a href="#" data-filter=".volunteer">Volunteer</a></li>
						</ul><!--/#portfolio-filter-->
					</div>
					
					<div class="portfolio-items">
						
						
						<div class="col-md-4 col-sm-6 work-grid recordings">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/comingsoon.JPG" alt="Coming Soon">
								<div class="portfolio-overlay">
									<a href="images/comingsoon.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Coming soon...</h5>
									<p>Austin, TX</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid meats">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/ribs.jpg" alt="Ribs">
								<div class="portfolio-overlay">
									<a href="images/ribs.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Ribs del Camino Real</h5>
									<p>mmm...</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid  essays">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/southhousetunes_logo.JPG" alt="southhousetunes">
								<div class="portfolio-overlay">
									<a href="images/southhousetunes_logo.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>south house tunes</h5>
									<p>music essays</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid volunteer">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/floodatx.JPG" alt="">
								<div class="portfolio-overlay">
									<a href="images/floodatx.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>FloodAidTX 2015</h5>
									<p>Box Office Management</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid  meats">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/brisketandfamily.JPG" alt="">
								<div class="portfolio-overlay">
									<a href="images/brisketandfamily.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Brisket and family</h5>
									<p>Austin, TX</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid  recordings">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/kutx.jpg" alt="KUTX">
								<div class="portfolio-overlay">
									<a href="images/kutx.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Live at KUTX</h5>
									<p>Austin, TX</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid  travel">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/pedernales.JPG" alt="">
								<div class="portfolio-overlay">
									<a href="images/pedernales.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Pedernales Falls</h5>
									<p>Texas</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid   volunteer">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/fbcaustin.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/fbcaustin.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>5th Grade Sunday School Teacher</h5>
									<p>FBC Austin, TX</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid recordings">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/westtheos.jpg" alt="West Theos">
								<div class="portfolio-overlay">
									<a href="images/westtheos.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>West Theos</h5>
									<p>Nashville, TN</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid meats travel">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/thanksgivingbrisket.JPG" alt="West Theos">
								<div class="portfolio-overlay">
									<a href="images/thanksgivingbrisket.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Thanksgiving Brisket</h5>
									<p>Bella Vista, AR</p>
								</div>
							</div>	
						</div>
                        
                        
                        <div class="col-md-4 col-sm-6 work-grid travel">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/athens.jpg" alt="West Theos">
								<div class="portfolio-overlay">
									<a href="images/athens.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Kitty</h5>
									<p>Athens, Greece</p>
								</div>
							</div>	
						</div>
                        
                        <div class="col-md-4 col-sm-6 work-grid travel">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/cannon.JPG" alt="West Theos">
								<div class="portfolio-overlay">
									<a href="images/cannon.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Cannon</h5>
									<p>Vicksburg, MS</p>
								</div>
							</div>	
						</div>
						
                        <div class="col-md-4 col-sm-6 work-grid travel">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/williesplace.JPG" alt="Willie's Ranch">
								<div class="portfolio-overlay">
									<a href="images/williesplace.JPG"><i class="fa fa-camera-retro"></i></a>
									<h5>Willie's Ranch</h5>
									<p>Spicewood, TX</p>
								</div>
							</div>	
						</div>
                        
					</div>				
				</div>

			</div>
		</div>
	</section>
    
    <!--About Me-->
    
<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about-us text-center">
						<h4>One riot, one ranger,</h4>
						<p>one Walker. <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
						<a href="https://walkerlyle.bandcamp.com/" class="btn btn-send" target="_blank">Here's some songs too.</a>
					</div>
				</div>
				<div class="col-sm-6 our-office">
					<div id="office-carousel" class="carousel slide" data-ride="carousel">			
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/ranger6.JPG" alt="">
							</div>
							<div class="item">
								<img src="images/monks.jpg" alt="">			
							</div>
							<div class="item">
								<img src="images/budget.jpg" alt="">			
							</div>
							
							<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>		
					</div> <!--/#office-carousel--> 
				</div>
			</div>
		</div>
	</section>
    
    <!--Quotes-->
    
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="overlay"></div>
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <div class="st-testimonials">
                        <div class="item active text-center">
							<p>"And to love life through labour is to be intimate with life's inmost secret."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Kahlil Gibran</h5>
							</div>
						</div>

						<div class="item text-center">
							<p>"Mark my words, I'll make changes to earth."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Scott Hutchison</h5>
								<span>Frightened Rabbit</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Everybody's lost but me."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Indiana Jones</h5>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Contact Me-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Contact me</h1>
                        <span class="st-border"></span>
                    </div>
                </div>
                <div class="col-sm-4 contact-info">
					<p class="contact-content">Looking forward to hearing from you!</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>Austin, TX</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>southhousetunes@gmail.com</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>southhousetunes.com</strong></p>
				</div>
                <div class="col-sm-7 col-sm-offset-1">
					
<form id="send_message" class="form-horizontal" role="form" method="post" action="#send_message">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
		</div>
	</div>
</form> 
				</div>
            </div>
        </div>
    </section>
    
    <!--Footer-->
    <footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Follow me:</span>
					<a href="https://www.facebook.com/walker.lyle.9" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/JWalkerLyle" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://plus.google.com/111533481879256461013/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; 2016 <a href="http://www.walkerlyle.com">south house design</a>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
    
    <!--Scroll up!-->
    <div class="scroll-up">
        <ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
    </div>

	
	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/animate-scroll.js"></script><!--Animiate Scroll-->
    <!-- Scripts -->


</body>
</html>