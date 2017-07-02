<h1>Name:<?php echo h($student['Student']['name']); ?></h1>

<h1>Email:<?php echo h($student['Student']['email']); ?></h1>

<h1>Contact No: <?php echo h($student['Student']['contactno']);?></h1>

<?php echo $this->Html->link(

	'Back To Home',

	array('controller' => 'Student', 'action' => 'index')

	); ?>