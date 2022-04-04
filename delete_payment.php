<?php
    $payment_id = $_GET['id'];
    require "includes/dbcon.php";
    $query = "DELETE FROM payment WHERE payment_id = $payment_id";
    mysqli_query($conn,$query);
?>