<div class="frame">
	<div class="frame__row">
		<?php echo $this->partial('views/partials/header.php', ['light' => true]); ?>
	</div>
	<div class="frame__row frame__row--expand">
		<div class="wrapper">
			<div class="error">
				<h1 class="error__title"><?php echo $this->titel; ?></h1>
				<p class="error__paragraph"><?php echo $this->omschrijving; ?></p>
				<a class="button button--green" href="<?php echo $this->url ?>/">Terug naar home</a>
			</div>
		</div>
	</div>
	<div class="frame__row">
		<?php echo $this->partial('views/partials/footer.php'); ?>
	</div>
</div>