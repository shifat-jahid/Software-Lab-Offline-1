<?php
    $id = $_GET['id'];
    require "includes/dbcon.php";
    $query = "DELETE FROM student WHERE student_id = $id";
    mysqli_query($conn,$query);
?>