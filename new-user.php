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
      <form action="" method="post">
        <label for="name">Name</label>
        <input type="text"  name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="email"  name="email" placeholder="Your email..">
        <label for="phone">Phone</label>
        <input type="phone"  name="phone" placeholder="Your phone..">
        <label for="address">Address</label>
        <input type="text"  name="address" placeholder="Your address..">
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>

</body>
</html>

<?php
		if(isset($_REQUEST['submit'])){
			$name =$_REQUEST['name'];
			$email =$_REQUEST['email'];
			$phone =$_REQUEST['phone'];
			$address =$_REQUEST['address'];
			
			$sql = "INSERT INTO users SET
				name = '$name',
				email = '$email',
				phone = '$phone',
				address = '$address'
			";
			$res = mysqli_query($conn, $sql);
			if($res == true){
				?>
					<script><?php echo("location.href = 'http://localhost/jdbms/index.php';");?></script>
				<?php
			}
		}
	?>