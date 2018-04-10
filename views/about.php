<div class="frame">
	<div class="frame__row">
		<?php echo $this->partial('views/partials/header.php', ['light' => true]); ?>
	</div>
	<div class="frame__row frame__row--expand">
		<h1 class="title"><?php echo $this->content->getText('about.main_koptekst'); ?></h1>
		
		<div class="introduction">
			<div class="introduction__topline">
				<svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#fff"/></svg>
			</div>
			<div class="introduction__content">
				<div class="wrapper">
					<div class="introduction__block">
						<h2 class="introduction__title introduction__title--blue"><?php echo $this->content->getStructuredText('about.intro_titel')->asHtml(); ?></h2>
						<?php echo $this->content->getStructuredText('about.intro_content')->asHtml(); ?>
					</div>
				</div>
			</div>
			<div class="introduction__bottomline">
				<svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#fff"/></svg>
			</div>
			<div class="introduction__houses-left"></div>
			<div class="introduction__houses-right"></div>
		</div>
		
		<div class="team">
			<div class="wrapper">
				<h2 class="team__title"><?php echo $this->content->getText('about.team_titel'); ?></h2>
				<div class="members">
					<?php 
					$members = $this->content->getGroup('about.team_leden')->getArray();
					
					foreach($members as $member):
					?>
					<div class="members__item">
						<div class="member">
							<div class="member__avatar">
								<?php echo $member->getImage('profielfoto')->asHtml(); ?>
							</div>
							<h3 class="member__name"><?php echo $member->getStructuredText('naam')->asHtml(); ?></h3>
							<p class="member__function"><?php echo $member->getText('functie'); ?></p>
							<a class="button button--purple button--external" target="_blank" href="<?php echo $member->getText('linkedin_link'); ?>">
								<img class="button__icon" src="<?php echo $this->url; ?>/static/img/social/linkedin.svg" width="20" height="20"> Linkedin
							</a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		
		<div class="calculator" id="calculator">
			<?php echo $this->partial('views/partials/calculator.php'); ?>
		</div>
	</div>
	<div class="frame__row">
		<?php echo $this->partial('views/partials/footer.php'); ?>
	</div>
</div>