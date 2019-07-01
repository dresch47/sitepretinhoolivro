<?php 

 
 class Core {
 	public function run(){ // vai pegar a url e verificar qual controller esté sendo identificado e dentro do controller, qual action
           
           //pegando a url:
           // armazenar em uma variável, a url:

           $url = '/';
           //verificar se foi enviada uma url:
           if(isset($_GET['url'])) {
           	    $url .= $_GET['url'];
           }

            $params = array();

           if (!empty($url) && $url!= '/') {
           	     
           	     $url = explode('/', $url);
           	     array_shift($url);
 
           	     $currentController = $url[0].'Controller';
           	     array_shift($url);


 					
 				if (isset($url[0]) && !empty($url[0])) {
 						$currentAction = $url[0];
 						array_shift($url);
 					}else{
 						$currentAction = 'index';
 					}	

           	        if (count($url)>0) {
           	        	$params = $url;
           	        }
           }else{
           	   
           	   $currentController = 'homeController';
           	   $currentAction = 'index';           	  
           }

           $c = new $currentController(); // seria a mesma coisa que instanciar new homeController() , mas como deve ser dinamico, então fica armazenada na variavel.

           call_user_func_array(array($c,$currentAction),$params);// essa função nativa do PHP instancia a classe e executa a função index dessa classe e se houver parametros, ela também executa.
	}
 }


 ?>