<?php
namespace app\models;

class Category extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}


	function get($participant_id){
		$SQL = 'SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetch();
	}

	function getU13(){
		$SQL = "SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.category = 'U13'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}

	function getU15(){
		$SQL = "SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.category = 'U15'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}
	function getU17(){
		$SQL = "SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.category = 'U17'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}
	function getU19(){
		$SQL = "SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.category = 'U19'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}
	function getSenior(){
		$SQL = "SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.category = 'SENIOR'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}

	function getAll(){
		$SQL = 'SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Category");
		return $STMT->fetchAll();
	}

	

	function insert(){
		
			$SQL = 'INSERT INTO category(participant_id,category,schedule,practices_per_week) VALUES(:participant_id,:category,:schedule,:practices_per_week)';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['participant_id'=>$this->participant_id,'category'=>$this->category,'schedule'=>$this->schedule, 'practices_per_week'=>$this->practices_per_week]);
		
	}

	function update(){

			$SQL = 'UPDATE category SET category = :category, schedule = :schedule, practices_per_week = :practices_per_week WHERE participant_id = :participant_id';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['category'=>$this->category,'schedule'=>$this->schedule,'practices_per_week'=>$this->practices_per_week,'participant_id'=>$this->participant_id]);
		
	}

	function delete($participant_id){
		$SQL = 'DELETE FROM category WHERE participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
	}
}