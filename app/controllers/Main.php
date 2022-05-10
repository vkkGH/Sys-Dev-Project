<?php
namespace app\controllers;

class Main extends \app\core\Controller {

	public function index() {	
		$this->view('Main/index');
		if (!isset($_POST['login'])) {
			
		} else {
			if ('admin' == ($_POST['username']) && '1234' == ($_POST['password'])) {	
				header('location:/Home/index');
			}
		}
	}
}
