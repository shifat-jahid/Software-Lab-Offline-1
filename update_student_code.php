<?php
    $id = $_POST['id'];
    $dept = $_POST['dept'] ;
    $name = $_POST['name'] ;
    $nid = $_POST['nid'] ;
    $birth = $_POST['birth'] ;
    $address = $_POST['address'] ;

    //Database
    require_once "includes/dbcon.php";
    $query = "UPDATE student SET dept='$dept', name='$name', nid='$nid', birth='$birth', address='$address' WHERE student_id= $id";
    mysqli_query($conn,$query);
?>
