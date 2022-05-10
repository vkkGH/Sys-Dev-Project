<?php 
namespace app\controllers;

class User extends \app\core\Controller{

	function index() {
		if (!isset($_POST['action'])) {
			$this->view('User/login');
		} else {
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if($user != false){
				if(password_verify($_POST['password'],$user->password_hash)) {
					$_SESSION['username'] = $user->username;
					$_SESSION['user_id'] = $user->user_id;
					header('location:/User/secureplace');
				} else {
					$this->view('User/login','Incorrect username/password combination.');
				}
			} else {
				$this->view('User/login','Incorrect username/password combination.');
			}
		}
	}

	#[\app\filters\Login]
	function logout(){
		session_destroy();//deletes the session ID and all data
		header('location:/User/index');
	}
}