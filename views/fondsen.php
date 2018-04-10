<div class="frame">
	<div class="frame__row">
		<?php echo $this->partial('views/partials/header.php', ['light' => true]); ?>
	</div>
	<div class="frame__row frame__row--expand">
		<div class="fondsen">
			<div class="fondsen__content">
				<div class="wrapper">
					<div class="fonds">
						<div class="fonds__header">
							<div class="fonds__item">
								<div class="fonds__id">
									<div class="fonds__icon">
										<img class="fonds__img" src="<?php echo $this->url ?>/static/img/fonds.svg" width="89" height="69" alt="<?php echo $this->content->getText('fondsen.fonds_titel'); ?>">
									</div>
									<div class="fonds__title">
										<div class="fonds__name">
											<?php echo $this->content->getStructuredText('fondsen.fonds_titel')->asHtml(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__datum">
									<div class="fonds__datum-label">Fonds opening</div>
									<div class="fonds__datum-value"><?php echo $this->content->getText('fondsen.fonds_opening'); ?></div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__datum">
									<div class="fonds__datum-label">Fonds sluiting</div>
									<div class="fonds__datum-value"><?php echo $this->content->getText('fondsen.fonds_sluiting'); ?></div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__actions">
									<a href="<?php echo $this->url ?>/aanmelden" class="button button--green">
										<img class="button__img button__briqs" src="<?php echo $this->url ?>/static/img/button-logo.svg" width="19" height="20" alt="Briqs">
										Koop Briqs
									</a>
								</div>
							</div>
						</div>
						<div class="fonds__content">
							<div class="fonds__all-details">
								<div class="fonds__all-detail fonds__all-detail--stretch">
									<div class="fonds__details">
										<h2 class="fonds__details-title"><strong>Fonds</strong> details</h2>
										<table class="fonds__details-table" border="0" cellspacing="0" cellpadding="0">
											<?php 
											$details = $this->content->getGroup('fondsen.fonds_details')->getArray();
											
											$index = 0;
											foreach($details as $detail):
												$index++;
											?><tr>
												<th><?php echo $detail->getText('titel'); ?></th>
												<td><?php echo $detail->getText('omschrijving'); ?></td>
											</tr>
											<?php endforeach; ?>
										</table>
									</div>
								</div>
								<div class="fonds__all-detail">
									<div class="fonds__points">
										<div class="fonds__point fonds__point--first">
											<div class="fonds__point-label">Uitgever</div>
											<div class="fonds__point-value fonds__point-value--smaller"><?php echo $this->content->getText('fondsen.fonds_uitgever'); ?></div>
										</div>
										<div class="fonds__point">
											<div class="fonds__point-label">Totale Briq supply</div>
											<div class="fonds__point-value">
												<img class="fonds__point-img" src="<?php echo $this->url ?>/static/img/input-logo.svg" width="19" height="20" alt="Briqs">
												<?php echo $this->content->getText('fondsen.fonds_totale_briq_supply'); ?>
											</div>
										</div>
										<div class="fonds__point">
											<div class="fonds__point-label">Totaal uitgifte</div>
											<div class="fonds__point-value">
												<span class="fonds__point-sign">€</span>
												<?php echo $this->content->getText('fondsen.fonds_totale_uitgifte'); ?>
											</div>
										</div>
										<div class="fonds__point fonds__point--last">
											<div class="fonds__point-label">Prijs per briq</div>
											<div class="fonds__point-value">
												<span class="fonds__point-sign">€</span>
												<?php echo $this->content->getText('fondsen.fonds_prijs_per_briq'); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fonds__omschrijving">
								<h2 class="fonds__omschrijving-title"><strong>Fonds</strong> omschrijving</h2>
								<div class="fonds__omschrijving-paragraphs">
									<?php echo $this->content->getStructuredText('fondsen.fonds_omschrijving')->asHtml(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fondsen__houses-left"></div>
			<div class="fondsen__houses-right"></div>
		</div>
		
		<div class="calculator" id="calculator">
			<?php echo $this->partial('views/partials/calculator.php'); ?>
		</div>
		
		<div class="afm">
			<div class="afm__desktop">
				<img src="<?php echo $this->url ?>/static/img/afm/afm2_vrijstelling_dubbel-1768x122.jpg" width="884" height="61" alt="Let op! U belegt buiten AFM-toezicht.">
			</div>
			<div class="afm__mobile">
				<img src="<?php echo $this->url ?>/static/img/afm/afm6_vrijstelling_dubbel-420x254.jpg" width="420" height="254" alt="Let op! U belegt buiten AFM-toezicht.">
			</div>
		</div>
	</div>
	<div class="frame__row">
		<?php echo $this->partial('views/partials/footer.php'); ?>
	</div>
</div>