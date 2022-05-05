<?php

    namespace app\models;
    class form extends \app\core\Model{

        function __construct(){
                 parent::__construct();
        }


        function insert()

        $SQL = 'INSERT INTO participant(first_name,last_name,gender,dob,address,city,postal_code,main_phone, secondary_phone,email,
                                        occupation, heard_from, years_of_practice, medical_insurance_number, exp_date,emer_contact,
                                        relation_to_player, emer_phone, allergies, med_history,epipen,meds, spec_needs, promotion,
                                        transport, volunteer, family, equip_needs, notes)';

        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['first_name'=>$this->first_name,'last_name'=>$this->last_name,'gender'=>$this->gender,'dob'=>$this->dob
        ,'address'=>$this->address,'city'=>$this->city,'postal_code'=>$this->postal_code,'main_phone'=>$this->main_phone
        ,'secondary_phone'=>$this->secondary_phone,'occupation'=>$this->occupation,'heard_from'=>$this->heard_from,'years_of_practice'=>$this->years_of_practice
        ,'medical_insurance_number'=>$this->medical_insurance_number,'exp_date'=>$this->exp_date,'emer_contact'=>$this->emer_contact,
        'relation_to_player'=>$this->relation_to_player,'emer_phone'=>$this->emer_phone,'allergies'=>$this->allergies,'med_history'=>$this->med_history
        ,'epipen'=>$this->epipen,'meds'=>$this->meds,'spec_needs'=>$this->spec_needs,'promotion'=>$this->promotion,'transport'=>$this->transport
        ,'volunteer'=>$this->volunteer,'family'=>$this->family,'equip_needs'=>$this->equip_needs,'notes'=>$this->notes]);





    }










?>