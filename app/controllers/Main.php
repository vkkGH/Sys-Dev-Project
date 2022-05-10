<?php


namespace app\controllers;

class Main extends \app\core\Controller {


	
	public function index() {	
		$this->view('Main/index');

		
//temp to be deleted

	if(!isset($_POST['login'])){//there is no form being submitted
		
		}else{//there is a form submitted
			
			if('admin' == ($_POST['username']) && '1234' == ($_POST['password']) )
			{	



					header('location:/Home/index');

                 


		}
	}



//Can someone test this out



//		$main = new \app\models\Main();
//			$main->insert();

	
//if(!isset($_POST['login'])){//there is no form being submitted
		
//		}else{//there is a form submitted
	
//		$main = $main->get($_POST['username']);
//		if($user != false){
//		if(password_verify($_POST['password'],$main->password_hash)){
//				//yay! login - store that state in a session
	//				$_SESSION['username'] = $main->username;
	//			$_SESSION['user_id'] = $main->user_id;






	//			header('location:/Home/index');
//				}else{
	//			//not the correct password
////				$this->view('Main/index','Incorrect username/password combination.');
//		}
//			}else{
//		$this->view('Main/index','Incorrect username/password combination.');
//			}
//		}
//	}

//	public function create(){
//		$this->view('Main/index');

//		$addadmin = new \app\models\Main();
//		$password = 123;
//		$hash = password_hash($password, PASSWORD_DEFAULT);
//	$addadmin ->id= 1;
//	$addadmin ->username= 'admin';
//	$addadmin ->password_hash = $hash;
//	$addadmin ->insert();






	}



}
