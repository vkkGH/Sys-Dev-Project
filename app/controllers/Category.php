<?php
namespace app\controllers;

class Category extends \app\core\Controller {

	public function index() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getAll();
		$this->view('Category/index',$category);
	}

	public function getPamplemousse() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getPamplemousse();
		$this->view('Category/index',$category);
	}

	public function getU13(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU13();
		$this->view('Category/index',$category);
		
	}

	public function getU15() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU15();
		$this->view('Category/index',$category);
		
	}
  
	public function getU17() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU17();
		$this->view('Category/index',$category);
		
	}
  
	public function getU19() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU19();
		$this->view('Category/index',$category);
		
	}

	public function getSenior() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getSenior();
		$this->view('Category/index',$category);
		
	}

	public function total() {
		$myCategory = new \app\models\Category();
		$category = $myCategory->getSenior();
		$total = count($myCategory->getPamplemousse()) + count($myCategory->getU13()) + count($myCategory->getU15()) + count($myCategory->getU17()) + count($myCategory->getU19()) + count($myCategory->getSENIOR());
		$this->view('Category/total',$total);
		
	}

	public function update($participant_id) {
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

	public function delete($category_id) {
		$category = new \app\models\Category();
		$category->delete($category_id);
		header('location:/Category/index');
	}
}
