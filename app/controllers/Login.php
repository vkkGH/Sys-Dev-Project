<?php 
namespace app\controllers;

class User extends \app\core\Controller{
	
	//TODO: Model with get, insert, exists
	//TODO: registration and login view

	function index(){//login here
		if(!isset($_POST['action'])){//there is no form being submitted
			$this->view('User/login');
		}else{//there is a form submitted
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);
			if($user != false){
				if(password_verify($_POST['password'],$user->password_hash)){
					//yay! login - store that state in a session
					$_SESSION['username'] = $user->username;
					$_SESSION['user_id'] = $user->user_id;

					header('location:/User/secureplace');
				}else{
					//not the correct password
					$this->view('User/login','Incorrect username/password combination.');
				}
			}else{
				$this->view('User/login','Incorrect username/password combination.');
			}
		}
	}

	

	#[\app\filters\Login]
	function logout(){
		session_destroy();//deletes the session ID and all data
		header('location:/User/index');
	}

	//toy application
	//TODO: learn about access filtering
	
	#[\app\filters\Login]
	function secureplace(){
		echo 'You are logged in!<a href="/User/logout">Logout</a>';
	}

}