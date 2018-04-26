<div class="header<?php if($this->light === true): ?> header--light<?php endif; ?>">
	<div class="header__left">
		<a class="logo" href="<?php echo $this->url ?>">
			<img class="logo__img" src="<?php echo $this->url ?>/static/img/logo<?php if($this->light !== true): ?>-white<?php endif; ?>.svg" width="222" height="43" alt="Briqchain logo">
			<span class="logo__payoff">
				<span class="logo__payoff-powered">Powered by</span>
				<span class="logo__payoff-name">blockchain</span>
			</span>
		</a>
	</div>
	<div class="header__right">
		<div class="nav">
			<input class="nav__toggle" id="menu-toggle" type="checkbox">
			<label for="menu-toggle" class="nav__hamburger">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
					<g fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10">
						<path d="m1 1h18"></path>
						<path d="m1 8h18"></path>
						<path d="m1 15h18"></path>
					</g>
				</svg>
			</label>
			
			<div class="nav__menu">
				<label for="menu-toggle" class="nav__cross">
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><g fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" shape-rendering="crispEdges"><path d="m1 14l13-13"/><path d="m1 1l13 13"/></g></svg>
				</label>
				
				<ul class="navigation">
					<div id="horizontalmenu">
						<li class="navigation__item">
							<a class="navigation__link" href="<?php echo $this->url ?>/">Home</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="<?php echo $this->url ?>/fondsen">Briq Fonds</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="<?php echo $this->url ?>/zo-werkt-het">Zo werkt het</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="<?php echo $this->url ?>/about">About</a>
						</li>
						<li class="navigation__item">
							<a id="targetLink" class="navigation__link" href="#woningportaal">Woningen</a>
							<ul id="dropdown">
								<li class="navigation__item">
									<a class="navigation__link" href="http://briqchain.vindbaar-in-online.nl/aanbod.html">Aanbod</a>
								</li>
								<li class="navigation__item">
									<a class="navigation__link" href="http://briqchain.vindbaar-in-online.nl/huren-of-kopen.html">Huren of Kopen</a>
								</li>
								<li class="navigation__item">
									<a class="navigation__link" href="http://briqchain.vindbaar-in-online.nl/inschrijven.php">Inschrijven</a>
								</li>
								<li class="navigation__item">
									<a class="navigation__link" href="http://briqchain.vindbaar-in-online.nl/woning-verkopen.html">Woning verkopen</a>
								</li>
							</ul>
						</li>
					</div>
				</ul>
				
				<div class="header__call-to-action">
					<a class="button header__button" href="<?php echo $this->url ?>/aanmelden">Aanmelden</a>
				</div>
			</div>													
		</div>
	</div>
</div>