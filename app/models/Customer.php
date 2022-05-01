<?php
namespace app\models;

class Customer extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	// function getOwner(){
	// 	$SQL = 'SELECT * FROM client WHERE client_id = :client_id';
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['client_id'=>$this->client_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Client");
	// 	return $STMT->fetch();

	// }

	function get($customer_id){
		$SQL = 'SELECT * FROM customer WHERE customer_id = :customer_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['customer_id'=>$customer_id]);
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetch();
	}

	function getAll(){
		$SQL = 'SELECT * FROM customer';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		//TODO:add something here to make the return types cooler
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetchAll();
	}

	// function getAllForClient($client_id){
	// 	$SQL = 'SELECT * FROM animal WHERE client_id=:client_id';
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['client_id'=>$client_id]);
	// 	//TODO:add something here to make the return types cooler
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Animal");
	// 	return $STMT->fetchAll();
	// }

	function insert(){
		if(isValid()){
			$SQL = 'INSERT INTO customer(first_name,last_name,gender, address, city, postal_code, main_phone, secondary_phone, email, laval_reward, payment_installments, payment_method) VALUES(:first_name,:last_name,:gender,:address,:city,:postal_code,:main_phone,:secondary_phone,:email,:laval_reward,:payment_installments,:payment_method)';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'gender'=>$this->gender, 'address'=>$this->address,'city'=>$this->city,'postal_code'=>$this->postal_code,'main_phone'=>$this->main_phone,'secondary_phone'=>$this->secondary_phone,'email'=>$this->email,'laval_reward'=>$this->laval_reward,'payment_installments'=>$this->payment_installments,'payment_method'=>$this->payment_method]);
		}
	}

	function update(){
		if(isValid()){
			$SQL = 'UPDATE customer SET first_name = :first_name, last_name = :last_name, gender = :gender, address = :address, city = :city, postal_code = :postal_code, main_phone = :main_phone, secondary_phone = :secondary_phone, email = :email, laval_reward = :laval_reward, payment_installments = :payment_installments, payment_method = :payment_method WHERE customer_id = :customer_id';
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'gender'=>$this->gender, 'address'=>$this->address,'city'=>$this->city,'postal_code'=>$this->postal_code,'main_phone'=>$this->main_phone,'secondary_phone'=>$this->secondary_phone,'email'=>$this->email,'laval_reward'=>$this->laval_reward,'payment_installments'=>$this->payment_installments,'payment_method'=>$this->payment_method, 'customer_id'=>$this->customer_id]);
		}
	}

	function delete($customer_id){
		$SQL = 'DELETE FROM customer WHERE customer_id = :customer_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['customer_id'=>$customer_id]);
	}
}