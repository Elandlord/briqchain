<?php

use JShrink\Minifier;

class js{
	
	protected $source_path = './static/js/';
	protected $cache_path = './static/cache/js/';
	protected $public_path = './static/cache/js/';
	protected $auto_reload = FALSE;
	protected $versioning = FALSE;
	protected $php_redis = FALSE;
	protected $redis_channel = 'JS';
	
	public function __construct( $settings = NULL ){
		
		if( $settings !== NULL ){
			
			if( isset($settings['source_path']) ){
				$this->source_path = $settings['source_path'];
			}
			
			if( isset($settings['cache_path']) ){
				$this->cache_path = $settings['cache_path'];
			}
			
			if( isset($settings['public_path']) ){
				$this->public_path = $settings['public_path'];
			}
			
			if( isset($settings['auto_reload']) ){
				$this->auto_reload = $settings['auto_reload'];
			}
			
			if( isset($settings['versioning']) ){
				$this->versioning = $settings['versioning'];
			}
			
			if( isset($settings['php_redis']) ){
				$this->php_redis = $settings['php_redis'];
			}
			
			if( isset($settings['redis_channel']) ){
				$this->redis_channel = $settings['redis_channel'];
			}
		}
	}
	
	public function load( $files ){
		
		if( !is_array($files) ){
			$files = [$files];
		}
		
		$filename = end($files);
		
		if( $this->cache_exists($filename) ){
			
			if( $this->auto_reload === TRUE ){
				
				$changed = FALSE;
				foreach( $files as $file ){
					if( filemtime( $this->source_path($file) ) > filemtime( $this->cache_path($filename) ) ){
						$changed = TRUE;
						break;
					}
				}
				if( $changed === TRUE ){
					$this->create_caches($files);
				}
			}
			
			return $this->public_path($filename);
		}
		
		if( $this->sources_exists($files) ){
			$this->create_caches($files);
			return $this->public_path($filename);
		}
		
		return FALSE;
	}
	
	protected function source_path( $file ){
		
		return $this->source_path . $file;
	}
	
	protected function cache_path( $filename ){
		
		return $this->cache_path . $filename;
	}
	
	protected function public_path( $file ){
		$build = '';
		if( $this->versioning === TRUE && $this->php_redis !== FALSE ){
			$build = '?v='.$this->php_redis->get($this->redis_channel.':js-build:'.$file);
		}
		
		return $this->public_path . $file . $build;
	}
	
	protected function sources_exists( $files ){
		
		foreach( $files as $file ){
			if( !file_exists( $this->source_path($file) ) ){
				return FALSE;
			}
		}
		
		return TRUE;
	}
	
	protected function cache_exists( $filename ){
		
		return file_exists( $this->cache_path($filename) );
	}
	
	protected function get_source( $file ){
		
		return file_get_contents($this->source_path($file));
	}
	
	protected function compile( $content ){
		
		$js = new Minifier();
		return $js->minify($content);
	}
	
	protected function create_caches( $files ){
		
		$content = '';
		foreach( $files as $file ){
			$content .= $this->get_source($file);
		}
		
		$compiled = $this->compile($content);
		return $this->save_cache($file, $compiled);
	}
	
	protected function save_cache( $file, $compiled ){
		
		$cache_file = $this->cache_path($file);
		
		if( file_exists($cache_file) ){
			unlink($cache_file);
		}
		
		if( !is_dir( $this->cache_path ) ){
			mkdir( $this->cache_path, 0777, TRUE );
		}
		
		if( file_put_contents($cache_file, $compiled) === FALSE ){
			throw new Exception('Could not write cache file to as '.$cache_file.'. Maybe it is not writable');
		}
		
		chmod($cache_file, 0777);
        
		if( $this->versioning === TRUE && $this->php_redis !== FALSE ){
			$this->php_redis->incr($this->redis_channel.':js-build:'.$file);
		}
		
		return $cache_file;
	}
}

?>