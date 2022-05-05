<?php

namespace app\controllers;

class Form extends \app\core\Controller{


    function register(){
		if(!isset($_POST['action'])){/
			$this->view('Form/index');

		}else{
			$newForm = new \app\models\Form();
		

		}
	}






}





?>