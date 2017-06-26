

<h1>Student Managment</h1>
<div style="margin-left: 300px;">
	<a class="button" style="text-align: left;">New Student</a>
	<table style="width: 50%;">
	<tr>
		<th>Student Name</th>
		<th>Email</th>
		<th>Contact No</th>
	</tr>
	<?php 

		foreach($students_record as $s){
			echo '<tr>
					<td>'.$s['Student']['name'].'</td>
					<td>'.$s['Student']['email'].'</td>
					<td>'.$s['Student']['contactno'].'</td>

				</tr>';
		}

	?>
	</table>
	
</div>
