<?php 
require "config.php";


 $sql = "INSERT INTO cliques_comprar SET data= date()";
 $sql = "INSERT INTO cliques_comprar SET cliques_dados = '4536'";
 $sql = $pdo->query($sql);

 echo "clique inserido no banco de dados.";



 ?>