<?php 
    class StudentController extends AppController
    {
        var $uses = array('student');
        
        public function index(){

            $students_record = $this->Student->find('all');
            // Make data available for view
            $this->set('students_record',$students_record);
        }

        /*public function Display(){

            $var1 = '';
            $var2 = '';
            $var3 = '';
            
            if($this->request->is('post')){ // check data is posted
                $var1 = $this->request->data['name'];
                $var2 = $this->request->data['email'];
                $var3 = $this->request->data['contactno'];
                
            }
            // make data available for view
            $this->set('student_name',$var1);
            $this->set('student_email',$var2);
            $this->set('student_contact',$var3);
            $this->layout = "custom_layout";

        }*/
    }
?>
