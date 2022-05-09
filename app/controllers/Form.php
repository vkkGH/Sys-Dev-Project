<?php
namespace app\controllers;

class Form extends \app\core\Controller{
	public function index(){
		
		$this->view('Form/index');
	}

	public function create(){
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Form/create');
		}else{	//process the data
			$newForm = new \app\models\Form();
			$newForm->first_name=$_POST['first_name'];
			$newForm->last_name=$_POST['last_name'];
			$newForm->notes=$_POST['notes'];
			$newForm->phone=$_POST['phone'];
			$newForm->insert();
			header('location:/Form/index'); //TODO: if the form wasnt fully filled throw an error message and redirect them back to the form
		}
	}

	public function update($client_id){
		//TODO: update a specific record
		$client = new \app\models\Form();
		$client= $client->get($client_id);//get the specific client
		//TODO: check if the client exists
		if(!isset($_POST['action'])){
			//show the view
			$this->view('Form/update', $client);
		}else{
			$client->first_name=$_POST['first_name'];
			$client->last_name=$_POST['last_name'];
			$client->notes=$_POST['notes'];
			$client->phone=$_POST['phone'];
			$client->update();
			header('location:/Form/index');
		}
	}

	public function delete($client_id){//TODO: make sure to satisfy the issue for the constraint
		$client = new \app\models\Form();
		$client->delete($client_id);
		header('location:/Form/index');
	}

	public function details($client_id){
		$client = new \app\models\Form();
		$client= $client->get($client_id);//get the specific client
		$this->view('Form/details', $client);
	}

	public function contactInformation(){
		$fileHandle = fopen('contactInformation.txt', 'r');

		flock($fileHandle, LOCK_SH);

		$jsonData = fread($fileHandle, 1024);

		fclose($fileHandle);

		$dataObj = json_decode($jsonData);

		$this->view('Form/contactInformation', $dataObj);

	}

}