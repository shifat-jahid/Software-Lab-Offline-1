<?php
require "includes/header.php";
require "includes/menu.php";
?>
<!-- createStudent( id, dept, name, nid, birth, address ) -->
<h1>Create Student</h1>
<form action="create_student_code.php" method="post">
    <label>Department</label> <br>
    <input type="text" placeholder="Enter Department" name="dept"> <br>
    <label>Name</label> <br>
    <input type="text" placeholder="Enter Name" name="name"> <br>
    <label>NID</label> <br>
    <input type="text" placeholder="Enter NID" name="nid"> <br>
    <label>Birth</label> <br>
    <input type="date" name="birth"> <br>
    <label>Address</label> <br>
    <input type="text" placeholder="Enter Address" name="address"> <br> <br>
    <button type="submit">Create Student</button>
</form>
<br>
<a href="read_student.php">Read Student</a>

<?php
require "includes/footer.php";
?>