<?php
	include('connection.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql = "DELETE FROM users WHERE id= $id";
		$res = mysqli_query($conn, $sql);
		if($res == true){
			header('location: index.php');
		}
	}
?>