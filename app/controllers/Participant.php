<?php
namespace app\controllers;

class Participant extends \app\core\Controller {
	
	public function index() {
		$participant = new \app\models\Participant();
		$participant = $participant->getAll();
		$this->view('Participant/index', $participant);
	}
	
	public function medical() {
		$participant = new \app\models\Participant();
		$participant = $participant->getAll();
		$this->view('Participant/medical', $participant);
	}

	public function misc() {
		$participant = new \app\models\Participant();
		$participant = $participant->getAll();
		$this->view('Participant/misc', $participant);
	}
    
	public function create(){
	 	if (!isset($_POST['action'])) {	
	 		$this->view('Participant/create');
	 	} else {	
			$newParticipant = new \app\models\Participant();
	 		$newParticipant->customer_id=$_POST['customer_id'];
	 		$newParticipant->first_name=$_POST['first_name'];
	 		$newParticipant->last_name=$_POST['last_name'];
	 		$newParticipant->gender=$_POST['gender'];
			$newParticipant->address=$_POST['address'];
			$newParticipant->city=$_POST['city'];
			$newParticipant->postal_code=$_POST['postal_code'];
			$newParticipant->main_phone=$_POST['main_phone'];
			$newParticipant->secondary_phone=$_POST['secondary_phone'];
			$newParticipant->email=$_POST['email'];
			$newParticipant->occupation=$_POST['occupation'];
			$newParticipant->heard_from=$_POST['heard_from'];
			$newParticipant->years_of_practice=$_POST['years_of_practice'];
			$newParticipant->medical_insurance_nu=$_POST['medical_insurance_nu'];
			$newParticipant->expdate=$_POST['expdate'];
			$newParticipant->emer_contact=$_POST['emer_contact'];
			$newParticipant->relation_to_player=$_POST['relation_to_player'];
			$newParticipant->emerphone=$_POST['emerphone'];
			$newParticipant->allergies=$_POST['allergies'];
			$newParticipant->medhistory=$_POST['medhistory'];
			$newParticipant->epipen=$_POST['epipen'];
			$newParticipant->meds=$_POST['meds'];
			$newParticipant->specneeds=$_POST['specneeds'];
			$newParticipant->promotion=$_POST['promotion'];
			$newParticipant->transport=$_POST['transport'];
			$newParticipant->volunteer=$_POST['volunteer'];
			$newParticipant->family=$_POST['family'];
			$newParticipant->equipneeds=$_POST['equipneeds'];
			$newParticipant->notes=$_POST['notes'];
			$newParticipant->insert();
			header('location:/Participant/index');
	 	}
	}
     

	public function update($participant_id) {
	 	$participant = new \app\models\Participant();
	 	$participant = $participant->get($participant_id);
	 	if (!isset($_POST['action'])) {
	 		$this->view('Participant/update', $participant);
	 	} else {
			$participant->first_name=$_POST['first_name'];
			$participant->last_name=$_POST['last_name'];
			$participant->gender=$_POST['gender'];
			$participant->address=$_POST['address'];
			$participant->city=$_POST['city'];
			$participant->postal_code=$_POST['postal_code'];
			$participant->main_phone=$_POST['main_phone'];
			$participant->secondary_phone=$_POST['secondary_phone'];
			$participant->email=$_POST['email'];
			$participant->occupation=$_POST['occupation'];
			$participant->heard_from=$_POST['heard_from'];
			$participant->years_of_practice=$_POST['years_of_practice'];
			$participant->medical_insurance_nu=$_POST['medical_insurance_nu'];
			$participant->expdate=$_POST['expdate'];
			$participant->emer_contact=$_POST['emer_contact'];
			$participant->relation_to_player=$_POST['relation_to_player'];
			$participant->emerphone=$_POST['emerphone'];
			$participant->allergies=$_POST['allergies'];
			$participant->medhistory=$_POST['medhistory'];
			$participant->epipen=$_POST['epipen'];
			$participant->meds=$_POST['meds'];
			$participant->specneeds=$_POST['specneeds'];
			$participant->promotion=$_POST['promotion'];
			$participant->transport=$_POST['transport'];
			$participant->volunteer=$_POST['volunteer'];
			$participant->family=$_POST['family'];
			$participant->equipneeds=$_POST['equipneeds'];
			$participant->notes=$_POST['notes'];
	 		$participant->update();
	 		header('location:/Participant/index');
	 	}
	 }

	public function delete($participant_id) {
		$participant = new \app\models\Participant();
		$participant->delete($participant_id);
		header('location:/Participant/index');
	}

	public function details($participant_id) {
	 	$participant = new \app\models\Participant();
	 	$participant= $participant->get($participant_id);
	 	$this->view('Participant/details', $participant);
	}
}
