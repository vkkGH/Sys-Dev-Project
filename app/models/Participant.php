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
			$SQL = 'INSERT INTO participant(customer_id, first_name, last_name, gender, dob, address, city, 
					postal_code, main_phone, secondary_phone, email, occupation, heard_from, years_of_practice, 
					medical_insurance_number, exp_date, emer_contact, relation_to_player, emer_phone, allergies, 
					med_history, epipen, meds, spec_needs, promotion, transport, volunteer, family, equip_needs, 
					notes) 
					VALUES(:first_name, :last_name, :gender, :address, :city, :postal_code, :main_phone, 
					:secondary_phone, :email, :occupation, :heard_from, :years_of_practice, :medical_insurance_number, 
					:exp_date, :emer_contact, :relation_to_player, :emer_phone, :allergies, :med_history, :epipen, 
					:meds, :spec_needs, :promotion, :transport, :volunteer, :family, :equip_needs, :notes)';
					
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['customer_id'=>$this->customer_id, 'first_name'=>$this->first_name, 
					'last_name'=>$this->last_name, 'gender'=>$this->gender, 'dob'=>$this->dob, 'address'=>$this->address,
					'city'=>$this->city, 'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone,
					'secondary_phone'=>$this->secondary_phone, 'email'=>$this->email, 'occupation'=>$this->occupation, 
					'heard_from'=>$this->heard_from, 'years_of_practice'=>$this->years_of_practice, 
					'medical_insurance_number'=>$this->medical_insurance_number, 'exp_date'=>$this->exp_date, 
					'emer_contact'=>$this->emer_contact, 'relation_to_player'=>$this->relation_to_player, 
					'emer_phone'=>$this->emer_phone, 'allergies'=>$this->allergies, 'med_history'=>$this->med_history, 
					'epipen'=>$this->epipen, 'meds'=>$this->meds, 'spec_needs'=>$this->spec_needs, 
					'promotion'=>$this->promotion, 'transport'=>$this->transport, 'volunteer'=>$this->volunteer, 
					'family'=>$this->family, 'equip_needs'=>$this->equip_needs, 'notes'=>$this->notes]);
		}
	}

	function update() {
		if (isValid()) {
			$SQL = 'UPDATE participant SET first_name = :first_name, last_name = :last_name, 
					gender = :gender, dob = :dob, address = :address, city = :city, postal_code = :postal_code, 
					main_phone = :main_phone, secondary_phone = :secondary_phone, email = :email, 
					occupation = :occupation, heard_from = :heard_from, years_of_practice = :years_of_practice, 
					medical_insurance_number = :medical_insurance_number, exp_date = :exp_date, emer_contact = :emer_contact, 
					relation_to_player = :relation_to_player, emer_phone = :emer_phone, allergies = :allergies, 
					med_history = :med_history, epipen = :epipen, meds = :meds, spec_needs = :spec_needs, 
					promotion = :promotion, transport = :transport , volunteer = :volunteer, family = :family, 
					equip_needs = :equip_needs, notes = :notes WHERE participant_id = :participant_id';
					
			$STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'gender'=>$this->gender, 'dob'=>$this->dob,
			'address'=>$this->address, 'city'=>$this->city, 'postal_code'=>$this->postal_code, 'main_phone'=>$this->main_phone,
			'secondary_phone'=>$this->secondary_phone,'email'=>$this->email, 'occupation'=>$this->occupation, 
			'heard_from'=>$this->heard_from, 'years_of_practice'=>$this->years_of_practice, 'medical_insurance_number'=>$this->medical_insurance_number, 
			'exp_date'=>$this->exp_date, 'emer_contact'=>$this->emer_contact, 'relation_to_player'=>$this->relation_to_player, 
			'emer_phone'=>$this->emer_phone, 'allergies'=>$this->allergies, 'med_history'=>$this->med_history, 'epipen'=>$this->epipen, 
			'meds'=>$this->meds, 'spec_needs'=>$this->spec_needs, 'promotion'=>$this->promotion, 'transport'=>$this->transport, 
			'volunteer'=>$this->volunteer, 'family'=>$this->family, 'equip_needs'=>$this->equip_needs, 'notes'=>$this->notes]);
		}
	}

	function delete($participant_id) {
		$SQL = 'DELETE FROM participant WHERE participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
	}
	
	function getCategory($participant_id) {
		$SQL = 'SELECT * FROM category JOIN participant ON category.participant_id = participant.participant_id WHERE category.participant_id = :participant_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['participant_id'=>$participant_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, "app\models\Participant");
		return $STMT->fetch();
	}
}
