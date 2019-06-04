<?php include('includes/header.php'); ?>
<?php include('includes/connection.php'); ?>
<?php 
	$query = "SELECT * FROM `students` WHERE course1='Acadmic English' ORDER BY id";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);

 ?>
<div class="container">
	
	<table class="table table-hover table-bordered text-capitalize ">
		<thead class="thead">
			<tr>
				<tr><th colspan="4" class="text-center">ACADMIC ENGLISH</th></tr>
				<th scope="col">ID#</th>
				<th scope="col">name</th>
				<th scope="col">course</th>
				<th scope="col">action</th>
			</tr>
		</thead>
		<?php 
			if ($total !="") {
				while ($result = mysqli_fetch_assoc($data)) {
					echo"<tr class=''>
							<td>".$result['id']."</td>
							<td>".$result['username']."</td>
							<td>".$result['course1']."</td>
							<td><a href='drop.php?course1=$result[course1]' onclick='return checkdelete();'>drop</a></td>
						<tr>";
				}
			}
		 ?>
	</table>
</div>




<?php include('includes/footer.php'); ?>