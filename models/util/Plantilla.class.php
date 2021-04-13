<?php
	include_once SMARTY_BASEFILE;
	
	class Plantilla extends Smarty {
		function Plantilla() {
			parent::__construct();
			$this->template_dir = APP_BASEDIR .'/views/templates/';
			$this->compile_dir  = APP_BASEDIR .'/views/templates_c/';
			$this->config_dir   = APP_BASEDIR .'/views/configs/';
			$this->cache_dir    = APP_BASEDIR .'/views/cache/';
	   }
	}
?>