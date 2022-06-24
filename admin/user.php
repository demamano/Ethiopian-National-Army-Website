<?php
include('db_connect.php'); 
include('./header.php');
?>

<div class="block">
    <button class="add-user"><a href="add.php">Add User</a></button>
    <table class="content-table">
        <thead>
            <tr>
                <th>Sid</th>
                <th>Name</th>
                <th>Email</th>
                <th>user_type</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>
        </thead>
        <?php
        $sql = "select *from `Admin`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $name = $row["name"];
                $email = $row["email"];
                $rank = $row["user_type"];
                $password = $row["password"];

                echo '
        <tr>
      <td>' . $id . '</td>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $rank . '</td>
      <td>' . $password . '</td>
      
      <td><button class="button">
      <a href="update.php?updateid='.$id.'">Update</a>
      </button>
          <button class="button"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
      </td>
       </tr>';
            }
        }
        ?>
        <!-- <td><button><a href="">Update</a></button>
            <button><a href="">Delete</a></button>
        </td> -->
        <!-- <tbody>
    
  </tbody> -->
    </table>
</div>
<!-- <div class="block1">
    <button class="add-user"><a href=""></a></button>
</div>
<div class="block2">
    <button class="add-user"><a href=""></a></button>
</div> -->

<?php include('./templates/footer.php');
?>