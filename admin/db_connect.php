<?php
$conn =  new mysqli('localhost','root','','Access_control');
if(!$conn){
    die(mysqli_error($conn));
}
else{
    
    // echo "connection is successful";
}
?>