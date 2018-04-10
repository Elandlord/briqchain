<?php

use Prismic\Api;
use Prismic\Predicates;
require_once 'linkResolver.php';

class prismic{
	protected $api = NULL;
	protected $linkResolver = NULL;
	
	public function __construct($base, $url, $token = NULL){	
		$this->api = Api::get($url, $token);
		$this->linkResolver = new PrismicLinkResolver($base, $this->api);
	}
	
	public function preview($token){
		$url = $this->api->previewSession($token, $this->linkResolver, '/');
		setcookie(Prismic\PREVIEW_COOKIE, $token, time() + 1800, '/', null, false, false);
		header('Location: ' . $url);
		die;
	}
	
	public function getSingle($type){
		$query = $this->api->query(Predicates::at('document.type', $type));
		return $query->getResults()[0];
	}
}

?>