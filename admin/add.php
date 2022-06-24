<?php
include('db_connect.php');
$email = $title = $rank =$password = '';
$errors  = array('email' => '', "name" => '', 'rank' => '','password'=>'');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $rank =$_POST['rank'];
    $password =$_POST['password'];
 if (empty($_POST['email'])) {
          $errors['email'] = "email is required <br/>";
        } else {
      
          $email = ($_POST['email']);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "emial must be valid emial address <br/>";
          } else {
            // echo htmlspecialchars($_POST['email']);
          }
        }
    // creating query
    $sql = "insert into `Admin` (name ,email,user_type,password) values('$name','$email','$rank','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "data inserted succesfully";
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
            <input type="submit" name="submit" value="submit" class="btn submit z-depth-0">
        </div>
    </form>
</section>

<?php include('./templates/footer.php');
?>