<?php
namespace app\controllers;

class Category extends \app\core\Controller{
	public function index(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getAll();
		$this->view('Category/index',$category);
		
	}

	public function getPamplemousse(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getPamplemousse();
		$this->view('Category/index',$category);
		
	}

	public function getU13(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU13();
		$this->view('Category/index',$category);
		
	}

	public function getU15(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU15();
		$this->view('Category/index',$category);
		
	}
	public function getU17(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU17();
		$this->view('Category/index',$category);
		
	}
	public function getU19(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getU19();
		$this->view('Category/index',$category);
		
	}

	public function getSenior(){
		$myCategory = new \app\models\Category();
		$category = $myCategory->getSenior();
		$this->view('Category/index',$category);
		
	}

	// public function create(){
	// 	if(!isset($_POST['action'])){	//display he view if I don't submit the form
	// 		$this->view('Category/create');
	// 	}else{	//process the data
	// 		$newCategory = new \app\models\Category();
	// 		$newCategory->first_name=$_POST['first_name'];
	// 		$newCategory->last_name=$_POST['last_name'];
	// 		$newCategory->notes=$_POST['notes'];
	// 		$newCategory->phone=$_POST['phone'];
	// 		$newCategory->insert();
	// 		header('location:/Category/index');
	// 	}
	// }

	public function update($participant_id){
		//TODO: update a specific record
		$category = new \app\models\Category();
		$category= $category->get($participant_id);//get the specific category
		//TODO: check if the category exists
		if(!isset($_POST['action'])){
			//show the view
			$this->view('Category/update', $category);
		}else{
			$category->category=$_POST['category'];
			$category->schedule=$_POST['schedule'];
			$category->practices_per_week=$_POST['practices_per_week'];
			$category->update();
			header('location:/Category/get' . $category->category);
		}
	}

	public function delete($category_id){//TODO: make sure to satisfy the issue for the constraint
		$category = new \app\models\Category();
		$category->delete($category_id);
		header('location:/Category/index');
	}

	// public function details($category_id){
	// 	$category = new \app\models\Category();
	// 	$category= $category->get($category_id);//get the specific category
	// 	$this->view('Category/details', $category);
	// }
}