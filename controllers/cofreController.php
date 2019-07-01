<?php 
 
 class cofreController extends controller{
    
    public function index(){
    	$dados = array();

        $this->loadTemplate('cofre',$dados);

    }

 }


 ?>