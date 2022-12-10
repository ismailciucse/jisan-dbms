<?php 
	include('connection.php'); 	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Management</title>
</head>
<body>
    <header>
        <h1>User Management</h1>
    </header>
    <a href="new-user.php">New user</a>
    <div class="all-user">
        <table class="users">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
            </tr>

            <?php 
              $sql = "SELECT * FROM users ";
              $res = mysqli_query($conn, $sql);
              if($res == true){
                $count = mysqli_num_rows($res);
                $sn = 1;
                if($count>0){
                  while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows['id'];
                    $name = $rows['name'];
                    $email = $rows['email'];
                    $phone = $rows['phone'];
                    $address = $rows['address'];
                    ?>
                    <tr>
                      <td><?php echo $sn++; ?></td>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $phone; ?></td>
                      <td><?php echo $address; ?></td>
                     
                      <td class="text-center">
                        <a href="http://localhost/jdbms/update-user.php?id=<?php echo $id ?>">Update</a>
                        <a href="http://localhost/jdbms/delete-user.php?id=<?php echo $id ?>">Delete</a>
                      </td>
                    </tr>
                    <?php
                  }
                }
              }
            ?>
          </table>
    </div>

</body>
</html>