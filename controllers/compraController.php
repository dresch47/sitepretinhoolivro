<?php 
 
 class compraController extends controller{
    
    public function index(){
    	$dados = array();

        $this->loadTemplate('compra',$dados);

    }

 }


 ?>