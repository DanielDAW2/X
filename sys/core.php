<?php 
	namespace X\Sys;

	use X\Sys\Request;

	class Core{
		static private $controller;
		static private $action;
		static private $params;

		public static function init(){
			Request::exploding();
		}

	}
 ?>