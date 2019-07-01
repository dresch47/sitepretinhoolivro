<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){//se estiver usando uma conexão de um servidor local
	define("BASE_URL","http://localhost/projetos/siteParallax/");
	$config['dbname'] = 'contagem_cliques_pag_pretinho';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{ 
define("BASE_URL","http://www.pretinhoolivro.com.br/");// se estiver usando um sevidor externo
	$config['dbname'] = 'contagem_cliques_pag_pretinho';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'u952429327_cmd';
	$config['dbpass'] = 'fVWpRJTwRd6m';
}

global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	//echo 'conectado ao banco de dados!';
}catch(PDOException $e){
	echo "ERRO:".$e->getMessage();
	exit;
}
?>




 