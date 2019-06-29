<?php 

$dsn = "mysql:dbname=contagem_cliques_pag_pretinho;host=localhost";
$dbuser = "root";
$dbpass = "";

try{

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	// echo "conectado com sucesso";

}catch(PDOException $e){
    echo "Falhou:".$e->getMessage();
}



 ?>

 