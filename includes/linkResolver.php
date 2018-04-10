<?php

use Prismic\LinkResolver;

class PrismicLinkResolver extends LinkResolver{
	private $base;
	private $prismic;
	
	public function __construct($base, $prismic){
		$this->base = $base;
		$this->prismic = $prismic;
	}

	public function resolve($link){
		// Example link resolver for custom type with API ID of 'example-page'
		if($link->getType() === 'example-page'){
			return $this->base.'/example-page/' . $link->getUid();
		}
		
		// Default case returns the homepage
		return $this->base.'/';
	}
}

?>