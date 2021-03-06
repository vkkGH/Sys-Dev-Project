<?php
namespace app\models;

class Customer extends \app\core\Model {

	function __construct() {
		parent::__construct();
	}

	function get($customer_id) {
		$SQL = 'SELECT * FROM customer WHERE customer_id = :customer_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['customer_id'=>$customer_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetch();
	}

	function getName($last_name) {
        $SQL = 'SELECT * FROM customer WHERE last_name = :last_name';
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['last_name'=>$last_name]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
        return $STMT->fetch();
    }

	function getAll() {
		$SQL = 'SELECT * FROM customer';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetchAll();
	}

	function insert() {
		// if (isValid()) {
			$SQL = 'INSERT INTO customer(first_name, last_name, gender, address, city, postal_code, 
					main_phone, secondary_phone, email, laval_reward, payment_installments, payment_method) 
					VALUES(:first_name, :last_name, :gender, :address, :city, :postal_code, :main_phone, 
					:secondary_phone, :email, :laval_reward, :payment_installments, :payment_method)';
					
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 
					'gender'=>$this->gender, 'address'=>$this->address, 'city'=>$this->city, 
					'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone, 
					'secondary_phone'=>$this->secondary_phone, 'email'=>$this->email, 
					'laval_reward'=>$this->laval_reward, 'payment_installments'=>$this->payment_installments, 
					'payment_method'=>$this->payment_method]);
		// }
	}

	function update() {
			$SQL = 'UPDATE customer SET first_name = :first_name, last_name = :last_name, gender = :gender, 
			address = :address, city = :city, postal_code = :postal_code, main_phone = :main_phone, 
			secondary_phone = :secondary_phone, email = :email, laval_reward = :laval_reward, 
			payment_installments = :payment_installments, payment_method = :payment_method 
			WHERE customer_id = :customer_id';
			
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 
					'gender'=>$this->gender, 'address'=>$this->address, 'city'=>$this->city, 
					'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone, 
					'secondary_phone'=>$this->secondary_phone, 'email'=>$this->email, 
					'laval_reward'=>$this->laval_reward, 'payment_installments'=>$this->payment_installments, 
					'payment_method'=>$this->payment_method, 'customer_id'=>$this->customer_id]);
	}

	function delete($customer_id) {
		$SQL = 'DELETE FROM customer WHERE customer_id = :customer_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['customer_id'=>$customer_id]);
	}

	public function getCustomerBySearch($Customer) {
		$yes = "WHERE customer_id LIKE '%$Customer%' OR first_name LIKE '%$Customer%' OR last_name LIKE '%$Customer%' OR gender LIKE '%$Customer%' OR address LIKE '%$Customer%' OR city LIKE '%$Customer%' OR postal_code LIKE '%$Customer%' OR main_phone LIKE '%$Customer%' OR secondary_phone LIKE '%$Customer%' OR email LIKE '%$Customer%' OR laval_reward LIKE '%$Customer%' OR payment_installments LIKE '%$Customer%' OR payment_method LIKE '%$Customer%'";
		$SQL = "SELECT * FROM Customer $yes";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetchAll();
	}

	public function getPaymentInfoBySearch($Customer) {
		$yes = "WHERE customer_id LIKE '%$Customer%' OR first_name LIKE '%$Customer%' OR last_name LIKE '%$Customer%' OR gender LIKE '%$Customer%' OR main_phone LIKE '%$Customer%' OR secondary_phone LIKE '%$Customer%' OR email LIKE '%$Customer%' OR payment_installments LIKE '%$Customer%' OR payment_method LIKE '%$Customer%'";
		$SQL = "SELECT * FROM Customer $yes";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Customer");
		return $STMT->fetchAll();
	}
}
