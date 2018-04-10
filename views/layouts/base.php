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
	<!--End of Tawk.to Script-->
</body>
</html>