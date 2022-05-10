<?php
namespace app\models;

class Main extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}


	function exists(){ //returns false if the record does not exist and true otherwise
		return $this->get($this->username) != false;
	}

	function get($username){
		$SQL = 'SELECT * FROM admin WHERE username = :username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Main");
		return $STMT->fetch();
	}

	function insert(){
		$username = 'admin';
		$password = '123';


		$SQL = 'INSERT INTO admin(username,password_hash) VALUES(admin,123)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash]);
	}



}