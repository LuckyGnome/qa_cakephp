<h1>Add Student</h1>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->end('Save Student');
?>