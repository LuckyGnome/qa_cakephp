<?php

	class InstituteController extends AppController{

		public function index(){
			$this->set('institute_name','QA LTD');
			$this->render('alt_index');
			$this->redirect(array('controller'=>'students','action'=>'add'));
		}
		
		public function add(){
			
			$institute = array("institute_id"=>"1","institute_name"=>"QA LTD");
			$this->set('institute_array',$institute);	
		}

		public function force_render(){
			$this->set('var','variable set before render');
			$this->render();
			//$this->set('var1','variable set after render');
		}

		public function redirect_ext(){
			$this->redirect('https://apprenticeships.qa.com/');
		}
		

	}


?>