<?php
namespace app\controllers;

class Form extends \app\core\Controller{
	public function index(){
		if(!isset($_POST['action'])){	
			$this->view('Form/index');
		}else{	
			$newForm = new \app\models\Form();
			$newForm->category=$_POST['category'];
			$newForm->schedule=$_POST['schedule'];
			if ($_POST['category'] == 'PAMPLEMOUSSE'){
				$tempSchedule=$_POST['schedule'];
			}
			if ($_POST['U13'] == 'U13'){
				$tempSchedule= "Sunday, Tuesday";
			}
			if ($_POST['U15'] == 'U15'){
				$tempSchedule = "Thursday, Friday";
			}
			if ($_POST['U17'] == 'U17'){
				$tempSchedul = "Sunday, Tuesday";
			}
			if ($_POST['U19'] == 'U19'){
				$tempSchedule = "Tuesday, Friday";
			}
			if ($_POST['SENIOR'] == 'SENIOR'){
				$tempSchedule = "Friday, Saturday";
			}
			$newForm->schedule = $tempSchedule;
			$newForm->practices_per_week = count(preg_split(",",$tempSchedule));
			$newForm->insert();
			header('location:/Form/success');
		}
		
	}


}