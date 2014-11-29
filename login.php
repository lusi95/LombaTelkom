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
		
	<div class="auth-form" id="login">
		<form accept-charset="UTF-8" action="handler_login.php" onsubmit = "checkLogin()" method="post">
			<div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓">
				<input name="authenticity_token" type="hidden" value="inyb/ZbDKp8kbyeqbbVGzymh/zVKWivHWvHRA127Hkb3Mc9K+8MUYsLQ0L8YtgWMHk6bPujJu8HctOZFku7BrA==">
			</div>
			<div class="auth-form-header">
				<h1 style = "background-color: #7a8dcb;">Masuk</h1>
			</div>
			<div class="auth-form-body">
				<label for="login_field" style = "margin-top: 10px">
				  Email
				</label><br>
				<input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="input-block" id="login_field" name="login" tabindex="1" type="text"><br>
				<label for="password">
				  Password <a href="/password_reset">(Lupa Password?)</a>
				</label><br>
				<input class="input-block" id="password" name="password" tabindex="2" type="password"><br>
				<input class="button" data-disable-with="Signing in…" name="commit" tabindex="3" type="submit" value="Masuk">
			</div>
		</form>
	</div>
			

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					&copy BoM Team - 2014
				</div>
			</div>
			
		</div>
	</body>
</html>