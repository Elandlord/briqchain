<div class="calculator__topline">
	<svg class="calculator__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
</div>
<div class="calculator__content">
	<div class="wrapper wrapper--small">
		<div class="calculator__block">
			<h2 class="calculator__title"><?php echo $this->siteWide->getText('site_breed.calculator_titel'); ?></h2>
			<div class="calculator__badges">
				<div class="calculator__large-badge">
					<span class="calculator__badge-title"> 4<span class="calculator__badge-title-sign">%</span></span>
					<span class="calculator__badge-content">vaste rente</span>
				</div>
				<div class="calculator__small-badge">
					<span class="calculator__badge-title"><span class="badge__currency">&euro;</span> 10<span class="calculator__badge-title-sign"></span></span>
					<span class="calculator__badge-content">per briq</span>
				</div>
			</div>

			<div class="calculator__form-wrapper calculator__herinleg">
				<div class="calculator__form ">

					<!-- herinleg -->
					<div class="">
						<label class="calculator__form-label m-bottom-md" for="calculator_inleg_in_euros">Eenmalig / maandelijks</label>
						<div class="calculator__input-holder">
							<div class="calculator__input-radio-holder">
								<label class="container"> Eenmalig
									<input required="required" name="calculator_herinleg" type="radio">
									<span class="checkmark"></span>
								</label>
							</div>

							<div class="calculator__input-radio-holder">
								<label class="container"> Maandelijks
									<input required="required" name="calculator_herinleg" type="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>

					

				</div>
			</div>


			<div class="calculator__form-wrapper">
				<div class="calculator__form">
					
					<!--  Inleg in euro's -->
					<div class="calculator__form-group">
						<label class="calculator__form-label" for="calculator_inleg_in_euros">Inleg in euro’s</label>
						<div class="calculator__input-holder">
							<div class="calculator__input-icon">
								<img class="calculator__input-img" src="<?php echo $this->url ?>/static/img/input-euro.svg" width="10" height="12" alt="Euro">
							</div>
							<input class="calculator__form-input" type="number" id="calculator_inleg_in_euros" name="calculator_inleg_in_euros" required="required" value="100" step="10" min="10">
						</div>
					</div>


					<!-- Rente per jaar -->
					<div class="calculator__form-group">
						<label class="calculator__form-label" for="calculator_inleg_in_euros">Rente per jaar</label>
						<div class="calculator__input-holder">
							<div class="calculator__input-icon-rente">
							<span>%</span>
							</div>
							<input class="calculator__form-input" type="number" id="calculator_rente_per_jaar" name="calculator_rente_per_jaar" required="required" value="100" step="10" min="10">
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
					<div class="calculator__result-label">Rendement 5 jaar* 
						<img class="calculator__dropdown__link"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAMAAABrrFhUAAAA4VBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+sqgLzAAAASnRSTlMAAQIDBAYHCQ0OEBESFBUWFxgaHCIlJiowMTU2ODlHSUtMTVteY2tsb3F0dXd8iYuSlJq1t7m8w8fIyszOz9fi5Obt7/P19/n7/X3aZyAAAANjSURBVBgZ7cGHYlVVFATQSQgRBcGNBVFULKAmg2LDFlTCWDL//0ECKhJ4SV655ZS9FlJKKaWUUkoppZRSSimllFJKKaWUUkoppZRSSimllFJKKaXUpK3LNz7+dK9tn9/64M3zWOjVO7+7E9+9t4XnvfS1e/LrdRz3zh/uzFfn8Ixb7s9Pu3jqtnv0y3n863336fstPHH5yJ26gyd+cLdexyPvul/38MjP7thV4JJ7RuBD9+w34K67tosDdy3w0F17C3+5a9fwwF17A9+6axdBd20b192ze8DOkTt2E8CX7tfRLoCL7tceHtt3rw538Nj2fXfqGv7x8qG79An+c0Xu0D7+F3J3iGeF3BniuJC7Qjwv5I4QLwq5G8QiIXeCWCzkLhAnCbkDxMlCbh5xmpAbR5wu5KYRZwm5YcTZQm4WsYyQG0UsJ+QmEcsKuUHE8kJuDrGKkBtDrCbkphCrCrkhxOpCbgaxjpAbQawn5CYQ6wq5AcT6Qq4esYmQK0dsJuSqEZsKuWLE5kKuFjGEkCtFDCPkKhFDCblCxHBCrg4xpJArQwwr5KoQQwu5IsTwQq4GMYaQK0GMI+QqEGMJuQLEeEIuHjGmkAtHjCvkohFjC7lgxPhCLhYxhZALRUwj5CIRUwm5QMR0Qi4OMaWQC0NMK+SiEFMLuSDE9EIuBjGHkAtBzCPkIhBzCbkAxHxCnh0xp5BnRswr5FkRcwt5RsT8Qp4NUYKQZ0KUIeRZEKUIeQZEOUKeHFGSkCdGlCXkSRGlCXlCRHlCngxRopAnQpQp5EkQpQp5AkS5Qh4dUbKQR0aULeRREaULeURE+UIeDVGDkEdC1CHkURC1CHkERD1CHhxRk5AHRtQl5EERtQl5QER9Qh4MUaOQB0LUKeRBELUKeQBEvULeGFGzkDdE1C3kjRC1C3kDRP1CXhvRgpDXRLQh5LUQrQh5DUQ7Ql4Z0ZKQV0S0JeSVEK0JeQVEe0JeGtGikJdEtCnkpRCtCnkJRLtCPhPRspDPQLQt5FMRrQv5FET7Qj4R0YOQT0D0IeSFiF5cOfQCn6EfF+77BTfRk+09H/fja+jMK18c+amDG+jQztv73zz48+HB3Y8uIaWUUkoppZRSSimllFJKKaWUUkoppZRSSimllFJKKaWUUkppc38Dkv+iItb6i+YAAAAASUVORK5CYII=">
						<div class="calculator__rendement__dropdown">
							<a class="calculator__rendement__dropdown-link" href="#"> 5 jaar </a>
							<a class="calculator__rendement__dropdown-link" href="#"> 10 jaar </a>
							<a class="calculator__rendement__dropdown-link" href="#"> 15 jaar </a>
							<a class="calculator__rendement__dropdown-link" href="#"> 20 jaar </a>
							<a class="calculator__rendement__dropdown-link" href="#"> 25 jaar </a>
							<a class="calculator__rendement__dropdown-link" href="#"> 30 jaar </a>
						</div>
					</div>
					<div class="calculator__result-value">
						<span class="calculator__result-sign">€</span>
						<span class="calculator__result-amount calculator__result-amount--light" id="calculator_per_vijf_paar">23,-</span>
					</div>
				</div>
			</div>

			<!-- herbeleggen -->
			<div style="margin-top: 30px;" class="">
				<label class="calculator__form-label m-top-md m-bottom-md" for="calculator_inleg_in_euros">Herbeleggen</label>
				<div class="calculator__input-holder ">
					<div class="calculator__input-radio-holder">
						<label class="container"> Aan
							<input required="required" name="calculator_herbeleggen" type="radio">
							<span class="checkmark"></span>
						</label>
					</div>

					<div class="calculator__input-radio-holder">
						<label class="container"> Uit
							<input required="required" name="calculator_herbeleggen" type="radio">
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
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