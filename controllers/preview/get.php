<?php

return function($request, $response, $service, $app){
	$token = isset($_GET['token']) ? $_GET['token'] : null;
	$app->prismic->preview($token);
};

?>