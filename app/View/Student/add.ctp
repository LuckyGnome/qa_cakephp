<h1>Add Student</h1>
<p>Use the form below to enter in the new users details. Then press Save Student to enter their data into the database.</p>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('contactno');
echo $this->Form->end('Save Student');
?>