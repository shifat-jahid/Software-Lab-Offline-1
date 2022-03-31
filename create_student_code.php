<?php
    $dept = $_POST['dept'] ;
    $name = $_POST['name'] ;
    $nid = $_POST['nid'] ;
    $birth = $_POST['birth'] ;
    $address = $_POST['address'] ;

    //Database
    require_once "includes/dbcon.php";
    $query ="INSERT INTO student(dept,name,nid,birth,address) VALUES ('$dept','$name','$nid','$birth','$address')";
    mysqli_query($conn,$query);
    header("location:index.php")
?>