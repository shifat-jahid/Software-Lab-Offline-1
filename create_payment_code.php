<?php
    $student_id = $_POST['student_id'] ;
    $amount = $_POST['amount'] ;
    $payment_date = $_POST['payment_date'] ;

    //Database
    require_once "includes/dbcon.php";
    $query ="INSERT INTO payment(student_id,amount,payment_date) VALUES ('$student_id','$amount','$payment_date')";
    mysqli_query($conn,$query);
    header("location:read_payment.php")
?>