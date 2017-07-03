<?php 
    class StudentController extends AppController{
        //Atribute
        public $helpers = array('Html', 'Form', 'Session');

        public $components = array('Session');
        var $uses = array('Student');
        
        //functions
        public function index(){

            $students_record = $this->Student->find('all');
            // Make data available for view
            $this->set('students_record', $students_record);
        }
       /* public function show(){

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
        }*/
        public function add() {
            
            if($this->request->is('post')){

                $this->Student->create();

                if ($this->Student->save($this->request->data)) {

                    $this->Session->setFlash(__('Student has been saved.'));

                    $this->redirect(array('action' => 'index'));
                
                } else {
                    $this->Session->setFlash(__('Unable to add Student.'));
                }
            }
        }
        public function edit($roll_no = null) {

            if(!$roll_no){

                throw new NotFoundException(__('Invalid Student'));

            }

            $student = $this->Student->findByroll_no($roll_no);

            if(!$student){
             
                throw new NotFoundException(__('Invalid Student'));
            
            }

            if($this->request->is('post') || $this->request->is('put')){
                
                $this->Student->roll_no = $roll_no;

                if($this->Student->save($this->request->data)){
             
                    $this->Session->setFlash(__('Student has been updated.'));
                    $this->redirect(array('action' => 'index'));
             
                }else{
             
                    $this->Session->setFlash(__('Unable to update Student.'));
             
                }
            }
            if(!$this->request->data){

            $this->request->data = $student;
            
            }
        }

        /*   public function delete_student(){
        
            if($this->Student->delete(4)){

                $this->Session->setFlash('Student Deleted');

                } else {

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

        } */
        public function view($roll_no = null) {
            $this->loadModel('Student');


            if(!$roll_no){

            throw new NotFoundException(__('Invalid Student'));

            }

            $students_record = $this->Student->findByroll_no($roll_no);
            
            if(!$students_record){

                throw new NotFoundException(__('Invalid user'));
            
            }
            
            $this->set('student', $students_record);
        
        }

        public function delete($roll_no) {

            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }

            if ($this->Student->delete($roll_no)){
                $this->Session->setFlash(__('The user having roll number: %s has been deleted.', $roll_no));
                $this->redirect(array('action' => 'index'));
            }
        }
        public function download(){
            $this->view = 'Media';
            $params = array(
            'id' => 'student_app_guide.pdf',
            'name' => 'student_app_guide',
            'mimeType' => 'text/pdf pdf',
            'download' => true,
            'extension' => 'pdf',
            'path' => APP . 'View/Student/' . DS
            );
            
            $this->set($params);
            $this->autoLayout = false;

        }
    }
?>
