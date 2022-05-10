<?php
namespace app\controllers;

class Participant extends \app\core\Controller {
	
	public function index() {
		if (!isset($_POST['search'])) {
			$participant = new \app\models\Participant();
			$participant = $participant->getAll();
			$this->view('Participant/index', $participant);
		} else {
			$participants = new \app\models\Participant();
			$participant = $participants -> getParticipantBySearch($_POST['csearch']);
			$this->view('Participant/index', $participant);
		}
	}
	
	public function medical() {
		if (!isset($_POST['search'])) {
			$participant = new \app\models\Participant();
			$participant = $participant->getAll();
			$this->view('Participant/medical', $participant);
		} else {
			$participants = new \app\models\Participant();
			$participant = $participants -> getParticipantBySearch($_POST['csearch']);
			$this->view('Participant/medical', $participant);
		}
	}

	public function misc() {
		if (!isset($_POST['search'])) {
			$participant = new \app\models\Participant();
			$participant = $participant->getAll();
			$this->view('Participant/misc', $participant);
		} else {
			$participants = new \app\models\Participant();
			$participant = $participants -> getParticipantsMiscBySearch($_POST['csearch']);
			$this->view('Participant/misc', $participant);
		}
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
			$newParticipant->last_name=$_POST['dob'];
			$newParticipant->address=$_POST['address'];
			$newParticipant->city=$_POST['city'];
			$newParticipant->postal_code=$_POST['postal_code'];
			$newParticipant->main_phone=$_POST['main_phone'];
			$newParticipant->secondary_phone=$_POST['secondary_phone'];
			$newParticipant->email=$_POST['email'];
			$newParticipant->occupation=$_POST['occupation'];
			$newParticipant->heard_from=$_POST['heard_from'];
			$newParticipant->years_of_practice=$_POST['years_of_practice'];
			$newParticipant->medical_insurance_nu=$_POST['medical_insurance_number'];
			$newParticipant->expdate=$_POST['exp_date'];
			$newParticipant->emer_contact=$_POST['emer_contact'];
			$newParticipant->relation_to_player=$_POST['relation_to_player'];
			$newParticipant->emerphone=$_POST['emer_phone'];
			$newParticipant->allergies=$_POST['allergies'];
			$newParticipant->medhistory=$_POST['med_history'];
			$newParticipant->epipen=$_POST['epipen'];
			$newParticipant->meds=$_POST['meds'];
			$newParticipant->specneeds=$_POST['spec_needs'];
			$newParticipant->promotion=$_POST['promotion'];
			$newParticipant->transport=$_POST['transport'];
			$newParticipant->volunteer=$_POST['volunteer'];
			$newParticipant->family=$_POST['family'];
			$newParticipant->equipneeds=$_POST['equip_needs'];
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
			$participant->last_name=$_POST['dob'];
			$participant->address=$_POST['address'];
			$participant->city=$_POST['city'];
			$participant->postal_code=$_POST['postal_code'];
			$participant->main_phone=$_POST['main_phone'];
			$participant->secondary_phone=$_POST['secondary_phone'];
			$participant->email=$_POST['email'];
			$participant->occupation=$_POST['occupation'];
			$participant->heard_from=$_POST['heard_from'];
			$participant->years_of_practice=$_POST['years_of_practice'];
			$participant->medical_insurance_nu=$_POST['medical_insurance_number'];
			$participant->expdate=$_POST['expdate'];
			$participant->emer_contact=$_POST['emer_contact'];
			$participant->relation_to_player=$_POST['relation_to_player'];
			$participant->emerphone=$_POST['emer_phone'];
			$participant->allergies=$_POST['allergies'];
			$participant->medhistory=$_POST['med_history'];
			$participant->epipen=$_POST['epipen'];
			$participant->meds=$_POST['meds'];
			$participant->specneeds=$_POST['specneeds'];
			$participant->promotion=$_POST['promotion'];
			$participant->transport=$_POST['transport'];
			$participant->volunteer=$_POST['volunteer'];
			$participant->family=$_POST['family'];
			$participant->equipneeds=$_POST['equip_needs'];
			$participant->notes=$_POST['notes'];
	 		$participant->update();
			$category->update();
	 		header('location:/Participant/index');
	 	}
	 }

	public function updateCategory($participant_id) {
		$category = new \app\models\Category();
		$category= $category->get($participant_id);
		if (!isset($_POST['action'])) {
			$this->view('Category/update', $category);
		} else {
			$category->category=$_POST['category'];
			$category->schedule=$_POST['schedule'];
			$category->practices_per_week=$_POST['practices_per_week'];
			$category->update();
			header('location:/Category/get' . $category->category);
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
