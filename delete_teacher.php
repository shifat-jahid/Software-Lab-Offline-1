<?php
    $id = $_GET['id'];
    require "includes/dbcon.php";
    $query = "DELETE FROM teacher WHERE id = $id";
    mysqli_query($conn,$query);
?>