<?php

return function($request, $response, $service, $app){
	$service->styles = [$app->css->load('main.scss')];
	$service->siteWide = $app->prismic->getSingle('site_breed');
	
	$service->pagina_titel = 'Aanmelding verstuurd • Briqchain';
	$service->meta_omschrijving = '';
	
	$service->layout('views/layouts/base.php');
	$service->render('views/aangemeld.php');
};

?>