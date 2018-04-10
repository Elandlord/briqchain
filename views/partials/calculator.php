<div class="calculator__topline">
	<svg class="calculator__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
</div>
<div class="calculator__content">
	<div class="wrapper wrapper--small">
		<div class="calculator__block">
			<h2 class="calculator__title"><?php echo $this->siteWide->getText('site_breed.calculator_titel'); ?></h2>
			<div class="calculator__badges">
				<div class="calculator__large-badge">
					<span class="calculator__badge-title">3<span class="calculator__badge-title-sign">%</span></span>
					<span class="calculator__badge-content">bonus bij aflossing</span>
				</div>
				<div class="calculator__small-badge">
					<span class="calculator__badge-title">4<span class="calculator__badge-title-sign">%</span></span>
					<span class="calculator__badge-content">vaste rente</span>
				</div>
			</div>			
			<div class="calculator__form-wrapper">
				<div class="calculator__form">
					<div class="calculator__form-group">
						<label class="calculator__form-label" for="calculator_inleg_in_euros">Inleg in euro’s</label>
						<div class="calculator__input-holder">
							<div class="calculator__input-icon">
								<img class="calculator__input-img" src="<?php echo $this->url ?>/static/img/input-euro.svg" width="10" height="12" alt="Euro">
							</div>
							<input class="calculator__form-input" type="number" id="calculator_inleg_in_euros" name="calculator_inleg_in_euros" required="required" value="100" step="10" min="10">
						</div>
					</div>
					<div class="calculator__form-group">
						<label class="calculator__form-label" for="calculator_aantal_briqs">Aantal briqs</label>
						<div class="calculator__input-holder">
							<div class="calculator__input-icon">
								<img class="calculator__input-img" src="<?php echo $this->url ?>/static/img/input-logo.svg" width="19" height="20" alt="Briqs">
							</div>
							<input class="calculator__form-input" type="number" id="calculator_aantal_briqs" name="calculator_aantal_briqs" required="required" value="10" step="1" min="1">
						</div>
					</div>
				</div>
			</div>
			<div class="calculator__results">
				<div class="calculator__result calculator__result--first">
					<div class="calculator__result-label">Per maand</div>
					<div class="calculator__result-value">
						<span class="calculator__result-sign">€</span>
						<span class="calculator__result-amount" id="calculator_per_maand">0,33</span>
					</div>
				</div>
				<div class="calculator__result">
					<div class="calculator__result-label">Per jaar</div>
					<div class="calculator__result-value">
						<span class="calculator__result-sign">€</span>
						<span class="calculator__result-amount" id="calculator_per_paar">4,-</span>
					</div>
				</div>
				<div class="calculator__result calculator__result--last">
					<div class="calculator__result-label">Rendement 5 jaar*</div>
					<div class="calculator__result-value">
						<span class="calculator__result-sign">€</span>
						<span class="calculator__result-amount calculator__result-amount--light" id="calculator_per_vijf_paar">23,-</span>
					</div>
				</div>
			</div>
			<div class="calculator__extra-note">
				Inclusief bonus van <strong>3%</strong> bij aflossing.
			</div>
			<div class="calculator__footer">
				<ul class="calculator__bullets">
					<li>Exclusief eventuele <a href="<?php echo $this->url ?>/zo-werkt-het">emissie/transactie kosten</a>.</li>
					<li>Bovenstaande berekening is puur ter indicatie er kunnen geen rechten aan worden ontleend.</li>
				</ul>
				<div class="calculator__footer-action">
					<a href="<?php echo $this->url ?>/aanmelden" class="button button--green">
						<img class="button__img button__briqs" src="<?php echo $this->url ?>/static/img/button-logo.svg" width="19" height="20" alt="Briqs">
						Koop Briqs
					</a>
				</div>
			</div>
		</div>
	</div>
</div>