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
			
			$newForm->schedule = $tempSchedule;
			$newForm->practices_per_week = count(explode(",",$tempSchedule));
			$newForm->insert();
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