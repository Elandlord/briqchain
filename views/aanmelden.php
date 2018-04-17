<div class="frame">
	<div class="frame__row">
		<?php echo $this->partial('views/partials/header.php', ['light' => true]); ?>
	</div>
	<div class="frame__row frame__row--expand">
		<div class="last-action">
			<div class="last-action__topline">
				<svg class="last-action__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
			</div>
			<div class="last-action__content">
				<div class="wrapper wrapper--small">
					<div class="last-action__block">
						<div class="last-action__badge">
							<span class="last-action__badge-title">Aanvang</span>
							<span class="last-action__badge-content">Q2 2018</span>
						</div>
						<span class="last-action__label">Voorinschrijving</span>
						<h2 class="last-action__title"><?php echo $this->siteWide->getText('site_breed.aanmelden_titel'); ?></h2>
						<?php echo $this->siteWide->getStructuredText('site_breed.aanmelden_content')->asHtml(); ?>
						<form method="post" action="<?php echo $this->url; ?>/aanmelden">
							<div class="last-action__form">
								<div class="last-action__form-group">
									<label class="last-action__form-label" for="naam">Naam</label>
									<input class="last-action__form-input" type="text" id="naam" name="naam" required="required">
								</div>
								<div class="last-action__form-group">
									<label class="last-action__form-label" for="emailadres">E-mailadres</label>
									<input class="last-action__form-input" type="email" id="emailadres" name="emailadres" required="required">
								</div>
								<div class="last-action__form-group">
									<button class="last-action__form-button button button--green" type="submit">Bevestig</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="frame__row">
		<?php echo $this->partial('views/partials/footer.php'); ?>
	</div>
</div>