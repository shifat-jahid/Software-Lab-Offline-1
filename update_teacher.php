<h1>Update Teacher</h1>
<?php
require_once "includes/dbcon.php";
$id = $_GET['id'];
$query = "SELECT * FROM teacher WHERE id = $id";
$result = mysqli_query($conn, $query);
?>
<form action="update_teacher_code.php" method="post">
    <?php
    foreach ($result as $teacher) {
    ?>
        <label>Teacher Id</label> <br>
        <input name="id" readonly value=<?=$teacher['id']?>> <br>
        <label>Department</label> <br>
        <input name="dept" value=<?=$teacher['dept']?> type="text" placeholder="Enter Department" name="dept"> <br>
        <label>Name</label> <br>
        <input name="name" value=<?=$teacher['name']?> type="text" placeholder="Enter Name" name="name"> <br>
        <label>NID</label> <br>
        <input name="nid" value=<?=$teacher['nid']?> type="text" placeholder="Enter NID" name="nid"> <br>
        <label>Birth</label> <br>
        <input name="birth"  value=<?=$teacher['birth']?> type="date" name="birth"> <br>
        <label>Address</label> <br>
        <input name="address" value=<?=$teacher['address']?> type="text" placeholder="Enter Address" name="address"> <br> <br>
        <button type="submit">Update</button>
</form>
<?php
    }
?>