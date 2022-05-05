<?php
namespace app\controllers;

class Participant extends \app\core\Controller{
	public function index(){
		$myParticipant = new \app\models\Participant();
		$participant = $myParticipant->getAll();
		$this->view('Participant/index',$participant);
	}
    /*
	 public function create(){
	 	if(!isset($_POST['action'])){	//display he view if I don't submit the form
	 		$this->view('Participant/create');
	 	}else{	//process the data
			$newClient = new \app\models\Participant();
	 		$newClient->first_name=$_POST['first_name'];
	 		$newClient->last_name=$_POST['last_name'];
	 		$newClient->notes=$_POST['notes'];
	 		$newClient->phone=$_POST['phone'];
			$newClient->insert();
			header('location:/Participant/index');
	 	}
	 }
     */

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

	public function delete($participant_id){//TODO: make sure to satisfy the issue for the constraint
		$customer = new \app\models\Customer();
		$customer->delete($participant_id);
		header('location:/Participant/index');
	}

	// public function details($client_id){
	// 	$client = new \app\models\Client();
	// 	$client= $client->get($client_id);//get the specific client
	// 	$this->view('Client/details', $client);
	// }
}