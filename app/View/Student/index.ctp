

<h1>Student Managment</h1>
<div style="margin-left: 300px;">
	<?php echo $this->Html->link(

	'Add Student',

	array('controller' => 'Student', 'action' => 'add')

	); ?>

	<table style="width: 50%;">
	<tr>
		<th>Roll Number</th>
		<th>Student Name</th>
		<th>Email</th>
		<th>Contact No</th>
		<th>Action</th>
	</tr>
	<?php foreach($students_record as $s): ?>
	<tr>
		<td><?php echo $s['Student']['roll_no']; ?></td>
		<td><?php echo $this->Html->link($s['Student']['name'],
		array('controller' => 'Student', 'action' => 'view', $s['Student']['roll_no'])); ?></td>
		<td><?php echo $s['Student']['email']; ?></td>
		<td><?php echo $s['Student']['contactno']; ?></td>
		<td><?php echo $this->Html->link('View', array('action' => 'view', $s['Student']['roll_no']), array("class" => "button")); ?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $s['Student']['roll_no']), array("class" => "button")); ?>
		<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $s['Student']['roll_no']), array('class' => 'button'), array('confirm' => 'Are you sure you want to delete '.$s['Student']['name'].'?'));	?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($students_record); ?>
	</table>
	<br>
	<br>
	<p>Here is a link to a user guide for this website.</p>
	<?php
	$file_path = 'student_app_guide.pdf';

	 echo $this->Html->link('Student Guide', '/files/'.$file_path, array("target" => "blank"));	?>
 
</div>
