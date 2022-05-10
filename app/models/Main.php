<?php
namespace app\models;
class Main extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	function exists(){
		return $this->get($this->username) != false;
	}

	function get($username){
		$SQL = 'SELECT * FROM admin WHERE username = :username';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Main");
		return $STMT->fetch();
	}

	function insert(){
		$SQL = 'INSERT INTO admin (id,username,password_hash) VALUES(id,username, password_hash)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['id'=>$this->id,'username'=>$this->username,'password_hash'=>$this->password_hash]);
	}
}


