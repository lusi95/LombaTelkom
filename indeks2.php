<!DOCTYPE HTML>
<html>
	<head>
		<title>BoMBox - Indeks</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>!-->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/new.css" />
		
		<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">!-->
		<script src="jquery-1.9.1.js"></script>
		<script src="jquery-ui.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<script type="text/javascript" src="js.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/styleLogin.css" rel="stylesheet">
	
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
		<link rel="stylesheet" href="js/woothemes-FlexSlider-ca347d4/flexslider.css">
		<script src="js/woothemes-FlexSlider-ca347d4/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<script src="js/woothemes-FlexSlider-ca347d4/demo/js/jquery.easing.js"></script>
		<script src="js/woothemes-FlexSlider-ca347d4/demo/js/jquery.mousewheel.js"></script>
		<script defer src="js/woothemes-FlexSlider-ca347d4/demo/js/demo.js"></script>
		
		<script>
			jQuery(document).ready(function() {
				jQuery('#tabs #tab-links a').on('click', function(e)  {
					var currentAttrValue = jQuery(this).attr('href');		 
						// Show/Hide Tabs
					jQuery('#tabs ' + currentAttrValue).show().siblings().hide();
						// Change/remove current tab to active
					jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
						e.preventDefault();
				});
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
		
		<div id="nav">
			<ul>
				<li id = "logo1"><a href = "indeks.php"><img src = "images/logo copy.png"></a></li>
				<li class = "headertext"><a href = "login.php">Masuk</a></li>
			</ul>
			<input type="text" name="search" class="textfield" placeholder="Search">
		</div>
		
		<div class="marketing-section-signup">
				<form accept-charset="UTF-8" action="/join" class="form-signup-home js-form-signup-home" method="post">
				<div style="margin:0;padding:0;display:inline">
					<input name="utf8" type="hidden" value="✓">
					<input name="authenticity_token" type="hidden" value="nl3w6bsypsBwNbX+vXvYzSPvZNkKaGP2Pv6JxjAlgt+3F0HpOEi3tb7yn9ljZ/uxrJsZ1ksxpW5MXc2yL+gu3w==">
				</div>
			
				<dl class="form">
					<dd>
						<input type="text" name="user[login]" class="textfield" placeholder="Username" data-autocheck-url="/signup_check/username" autofocus="">
					</dd>
				</dl>
				
				<dl class="form">
					<dd>
						<input type="text" name="user[email]" class="textfield js-email-notice-trigger" placeholder="Your email" data-autocheck-url="/signup_check/email">
					</dd>
				</dl>
				
				<dl class="form">
					<dd>
						<input type="password" name="user[password]" class="textfield" placeholder="Password" data-autocheck-url="/signup_check/password">
					</dd>
				</dl>
				
				<dl class="form">
					<dd>
						<input type="password" name="user[re-password]" class="textfield" placeholder="Re-Enter Password" data-autocheck-url="/signup_check/re-password">
					</dd>
				</dl>
				
				<button class="button primary button-block" type="submit">Daftar untuk BoMBox</button>
				</form>
		
				<h1 id="heading">Tunjukan Karya Terbaikmu!</h1>
				<p id="subheading">Marilah membangun Indonesia lebih baik dengan kreativitas yang kamu miliki!</p>
		</div>
		
		<div id="tabs">
			<ul id = "tab-links">
				<li class = "active"><a href="#tabs-1">Kreativitas</a></li>
				<li><a href="#tabs-2">Event</a></li>
			</ul>
			<hr></hr>
			<div class="tab-content">
				<div id="tabs-1" class = "tab-active">
					<div class="templatemo_portfolio" id="templatemo_portfolio">
						<h2>Karya Terbaik Kita</h2>
					<p></p>
						<div class="container">
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/1.jpg" alt="portfolio 1">
											<div class="overlay-p">
												<a href="images/portfolio/1.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>BluesMates emang the best!!</li>
														<li></li>
														<li>-Stella Patricia-</li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/2.jpg" alt="portfolio 2">
											<div class="overlay-p">
												<a href="images/portfolio/2.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Sometimes, we just to coward to go foward</li>
														<li></li>
														<li>-Lusiana Wijayanti-</li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/3.jpg" alt="portfolio 3">
											<div class="overlay-p">
												<a href="images/portfolio/3.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Forest</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/4.jpg" alt="portfolio 4">
											<div class="overlay-p">
												<a href="images/portfolio/4.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Black and White</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						 </div>
						  <div class="container">
								<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
									<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/5.jpg" alt="portfolio 5">
											<div class="overlay-p">
												<a href="images/portfolio/5.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Rotary</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/6.jpg" alt="portfolio 6">
											<div class="overlay-p">
												<a href="images/portfolio/6.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Rotary</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/7.jpg" alt="portfolio 7">
											<div class="overlay-p">
												<a href="images/portfolio/7.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Blue Sky</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/8.jpg" alt="portfolio 8">
											<div class="overlay-p">
												<a href="images/portfolio/8.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Black and White</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>
								</div>
							</div>
					</div>
				</div>
							<br>
				<div id="tabs-2" class = "tab">
					<div class="templatemo_portfolio" id="templatemo_portfolio">
						<h2>Event Terpopuler</h2>
					<p></p>
						<div class="container">
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/event/bestappid.png" alt="BEST APPS.ID">
											<div class="overlay-p">
												<a href="images/event/bestappid.png" data-rel="lightbox[portfolio]">
													<ul>
														<li>BEST APPS.ID 2014</li>
														<li></li>
														<li>-Stella Patricia-</li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/event/jogathonithb.jpg" alt="Jog A Thon 2014">
											<div class="overlay-p">
												<a href="images/event/jogathonithb.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Jog A Thon ITHB 2014</li>
														<li></li>
														<li>-Lusiana Wijayanti-</li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/event/jazznotjazz.jpg" alt="portfolio 3">
											<div class="overlay-p">
												<a href="images/event/jazznotjazz.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Come to Jazz no Jazz !!</li>
														<li></li>
														<li>-Febrianda Rifqi-</li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/event/glowrunitb.jpg" alt="Glow Run ITB">
											<div class="overlay-p">
												<a href="images/event/glowrunitb.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Let's Join Our Fun Run</li>
														<li>-Edo Fanuel-</li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						 </div>
						  <div class="container">
								<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
									<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/5.jpg" alt="portfolio 5">
											<div class="overlay-p">
												<a href="images/portfolio/5.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Rotary</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/6.jpg" alt="portfolio 6">
											<div class="overlay-p">
												<a href="images/portfolio/6.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Rotary</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/7.jpg" alt="portfolio 7">
											<div class="overlay-p">
												<a href="images/portfolio/7.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Blue Sky</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>

						  </div>
						  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
							<div class="portfolio-item">
										<div class="portfolio-thumb">
											<img src="images/portfolio/8.jpg" alt="portfolio 8">
											<div class="overlay-p">
												<a href="images/portfolio/8.jpg" data-rel="lightbox[portfolio]">
													<ul>
														<li>Black and White</li>
														<li></li>
														<li></li>
													</ul>
												</a>
											</div>
										</div> <!-- /.portfolio-thumb -->
									</div>
								</div>
							</div>
					</div>
				</div>
				</div>
				<br>
			</div>
		</div>
    <!--Our Portfolio End-->
			

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					&copy BoM Team - 2014
				</div>
			</div>
			
		</div>
	</body>
</html>