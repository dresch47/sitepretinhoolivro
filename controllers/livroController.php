<?php 
 
 class livroController extends controller{
    
    public function index(){
    	$dados = array();

        $this->loadTemplate('livro',$dados);

    }

 }


 ?>