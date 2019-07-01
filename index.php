<?php 
 
 
 session_start();
 require 'config.php';


 spl_autoload_register(function($class){ // verifica, automaticamente nas pastas, se há alguma classe.Se existir, faz o 'require'.
   
   if(file_exists('controllers/'.$class.'.php')){
     require 'controllers/'.$class.'.php';
   }else if(file_exists('models/'.$class.'.php') ){
     require 'models/'.$class.'.php';
   }else if(file_exists('core/'.$class.'.php') ){
     require 'core/'.$class.'.php';
   }
 } );
 
 $core = new Core(); // instancia a classe Core
 $core->run(); // solicitando a função run() que está no arquivo Core e que tem a classe Core.




 ?>