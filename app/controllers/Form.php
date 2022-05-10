<?php
namespace app\controllers;

class Form extends \app\core\Controller {

	public function index() {

		if (!isset($_POST['action'])) {	
			$this->view('Form/index');
		} else {
			$newCustomer 	= new \app\models\Customer();
			$newParticipant = new \app\models\Participant();
			$newCategory 	= new \app\models\Form();
			
			$newCustomer->first_name 			= $_POST['first_name'];
			$newCustomer->last_name 			= $_POST['last_name'];
			$newCustomer->gender 				= $_POST['gender'];
			$newCustomer->address 				= $_POST['address'];
			$newCustomer->city 					= $_POST['city'];
			$newCustomer->postal_code 			= $_POST['postal_code'];
			$newCustomer->main_phone 			= $_POST['main_phone'];
			$newCustomer->secondary_phone 		= $_POST['secondary_phone'];
			$newCustomer->email 				= $_POST['email'];
			$newCustomer->laval_reward 			= $_POST['laval_reward'];
			$newCustomer->payment_installments 	= $_POST['payment_installments'];
			$newCustomer->payment_method 		= $_POST['payment_method'];

			$newCustomer->insert();

			$customer = new \app\models\Customer();
            $customer = $customer->getName($_POST['last_name']);

            $newParticipant->customer_id 		= $customer->customer_id;

			if ($_POST['responsible'] == 'yes') {
				$newParticipant->first_name 	= $_POST['first_name'];
				$newParticipant->last_name 		= $_POST['last_name'];
				$newParticipant->gender 		= $_POST['gender'];
				
			} else {
				$newParticipant->first_name 	= $_POST['participant_first_name'];
				$newParticipant->last_name 		= $_POST['participant_last_name'];
				$newParticipant->gender 		= $_POST['participant_gender'];
			}
			
			$newParticipant->dob 						= $_POST['dob'];
			$newParticipant->address 					= $_POST['address'];
			$newParticipant->city 						= $_POST['city'];
			$newParticipant->postal_code 				= $_POST['postal_code'];
			$newParticipant->main_phone 				= $_POST['main_phone'];
			$newParticipant->secondary_phone			= $_POST['secondary_phone'];
			$newParticipant->email 						= $_POST['email'];
			$newParticipant->occupation					      = $_POST['occupation'];
			$newParticipant->heard_from 				      = $_POST['heard_from'];
			$newParticipant->years_of_practice			  = $_POST['years_of_practice'];
			$newParticipant->medical_insurance_number	= $_POST['medical_insurance_number'];
			$newParticipant->exp_date					    = $_POST['exp_date'];
			$newParticipant->emer_contact				  = $_POST['emer_contact'];
			$newParticipant->relation_to_player	  = $_POST['relation_to_player'];
			$newParticipant->emer_phone					  = $_POST['emer_phone'];
			$newParticipant->allergies					  = $_POST['allergies'];
			$newParticipant->med_history				  = $_POST['med_history'];
			$newParticipant->epipen						    = $_POST['epipen'];
			$newParticipant->emer_phone					  = $_POST['emer_phone'];
			$newParticipant->meds						      = $_POST['meds'];
			$newParticipant->spec_needs					  = $_POST['spec_needs'];
			$newParticipant->promotion					  = $_POST['promotion'];
			$newParticipant->transport					  = $_POST['transport'];
			$newParticipant->volunteer					  = $_POST['volunteer'];
			$newParticipant->family						    = $_POST['family'];
			$newParticipant->equip_needs				  = $_POST['equip_needs'];
			$newParticipant->notes						    = $_POST['notes'];

			$newParticipant->insert();

			$participant = new \app\models\Participant();
      $participant = $participant->getNum($_POST['medical_insurance_number']);

			$newCategory->participant_id 	= $participant->participant_id;
			$newCategory->category 				= $_POST['category'];
			$newCategory->schedule 				= $_POST['schedule'];

			if ($_POST['category'] == 'PAMPLEMOUSSE'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getPamplemousse();
				if (count($category) < 10){
					$tempSchedule= $_POST['schedule'];
				} else {
					header('location:/Form/failure');
				}
				
			}
			if ($_POST['category'] == 'U13'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getU13();
				if (count($category) < 10){
					$tempSchedule = "Sunday, Tuesday";
				} else {
					header('location:/Form/failure');
				}
				
			}
			if ($_POST['category'] == 'U15'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getU15();
				if (count($category) < 10){
					$tempSchedule = "Thursday, Friday";
				} else {
					header('location:/Form/failure');
				}
				
			}
			if ($_POST['category'] == 'U17'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getU17();
				if (count($category) < 10){
					$tempSchedul = "Sunday, Tuesday";
				} else {
					header('location:/Form/failure');
				}
				
			}
			if ($_POST['category'] == 'U19'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getU19();
				if (count($category) < 10){
					$tempSchedule = "Tuesday, Friday";
				} else {
					header('location:/Form/failure');
				}
				
			}
			if ($_POST['category'] == 'SENIOR'){
				$myCategory = new \app\models\Category();
				$category = $myCategory->getSENIOR();
				if (count($category) < 10){
					$tempSchedule = "Friday, Saturday";
				} else {
					header('location:/Form/failure');
				}
				
			}

			$newCategory->schedule = $tempSchedule;
			$newCategory->practices_per_week = count(explode(",", $tempSchedule));

			$newCategory->insert();
      
			header('location:/Form/success');
		}
	}

	public function success(){
        $this->view('Form/success');
  }

	public function failure(){
		$this->view('Form/failure');
	}
}