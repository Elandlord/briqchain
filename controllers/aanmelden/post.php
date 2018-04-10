<?php

return function($request, $response, $service, $app){
	
	$response->header('Cache-Control', 'max-age=0');
	
	$service->validateParam('naam', 'Vul eerst je naam in')->notNull();
	$service->validateParam('naam', 'Vul eerst je e-mailadres in')->notNull();
 	
 	$emailadres = $request->emailadres;
 	$naam = $request->naam;
 	
 	$app->mail->addAddress($app->config['email']);
	$app->mail->Subject = 'Aanmelding Primaire Obligatie Uitgifte';
	$app->mail->Body = 
		"Nieuwe Aanmelding Primaire Obligatie Uitgifte<br>
		<br>
		Naam: $naam<br>
		E-mailadres: $emailadres";
	
	$app->mail->send();
 		
	$response->redirect($app->config['subdirectory'] .'/aangemeld')->send();
};

?>