<div class="frame">
	<div class="frame__row">
		<?php echo $this->partial('views/partials/header.php', ['light' => true]); ?>
	</div>
	<div class="frame__row frame__row--expand">
		<div class="wrapper">
			<div class="aanmelden">
				<h1 class="aanmelden__title">Op weg naar je eerste briq!</h1>
				<p class="aanmelden__paragraph">We houden je vanaf nu op de hoogte.</p>
				<a class="button button--green" href="<?php echo $this->url ?>/">Terug naar home</a>
			</div>
		</div>
	</div>
	<div class="frame__row">
		<?php echo $this->partial('views/partials/footer.php'); ?>
	</div>
</div>