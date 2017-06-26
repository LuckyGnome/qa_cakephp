<?php


class PeopleController extends AppController {

	public $helpers = array('Html','Form');

	public function index(){

		echo "Index page yo";

		$this->set('students_record', $this->Student->find('all'));


	}
	public function edit_student(){

	}
	public function delete_student(){

	}


}



?>