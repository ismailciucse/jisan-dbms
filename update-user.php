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
    <a href="index.php">Home Page</a>
    <div class="form">

    <?php
				if(isset($_GET['id'])){
					$id =$_GET['id'];
					$sql = "SELECT * FROM users WHERE id='$id'";
					$res = mysqli_query($conn, $sql);
					if($res == true){
						$count = mysqli_num_rows($res);
						if($count == 1){
							$row = mysqli_fetch_assoc($res);
							$name = $row['name'];
							$email = $row['email'];
							$phone = $row['phone'];
							$address = $row['address'];
						}
					}
				}
				
			?>


      <form action="" method="post">
        <label for="name">Name</label>
        <input type="text"  name="name" value="<?php echo $name; ?>">
        <label for="email">Email</label>
        <input type="email"  name="email" value="<?php echo $email; ?>">
        <label for="phone">Phone</label>
        <input type="phone"  name="phone" value="<?php echo $phone; ?>">
        <label for="address">Address</label>
        <input type="text"  name="address"  value="<?php echo $address; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" name="submit" value="update">
      </form>
    </div>

</body>
</html>

<?php
		if(isset($_REQUEST['submit'])){
			$id = $_REQUEST['id'];
			$name =$_REQUEST['name'];
			$email =$_REQUEST['email'];
			$phone =$_REQUEST['phone'];
			$address =$_REQUEST['address'];
			
			$sql2 = "UPDATE users SET
				name = '$name',
				email = '$email',
				phone = '$phone',
				address = '$address'
				WHERE id='$id'
			";
			$res2 = mysqli_query($conn, $sql2);
			if($res2 == true){
				?>
				<script><?php echo("location.href = 'http://localhost/jdbms/index.php';");?></script>
				<?php
				
			}
		}
	?>