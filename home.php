<?php include('includes/header.php'); ?>
<style>

</style>
<?php 
	session_start();
	include('includes/connection.php');
	$username = $_SESSION['username'];
	$query = "SELECT * FROM students WHERE username = '$username'"; /*commas in table name is not needed*/
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	
	$result = mysqli_fetch_assoc($data);
	if ($username == true) {
		
	}else{
		header('location:index.php');
	}
	if (isset($_SESSION['username'])) {
		/*$conn = new mysqli("localhost","root","","bootstrap11");*/
	?>		
	
<section id="section-1"> <!-- section-1 -->
	<div id="header">
		<img src="images/iobm.png" alt="">
		<?php echo "<h6 style='float:right;display:inline;' class='text-capitalize'>welcome ".$_SESSION['username']."|<a href='logout.php' style='color:black;'>Logout</a></h6>"?>	
	</div>
</section>
<section id="section-2">
	<div class="container-fluid h-100" style="height: 100px;">
		<div class="row text-center r h-100">
			<div class="col-sm-2 h-100" id="sidebar"> <!-- section-2 sidebar-nav -->
				<img src="<?php echo $result['profile']; ?>" id="profile-image">
				<?php
					echo "<h4 class='text-capitalize' style='padding:10px 0'>".$_SESSION['username']."</h4>";

					} 
				?>
				
				<ul class="text-left" style="padding-left: 0px;">
					<li><a href="" class="text-uppercase active1">dashboard</a></li>
					<li><a href="" class="text-uppercase">general</a></li>
					<li><a href="" class="text-uppercase">registration</a></li>
					<li><a href="" class="text-uppercase">course</a></li>
					<li><a href="" class="text-uppercase">exam</a></li>
					<li><a href="" class="text-uppercase">fees</a></li>
					<li><a href="" class="text-uppercase">libarary management</a></li>
				</ul>
			</div>
			<div class="col-sm-10" id="subject-card"> <!-- section-2 main -->
				<h4>
					<div class="hr1">
						<span class="hr11">
						   DASHBOARD
						</span>
					</div>
				</h4>
				<div class="card-deck" style="margin-top:30px;">
					<div class="card border-primary text-white text-uppercase">
						<div class="card-header">
							<h6><a href="course1.php" id="btn-2">acadmic english</a></h6>
						</div>
						<div class="card-body">
							<a href="">aliya sikander
							<p>room-315</p>
							<p>timing 9:00-10:30</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
					<div class="card border-1 text-white text-uppercase">
						<div class="card-header">
							<!-- <h6 class="cut-text"> --><h6><a href="course2.php" id="btn-3">pf</a></h6>
						</div>
						<div class="card-body">
							<a href="">asghar khan
							<p>lab-1</p>
							<p>timing 10:45-12-15</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
					<div class="card border-2 text-white text-uppercase">
						<div class="card-header">
							<h6><a href="#section-5" id="btn-4">calculus</a></h6>
						</div>
						<div class="card-body">
							<a href="">fatima riaz
							<p>lab-13</p>
							<p>timing 2:15-3:45</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
					<div class="card border-3 text-white text-uppercase">
						<div class="card-header">
							<h6><a href="#section-6" id="btn-5">basic electronics</a></h6>
						</div>
						<div class="card-body">
							<a href="">noman ahmed
							<p>creek college</p>
							<p>timing 9:00-12:00</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
					<div class="card border-4 text-white text-uppercase">
						<div class="card-header">
							<h6><a href="">islamiyat</a></h6>
						</div>
						<div class="card-body">
							<a href="">junaid khan
							<p>be bulding</p>
							<p>timing 2:15-3:45</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
					<div class="card border-5 text-white text-uppercase">
						<div class="card-header">
							<h6><a href="">ict</a></h6>
						</div>
						<div class="card-body">
							<a href="">najmus sehar
							<p>lab-1</p>
							<p>timing 12:30-2:00</p></a>
						</div>
						<div class="card-footer">	
						</div>
					</div>
				</div>
				<div class="col-sm-8 text-left" style="padding-top:20px;padding-left:0;padding-right:0;">
					<div class="card-deck">
						<div class="card text-uppercase" style="padding-left:0px;">
							<div class="card-header" style="background-color:#f8f8f8;">
								<h6><a href=""  class="common-color">tasks</a></h6>
							</div>
							<div class="card-body common-color">
								<a href="#" class="btn btn-sm btn-12">manage tasks</a>
							</div>
						</div>
						<div class="card text-uppercase" style="padding-left:0px;">
							<div class="card-header" style="background-color:#f8f8f8;">
								<h6><a href="" class="common-color">ANNOUNCEMENTS</a></h6>
							</div>
							<div class="card-body common-color">
								<a href="#" class="btn btn-sm btn-12">view all</a>
							</div>
						</div>
					</div>
				</div>

				<!-- display list on same page -->
				<section>
					<div class="col-sm-8 onpage-list">
						<?php 
							$query = "SELECT * FROM `students` WHERE course3='calculus' ORDER BY id";
							$data = mysqli_query($conn,$query);
							$total = mysqli_num_rows($data);

						 ?>
						<table id="section-5" class="table table-hover table-bordered text-capitalize">
							<thead class="thead">
								<tr><th colspan="4">Calculus</th></tr>
								<tr>
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
												<td>".$result['course3']."</td>
												<td><a href='drop.php?id=$result[id]' onclick='return checkdelete();'>drop</a></td>
											<tr>";
									}
								}
							 ?>
						</table>
					</div>		
				</section>
				<section>
					<div class="col-sm-8 onpage-list">
						<?php 
							$query = "SELECT * FROM `students` WHERE course4='basic electronics' ORDER BY id";
							$data = mysqli_query($conn,$query);
							$total = mysqli_num_rows($data);

						 ?>
						<table id="section-6" class="table table-hover table-bordered text-capitalize">
							<thead class="thead">
								<tr><th colspan="4">Basic Electronics</th></tr>
								<tr>
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
												<td>".$result['course4']."</td>
												<td><a href='drop.php?id=$result[id]' onclick='return checkdelete();'>drop</a></td>
											<tr>";
									}
								}
							 ?>
						</table>
					</div>		
				</section>
			</div>
		</div>
	</div>
</section>






<?php include('includes/footer.php'); ?>