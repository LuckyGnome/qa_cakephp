<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body>
	<a class="pull-right">CREATE STUDENT</a>
	<table class="table table-bordered">
		<tr>
			<th>Student Name</th>
			<th>Email</th>
			<th>Student Contact</th>
		</tr>
		<!-- A loop through the database to display all users in the created array -->
		<?php foreach($student_records as $student): ?>
		<tr>
			<td><?= $student['name']; ?></td>
			<td><?= $student['email']; ?></td>
			<td><?= $student['contactno']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>