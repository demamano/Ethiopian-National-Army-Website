<?php
include('db_connect.php');
$id = $_GET['updateid'];
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $rank =$_POST['rank'];
    $password =$_POST['password'];

    // creating query
    $sql = "update `Admin` set id = $id, name= '$name',email= '$email', user_type= '$rank',password = '$password' where id =$id";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "data updated succesfully";
        header('location:user.php');
    }
    else{
        echo "bull shit";
        die(mysqli_error($conn));
    }


}
?>


<?php include('./header.php'); ?>

<section class="container grey-text">
    <h4 class="center"> Member of Ethiopian National Army</h4>
    <form action="" class="white" method="POST">
        
        <label for="">Your Username</label>
        <input type="text" name="name" value=""> <br>
        <div class="red-text"></div>
        <label for="">your Email</label>
        <input type="email" name="email" value=""><br>
        <div class="red-text"></div>
        <label for="">Account Type</label>
        <input type="text" name="rank" value="">
        <div class="red-text"></div>
        <label for="">Password</label>
        <input type="password" name="password" value="">

        <div class="center">
            <input type="submit" name="update" value="update" class="btn submit z-depth-0">
        </div>
    </form>
</section>

<?php include('./templates/footer.php');
?>