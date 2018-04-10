<?php

$this->respond('GET',	'/',				include 'controllers/get.php');
$this->respond('GET',	'/fondsen',			include 'controllers/fondsen/get.php');
$this->respond('GET',	'/zo-werkt-het',	include 'controllers/zo-werkt-het/get.php');
$this->respond('GET',	'/about',			include 'controllers/about/get.php');
$this->respond('GET',	'/aanmelden',		include 'controllers/aanmelden/get.php');
$this->respond('POST',	'/aanmelden',		include 'controllers/aanmelden/post.php');
$this->respond('GET',	'/aangemeld',		include 'controllers/aangemeld/get.php');
$this->respond('GET',	'/preview',			include 'controllers/preview/get.php');

$this->onHttpError(function($code, $router){
	switch ($code) {
		case 404:
			$app = $router->app();
			$app->throw_404();
			break;
		case 405:
			$app = $router->app();
			$app->throw_405();
			break;
		default:
			$router->response()->body(
				$code . ': Oh no, a bad error.'
			);
	}
});

?>