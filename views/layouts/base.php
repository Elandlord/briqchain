<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	
	<title><?php echo $this->pagina_titel; ?></title>
	<meta name="description" content="<?php echo $this->meta_omschrijving; ?>">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url ?>/static/img/favicon.png">
	
	<?php foreach($this->styles as $style): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $style; ?>">
	<?php endforeach; ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:image" content="<?php echo $this->url ?>/static/img/facebook_preview.png"> 
	<style>
		#horizontalmenu li ul {
			display: none;
			position: absolute;
			background: white;
			border-radius: 8px;
			box-shadow: 5px 8px 35px 2.8px rgba(43, 106, 130, 0.16);
			padding-left: 10px;
		}
		
		#horizontalmenu li ul li a {
			color: #36349F !important;
		}

		#horizontalmenu li ul li {
			display: block;
			
		}

		@media screen and (max-width: 1001px) { 
			#horizontalmenu li ul {
				padding: 40px;
			}	
		}


	</style>
</head>
<body<?php if($this->lightBlue === true): ?> class="body--light-blue"<?php endif; ?>>
	<?php echo $this->yieldView(); ?>
	
	<?php if(isset($this->config['analytics'])): ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', '<?php echo $this->config['analytics']; ?>', 'auto');
		ga('send', 'pageview');
	</script>
	<?php endif; ?>
	
	<?php if($this->scripts): ?>
	<?php foreach($this->scripts as $scripts): ?>
	<script type="text/javascript" src="<?php echo $scripts; ?>"></script>
	<?php endforeach; ?>
	<?php endif; ?>
	
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5a33ca3df4461b0b4ef88ee0/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>

	<script
	src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	crossorigin="anonymous"></script>

	<script>

		let windowHeight = $( window ).width();
		let targetLink = $('#targetLink');
		let dropdown = $('#dropdown');

		if(windowHeight > 1001) {

			targetLink.on('mouseenter', function() {
				dropdown.show();
			});

			targetLink.on('mouseleave', function(event) {
				if(dropdown.is(':hover')) {

				}else {
					dropdown.hide();
				}
			});
			
			setInterval(() => {
				if(dropdown.is(':hover') || targetLink.is(':hover')) {

				}else {
					dropdown.hide();
				}
			}, 1);

		} else {
			targetLink.on('click', function() {
				if(dropdown.is(':visible')) {
					dropdown.hide()
				} else {
					dropdown.show();
				}
			});

			$("body").click(function(e) {
				if(e.target.id !== "targetLink" && e.target.id !== "dropdown") {
					dropdown.hide();
				}
			});


		}

	</script>

	<!--End of Tawk.to Script-->
</body>
</html>