<?php 
    class StudentController extends AppController{

        var $uses = array('Student');

        public function index(){

            $students_record = $this->Student->find('all');
            // Make data available for view
            $this->set('students_record', $this->Student->find('all'));
        }
        public function show(){

            echo '<pre>';
            $conditions = array('roll_no >'=>'1');
            $fields = array('roll_no','name');
            $order = array ('name ASC');
            
            echo '<b> All records without order</b><br>';
            $students_record=$this->Student->find('list');
            print_r($students_record);
            
            echo '<br>Filter and Selected Fields:</br>';
            $students_record=$this->Student->find('list',array(
                                                    'conditions'=>$conditions,
                                                    'fields'=>$fields));
            print_r($students_record);
            
            echo '<br>Filter and Selected Fields order by name:</br>';
            $students_record=$this->Student->find('list',array('conditions'=>$conditions,'fields'=>$fields,'order'=>$order));
            print_r($students_record);
            
            echo '<br>Limit 5 records :</br>';
            $students_record=$this->Student->find('list',array('limit'=>5));
            print_r($students_record);
        }
        public function add_students(){
            $student_record = array(
                                'Student' => array (
                                'name' => 'new student',
                                'email' => 'ns@gmail.com',
                                'contactno' => '938393839'
                                )
                            );  
            
            if($this->Student->save($student_record)){
                $new_id = $this->Student->id;
                $this->Session->setFlash('Student Saved - New student ID is ' . $new_id);
            }else{
                $this->Session->setFlash('Cannot save new student');
            }
        }
        public function update_students(){
    
        $student_record = array('roll_no'=>'1','name'=>'R. Johnson');

            if ($this->Student->save($student_record)){
                $this->Session->setFlash('Student Updated');
                }
                else{
                    $this->Session->setFlash('Cannot Save Student');
                }
        }

        public function delete_student(){
        
            if ($this->Student->delete(4)){
                $this->Session->setFlash('Student Deleted');
                }
                else{
                    $this->Session->setFlash('No record found');
                }
        }

        public function Display(){

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

        }
    }
?>
