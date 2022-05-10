<?php
namespace app\models;

class Form extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function insert() {
		$SQL = 'INSERT INTO category(participant_id, category, schedule, practices_per_week) 
				VALUES(:participant_id, :category,:schedule, :practices_per_week)';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$this->participant_id, 'category'=>$this->category, 
				'schedule'=>$this->schedule, 'practices_per_week'=>$this->practices_per_week]);
	}
}
