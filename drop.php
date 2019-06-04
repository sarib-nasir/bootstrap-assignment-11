<?php include('includes/header.php'); ?>
<?php include('includes/connection.php'); ?>
<?php 
	$id = $_GET['id'];
	$query = "DELETE FROM students WHERE id='".$id."'";
	$data = mysqli_query($conn,$query);
	if ($data) {
		
	}else{
		echo "failed to delete";
	}

 ?>


<?php include('includes/footer.php'); ?>