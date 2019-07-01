<?php 
 
 class footerController extends controller{
    
    public function index(){
    	$dados = array();

        $this->loadTemplate('footer',$dados);

    }

 }


 ?>