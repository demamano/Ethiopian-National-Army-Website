<?php
include('db_connect.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `Admin` where id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfully";
        header("location:user.php");

    }
    else{
        die(mysqli_error($conn));
    }
}
?>