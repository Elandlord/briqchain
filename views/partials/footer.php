<div class="footer">
	<div class="footer__content">
		<div class="footer__content-item footer__content-item--left">
			<div class="address">
				<div class="address__row">
					<a class="address__link" href="mailto:<?php echo $this->siteWide->getText('site_breed.emailadres'); ?>"><span class="address__icon"><img class="address__img" src="<?php echo $this->url ?>/static/img/email.svg" width="15" height="11" alt="E-mailadres"></span> <?php echo $this->siteWide->getText('site_breed.emailadres'); ?></a>
				</div>
			</div>
		</div>
		
		<div class="footer__content-item footer__content-item--center">
			<ul class="social">
				<li class="social__item">
					<a class="social__link" href="<?php echo $this->siteWide->getText('site_breed.facebook_link'); ?>" target="_blank">
						<img class="social__img" src="<?php echo $this->url ?>/static/img/social/facebook.svg" width="23" height="23" alt="Facebook">
					</a>
				</li>
				<li class="social__item">
					<a class="social__link" href="<?php echo $this->siteWide->getText('site_breed.twitter_link'); ?>" target="_blank">
						<img class="social__img" src="<?php echo $this->url ?>/static/img/social/twitter.svg" width="27" height="22" alt="Twitter">
					</a>
				</li>
				
				<li class="social__item">
					<a class="social__link" href="<?php echo $this->siteWide->getText('site_breed.linkedin_link'); ?>" target="_blank">
						<img class="social__img" src="<?php echo $this->url ?>/static/img/social/linkedin.svg" width="23" height="23" alt="Linkedin">
					</a>
				</li>
				<li class="social__item">
					<a class="social__link" href="<?php echo $this->siteWide->getText('site_breed.vimeo_link'); ?>" target="_blank">
						<img class="social__img" src="<?php echo $this->url ?>/static/img/social/vimeo.svg" width="23" height="23" alt="Vimeo">
					</a>
				</li>
			</ul>
		</div>					
		
		<div class="footer__content-item footer__content-item--right">
			<a class="footer__logo" href="<?php echo $this->url ?>">
				<img class="logo__img" src="<?php echo $this->url ?>/static/img/logo-white.svg" width="172" height="42" alt="Briqchain logo">
			</a>
		</div>
	</div>
</div>