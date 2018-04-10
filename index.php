<?php

date_default_timezone_set('Europe/Amsterdam');
header_remove('X-Powered-By');

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/css.php';
require_once __DIR__ . '/includes/js.php';
require_once __DIR__ . '/includes/prismic.php';

$klein = new \Klein\Klein();

if($config['development'] === true){
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

use PHPMailer\PHPMailer\PHPMailer;

$klein->respond(function($request, $response, $service, $app) use ($klein, $config){
	
	$app->config = $service->config = $config;
	$app->url = $service->url = $config['base'] . $config['subdirectory'];
	
	$app->register('css', function() use ($app, $config){
		$css = new css([
			'auto_reload'	=> $config['development'],
			'source_path'	=> dirname( __FILE__ ) . '/src/css/',
			'cache_path'	=> dirname( __FILE__ ) . '/static/css/',
			'public_path'	=> $app->url . '/static/css/',
			'versioning'	=> FALSE
		]);
		
		return $css;
	});
	
	$app->register('js', function() use ($app, $config){
		$js = new js([
			'auto_reload'	=> $config['development'],
			'source_path'	=> dirname( __FILE__ ) . '/src/js/',
			'cache_path'	=> dirname( __FILE__ ) . '/static/js/',
			'public_path'	=> $app->url . '/static/js/',
			'versioning'	=> FALSE
		]);
		
		return $js;
	});
	
	$app->register('mail', function() use ($config){
		$mail = new PHPMailer;
		
		$mail->isSMTP();
		$mail->Host = $config['smtp']['host'];
		$mail->SMTPAuth = true;
		$mail->Username = $config['smtp']['username'];
		$mail->Password = $config['smtp']['password'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port = $config['smtp']['port'];
		$mail->isHTML(true);
		
		$mail->setFrom($config['smtp']['email'], $config['smtp']['name']);
		
		return $mail;
	});
	
	$app->register('prismic', function() use ($app, $config){
		$prismic = new prismic(
			$app->url,
			$config['prismic']['url'],
			$config['prismic']['token']
		);
		
		return $prismic;
	});
	
	$app->register('throw_404', function() use ($service, $app, $response){
		$response->code(404);
		
		$service->styles = [$app->css->load('main.scss')];
		$service->siteWide = $app->prismic->getSingle('site_breed');
		
		$service->pagina_titel = 'Pagina niet gevonden • Briqchain';
		$service->meta_omschrijving = '';
		
		$service->titel = 'Pagina niet gevonden';
		$service->omschrijving = 'We kunnen deze pagina helaas niet vinden';
		
		$service->layout('views/layouts/base.php');
		$service->render('views/error.php');
	});
	
	$klein->onError(function($klein, $err_msg) use ($app){
		if($app->config['development'] === true){
			var_dump($err_msg);
		}else{		
			$response->code(500);
			
			$service->styles = [$app->css->load('main.scss')];
			$service->siteWide = $app->prismic->getSingle('site_breed');
			
			$service->pagina_titel = 'Onverwachte fout • Briqchain';
			$service->meta_omschrijving = '';
			
			$service->titel = 'Onverwachte fout';
			$service->omschrijving = 'Probeer het later opnieuw';
			
			$service->layout('views/layouts/base.php');
			$service->render('views/error.php');
		}
	});
});

$klein->with( $config['subdirectory'], 'controllers/index.php' );

$klein->dispatch();

?>