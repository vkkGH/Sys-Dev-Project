<?php
namespace app\models;

class Participant extends \app\core\Model{

	function __construct(){
		parent::__construct();
	}

	function get($participant_id) {
		$SQL = 'SELECT * FROM participant WHERE participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Participant");
		return $STMT->fetch();
	}

	function getAll() {
		$SQL = 'SELECT * FROM participant';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Participant");
		return $STMT->fetchAll();
	}

	function insert() {
		if (isValid()) {
			$STMT = self::$_connection->prepare($SQL);
			$SQL = 'INSERT INTO participant(customer_id, first_name, last_name, gender, address, city, 
					postal_code, main_phone, secondary_phone, email, occupation, heard_from, years_of_practice, 
					medical_insurance_nu, expdate, emer_contact, relation_to_player, emerphone, allergies, 
					medhistory, epipen, meds, specneeds, promotion, transport, volunteer, family, equipneeds, 
					notes) 
					VALUES(:first_name, :last_name, :gender, :address, :city, :postal_code, :main_phone, 
					:secondary_phone, :email, :occupation, :heard_from, :years_of_practice, :medical_insurance_nu, 
					:expdate, :emer_contact, :relation_to_player, :emerphone, :allergies, :medhistory, :epipen, 
					:meds, :specneeds, :promotion, :transport, :volunteer, :family, :equipneeds, :notes)';
					
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['customer_id'=>$this->customer_id, 'first_name'=>$this->first_name, 
					'last_name'=>$this->last_name, 'gender'=>$this->gender, 'address'=>$this->address,
					'city'=>$this->city, 'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone,
					'secondary_phone'=>$this->secondary_phone, 'email'=>$this->email, 'occupation'=>$this->occupation, 
					'heard_from'=>$this->heard_from, 'years_of_practice'=>$this->years_of_practice, 
					'medical_insurance_nu'=>$this->medical_insurance_nu, 'expdate'=>$this->expdate, 
					'emer_contact'=>$this->emer_contact, 'relation_to_player'=>$this->relation_to_player, 
					'emerphone'=>$this->emerphone, 'allergies'=>$this->allergies, 'medhistory'=>$this->medhistory, 
					'epipen'=>$this->epipen, 'meds'=>$this->meds, 'specneeds'=>$this->specneeds, 
					'promotion'=>$this->promotion, 'transport'=>$this->transport, 'volunteer'=>$this->volunteer, 
					'family'=>$this->family, 'equipneeds'=>$this->equipneeds, 'notes'=>$this->notes]);
		}
	}

	function update() {
		if (isValid()) {
			$SQL = 'UPDATE participant SET first_name = :first_name, last_name = :last_name, 
					gender = :gender, address = :address, city = :city, postal_code = :postal_code, 
					main_phone = :main_phone, secondary_phone = :secondary_phone, email = :email, 
					occupation = :occupation, heard_from = :heard_from, years_of_practice = :years_of_practice, 
					medical_insurance_nu = :medical_insurance_nu, expdate = :expdate, emer_contact = :emer_contact, 
					relation_to_player = :relation_to_player, emerphone = :emerphone, allergies = :allergies, 
					medhistory = :medhistory, epipen = :epipen, meds = :meds, specneeds = :specneeds, 
					promotion = :promotion, transport = :transport , volunteer = :volunteer, family = :family, 
					equipneeds = :equipneeds, notes = :notes WHERE participant_id = :participant_id';
					
			$STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'gender'=>$this->gender, 
			'address'=>$this->address, 'city'=>$this->city, 'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone,
			'secondary_phone'=>$this->secondary_phone,'email'=>$this->email, 'occupation'=>$this->occupation, 
			'heard_from'=>$this->heard_from, 'years_of_practice'=>$this->years_of_practice, 'medical_insurance_nu'=>$this->medical_insurance_nu, 
			'expdate'=>$this->expdate, 'emer_contact'=>$this->emer_contact, 'relation_to_player'=>$this->relation_to_player, 
			'emerphone'=>$this->emerphone, 'allergies'=>$this->allergies, 'medhistory'=>$this->medhistory, 'epipen'=>$this->epipen, 
			'meds'=>$this->meds, 'specneeds'=>$this->specneeds, 'promotion'=>$this->promotion, 'transport'=>$this->transport, 
			'volunteer'=>$this->volunteer, 'family'=>$this->family, 'equipneeds'=>$this->equipneeds, 'notes'=>$this->notes]);
		}
	}

	function delete($participant_id) {
		$SQL = 'DELETE FROM participant WHERE participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
	}
}
