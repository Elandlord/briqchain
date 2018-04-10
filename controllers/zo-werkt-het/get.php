<?php

return function($request, $response, $service, $app){
	
	$response->header('Cache-Control', 'max-age='.($app->config['development']?'0':'60'));
	
	$service->styles = [$app->css->load('main.scss')];
	$service->scripts = [$app->js->load('calculator.js')];
	$service->content = $app->prismic->getSingle('zo_werkt_het');
	$service->siteWide = $app->prismic->getSingle('site_breed');
	
	$service->pagina_titel = $service->content->getText('zo_werkt_het.main_titel');
	$service->meta_omschrijving = $service->content->getText('zo_werkt_het.main_omschrijving');
	
	$service->layout('views/layouts/base.php');
	$service->render('views/zo-werkt-het.php');
};

?>