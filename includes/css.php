<?php
	
use Leafo\ScssPhp\Compiler;

class css{
	
	protected $source_path = './static/css/';
	protected $cache_path = './static/cache/css/';
	protected $public_path = './static/cache/css/';
	protected $auto_reload = FALSE;
	protected $versioning = FALSE;
	protected $php_redis = FALSE;
	protected $redis_channel = 'CSS';
	
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
	
	public function load( $file ){
		
		if( $this->cache_exists($file) ){
			
			if( $this->auto_reload === TRUE && filemtime( $this->source_path($file) ) > filemtime( $this->cache_path($file) ) ){
				$this->create_cache($file);
				return $this->public_path($file);
			}
			
			return $this->public_path($file);
		}
		
		if( $this->source_exists($file) ){
			$this->create_cache($file);
			return $this->public_path($file);
		}
		
		return FALSE;
	}
	
	protected function source_path( $file ){
		
		return $this->source_path . $file;
	}
	
	protected function cache_path( $file ){
		
		return $this->cache_path . str_replace('.scss', '.css', $file);
	}
	
	protected function public_path( $file ){
		$build = '';
		if( $this->versioning === TRUE && $this->php_redis !== FALSE ){
			$build = '?v='.$this->php_redis->get($this->redis_channel.':css-build:'.$file);
		}
		
		return $this->public_path . str_replace('.scss', '.css', $file).$build;
	}
	
	protected function source_exists( $file ){
		
		return file_exists( $this->source_path($file) );
	}
	
	protected function cache_exists( $file ){
		
		return file_exists( $this->cache_path($file) );
	}
	
	protected function get_source( $file ){
		
		return file_get_contents( $this->source_path($file) );
	}
	
	protected function compile( $content ){
		
		$scss = new Compiler();
		$scss->setFormatter('Leafo\ScssPhp\Formatter\Crunched');
		$scss->setImportPaths($this->source_path);
		return $scss->compile($content);
	}
	
	protected function create_cache( $file ){
		
		$content = $this->get_source($file);
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
			$this->php_redis->incr($this->redis_channel.':css-build:'.$file);
		}
		
		return $cache_file;
	}
}

?>