<div class="frame">
	<div class="frame__row">
		<div class="hero">
			<?php echo $this->partial('views/partials/header.php', ['light' => false]); ?>
			
			<div class="hero__container">
				<div class="hero__content">
					<h1 class="hero__title"><?php echo $this->content->getText('home.hero_titel'); ?></h1>
					<p class="hero__paragraph"><?php echo $this->content->getStructuredText('home.hero_omschrijving')->asText(); ?></p>
					<div class="hero__buttons">
						<?php 
						$buttons = $this->content->getGroup('home.hero_knoppen')->getArray();
						
						foreach($buttons as $button):
							$color = false;
							switch(strtolower($button->getText('kleur'))){
								case 'groen':
									$color = 'green';
									break;
								case 'blauw':
									$color = 'blue';
									break;
							}
						?>
						<a class="button button--<?php echo $color; ?>" href="<?php echo $button->getLink('link')->getUrl(); ?>"><?php echo $button->getText('naam') ?></a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="badge">
				<div class="badge__content">
					<div class="badge__title"><span class="badge__currency"><?php echo $this->content->getText('home.badge_valuta'); ?></span><?php echo $this->content->getNumber('home.badge_prijs')->getValue(); ?></div>
					<div class="badge__description">
						<?php echo $this->content->getText('home.badge_omschrijving'); ?>
					</div>
				</div>
			</div>
			<div class="hero__houses-left"></div>
			<div class="hero__houses-right"></div>
			<div class="hero__round">
				<svg class="hero__round-svg" viewBox="0 0 1920 50" preserveAspectRatio="none"><path d="M1920,50H0V0A9241,9241,0,0,0,1920,0Z" style="fill:#fff"/></svg>
			</div>
		</div>
	</div>
	<div class="frame__row frame__row--expand">
		<div class="intro">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__left">
						<div class="house-icon">
							<?php echo $this->content->getImage('home.intro_afbeelding')->asHtml(); ?>
						</div>
					</div>
					<div class="split-content__right">
						<h2 class="split-content__title split-content__title--purple"><?php echo $this->content->getStructuredText('home.intro_titel')->asHtml(); ?></h2>
						<?php echo $this->content->getStructuredText('home.intro_content')->asHtml(); ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="points">
			<div class="points__topline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
			</div>
			<div class="points__content">
				<div class="wrapper wrapper--large">
					<div class="points__holder">
						<?php 
						$points = $this->content->getGroup('home.punten')->getArray();
						
						foreach($points as $point):
						?>
						<div class="point">
							<div class="point__icon">
								<?php echo $point->getImage('afbeelding')->asHtml(); ?>
							</div>
							<h2 class="point__title"><?php echo $point->getStructuredText('titel')->asText(); ?></h2>
							<?php echo $point->getStructuredText('content')->asHtml(); ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="points__bottomline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#ebf4fb"/></svg>
			</div>
		</div>
		
		<div class="blockchain">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__pane split-content__left">
						<h2 class="split-content__title split-content__title--green"><?php echo $this->content->getStructuredText('home.blockchain_titel')->asHtml(); ?></h2>
						<?php echo $this->content->getStructuredText('home.blockchain_content')->asHtml(); ?>
					</div>
					<div class="split-content__pane split-content__right split-content__pane--mobile-first">
						<div class="blockchain-icon">
							<?php echo $this->content->getImage('home.blockchain_afbeelding')->asHtml(); ?>
						</div>
					</div>
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