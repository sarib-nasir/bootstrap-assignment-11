<?php include('includes/header.php'); ?>
<?php
	 /*$conn = new mysqli("localhost","root","","bootstrap11");
	 if ($conn) {
	 	echo "connection ok";
	 }else{
	 	echo "connection failed";
	 }*/   //checking connection


	session_start();
	if (isset($_POST['submit'])) {
		include('includes/connection.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (!$username || !$password) {
			echo "all fields are required";
			exit();
		}else{
			$query= "SELECT * FROM `students` WHERE username = '$username' && password = '$password'";
			$result = mysqli_query($conn,$query);
			$info = mysqli_num_rows($result);
			if ($info == true) {
				header('location:home.php?login=success');
				$_SESSION['username']= $username;
			}else{
				header('location:index.php?login=failed');
				exit();
			}
		}
	}



 ?>






	<div id="bg-img">
		<header>
			<div>
				<h3 class="text-uppercase text-center">content management system</h3>
			</div>
		</header>
		<div class="" id="main-login">
			<div class="">
					<h4 class="text-uppercase" id="header-main"><img src="images/iobm.png"><br><div class="text-center" style="padding-top:20px;"> Welcome to<br> Student Portal<hr></div><!-- <br><span align="center"> <img src="FF.png"  height="70" width="70"></span> --></h4>			
			</div>
			<div >
				<form  action="" method="post" >
					<form class="form-inline" >
						<div class="row">
							<div class="col style" >
								<label class="text-capitalize text-white" style="padding-top:30px; margin-bottom: 0px;">username:</label>
								<input type="text" name="username" class="form-control form-control-sm" placeholder="" id="email" aria-describedby="email">		
							</div>
						</div>
						<div class="row" style="padding-top:5px;">
							<div class="col style">
								<label class="text-capitalize text-white" style="margin-bottom: 0px;">Password:</label>
								<input type="Password" name="password" class="form-control form-control-sm" placeholder="" id="password" aria-describedby="password">
								<!-- <button type="submit" name="submit"  class="btn btn-outline-primary btn-sm" role="button"  id="submit">Sign in</button> -->
								<input type="submit" name="submit" value="sign in" id="btn-1" id="border-right" class="btn btn-sm btn-danger">
								<br>
								<div style="padding-bottom:20px;"><a href="">forget password</a></div>
							</div>
						</div>
					</form>
				</form>
			</div>
		</div>
	</div>








<?php include('includes/footer.php'); ?>


	