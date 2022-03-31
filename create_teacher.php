<!-- createTeacher( id, dept, name, nid, birth, address ) -->
<?php
    require "includes/header.php";
    require "includes/menu.php";
?>
    <h1>Create Teacher</h1>
    <form action="create_teacher_code.php" method="post">
        <label>Department</label>  <br>
        <input name="dept" type="text" placeholder="Enter Department"> <br>
        <label>Name</label>  <br>
        <input name="name" type="text" placeholder="Enter Name"> <br>
        <label>NID</label>  <br>
        <input name="nid" type="text" placeholder="Enter NID"> <br>
        <label>Birth</label>  <br>
        <input name="birth" type="date" placeholder="Enter Birth"> <br>
        <label>Address</label> <br>
        <input name="address" type="text" placeholder="Enter Address">  <br> <br>
        <button type="submit">Create Teacher</button>
    </form>
    <br>
    <a href="read_teacher.php">Read Teacher</a>
<?php
    require "includes/footer.php";
?>

