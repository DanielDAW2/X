<?php 
	namespace X\Sys;

	class Request {
		static private $query=array();
		static function exploding(){
			$array_query=explode('/', $_SERVER['REQUEST_URI']);
			var_dump($array_query);
		}
	}
 ?>