<?php 

class Bootstrap
{
	
	function __construct()
	{

			$url = $_SERVER['REQUEST_URI'];

			$url = ltrim($url, "/moe/index/");
			$url = rtrim($url, "/");

			$url = explode("/", $url);


			print_r($url);

			$file = "controllers/".$url[0].".php";
			
		if(file_exists($file) )
		{

			require $file;

			$controller = new $url[0];

			
			if(isset($url[2]) ){

				$controller->{ $url[1] }($url[2]);

			}else{
				
				if(isset($url[1]) ){
				
					 $controller->{ $url[1] }();
				
				}	

			}


		}else{
			die("No such controller");
		}
	}	
}


