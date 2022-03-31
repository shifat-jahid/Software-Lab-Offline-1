<h1>Update Student</h1>
<?php
require_once "includes/dbcon.php";
$id = $_GET['id'];
$query = "SELECT * FROM student WHERE student_id = $id";
$result = mysqli_query($conn, $query);
?>
<form action="update_student_code.php" method="post">
    <?php
    foreach ($result as $student) {
    ?>
        <label>Student Id</label> <br>
        <input name="id" readonly value=<?=$student['student_id']?>> <br>
        <label>Department</label> <br>
        <input name="dept" value=<?=$student['dept']?> type="text" placeholder="Enter Department" name="dept"> <br>
        <label>Name</label> <br>
        <input name="name" value=<?=$student['name']?> type="text" placeholder="Enter Name" name="name"> <br>
        <label>NID</label> <br>
        <input name="nid" value=<?=$student['nid']?> type="text" placeholder="Enter NID" name="nid"> <br>
        <label>Birth</label> <br>
        <input name="birth"  value=<?=$student['birth']?> type="date" name="birth"> <br>
        <label>Address</label> <br>
        <input name="address" value=<?=$student['address']?> type="text" placeholder="Enter Address" name="address"> <br> <br>
        <button type="submit">Update</button>
</form>
<?php
    }
?>