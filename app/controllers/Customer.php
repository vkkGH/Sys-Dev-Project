<?php
namespace app\controllers;

class Customer extends \app\core\Controller {
	
	public function index() {
		if(!isset($_POST['search'])) {
			$customer = new \app\models\Customer();
			$data = $customer->getAll();
			$this->view('Customer/index', $data);
		}else {
			$customers = new \app\models\Customer();
			$data = $customers -> getCustomerBySearch($_POST['csearch']);
			$this->view('Customer/index', $data);
		}
	}

	// public function create(){
	// 	if(!isset($_POST['action'])){	//display he view if I don't submit the form
	// 		$this->view('Customer/create');
	// 	}else{	//process the data
	// 		$newClient = new \app\models\Client();
	// 		$newClient->first_name=$_POST['first_name'];
	// 		$newClient->last_name=$_POST['last_name'];
	// 		$newClient->notes=$_POST['notes'];
	// 		$newClient->phone=$_POST['phone'];
	// 		$newClient->insert();
	// 		header('location:/Client/index');
	// 	}
	// }

	// public function update($client_id){
	// 	//TODO: update a specific record
	// 	$client = new \app\models\Client();
	// 	$client= $client->get($client_id);//get the specific client
	// 	//TODO: check if the client exists
	// 	if(!isset($_POST['action'])){
	// 		//show the view
	// 		$this->view('Client/update', $client);
	// 	}else{
	// 		$client->first_name=$_POST['first_name'];
	// 		$client->last_name=$_POST['last_name'];
	// 		$client->notes=$_POST['notes'];
	// 		$client->phone=$_POST['phone'];
	// 		$client->update();
	// 		header('location:/Client/index');
	// 	}
	// }

	public function delete($customer_id) {
		$customer = new \app\models\Customer();
		$customer->delete($customer_id);
		header('location:/Customer/index');
	}

	public function details($customer_id) {
		$customer = new \app\models\Customer();
		$data = $customer->get($customer_id);
		$this->view('Customer/details', $data);
	}
}
