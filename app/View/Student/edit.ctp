<h1>Edit Student</h1>
<p>Here you can edit an existing Students details. Hit Update Student once you have updated the data.</p>
<?php

echo $this->Form->create('Student');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('contactno');
echo $this->Form->input('roll_no', array('type' => 'hidden'));
echo $this->Form->end('Update Student');
?>



<?php echo $this->Html->link(

	'Back To Home',

	array('controller' => 'Student', 'action' => 'index')

	); ?>