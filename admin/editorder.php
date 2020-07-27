<?php
    include 'include/dbconnect.php';
    $id=$_GET['order_id'];
    $query2="UPDATE orders SET status='1' WHERE id='$id'";
    if(mysqli_query($conn, $query2)){
        header("Location: orders.php");
    exit();
    }
?>