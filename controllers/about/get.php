<?php

return function($request, $response, $service, $app){
	
	$response->header('Cache-Control', 'max-age='.($app->config['development']?'0':'60'));
	
	$service->styles = [$app->css->load('main.scss')];
	$service->scripts = [$app->js->load('calculator.js')];
	$service->content = $app->prismic->getSingle('about');
	$service->siteWide = $app->prismic->getSingle('site_breed');
	
	$service->pagina_titel = $service->content->getText('about.main_titel');
	$service->meta_omschrijving = $service->content->getText('about.main_omschrijving');
	
	$service->layout('views/layouts/base.php');
	$service->render('views/about.php');
};

?>