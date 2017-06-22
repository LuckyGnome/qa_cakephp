<html>
<head>

<title>Sample input form</title>
</head>
<body>
    <form method="post" action="<?php $_PHP_SELF ?>">
    <table width="600" border="1" cellspacing="1" cellpadding="2" 
            style="border-collapse:collapse;">
    <tr><td width="250" colspan="2" align="center" > <b> Student Details</b></td></tr>
    <tr>
    <td width="250">Name</td>
    <td><input name="name" type="text" id="name"></td>
    </tr>
    <tr>
    <td width="250">Email</td>
    <td><input name="email" type="text" id="email"></td>
    </tr>   
    <tr>
    <td width="250">Contact No.</td>
    <td><input name="contactno" type="text" id="contactno"></td>
    </tr>
    <tr>
    <td width="250" colspan="2" align="center"> 
        <input name="add" type="submit" id="add" value="Add Student">
    </td>
    </tr>
    </table>
    </form>
    <?php
            echo "<b>Student Record Posted: </b><br>";
            echo "Student Name: $student_name <br>";
            echo "Student Email: $student_email <br>";
            echo "Student Contact: $student_contact <br>";
    ?>  
</body>
</html>
