<title>Login Page</title>
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>


<?php 
// If user login ! it automaticly redirect to index
$user->loginCheck();
?>
<!-- Main Content -->
<div class="container my-2">
	<div class="card">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">Login Page</h2></span>
			<span class="float-right"><a class="btn btn-dark" href="register.php">< Register Page</a></span>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="col-sm-12 col-lg-6 offset-lg-3 my-5">
					<?php 
					if(isset($_POST['loginSubmit'])){
						echo $user->login($_POST['email'],$_POST['password']);
					}

					?>	
					<form action="" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">I agree all terms & conditions</label>
						</div>
						<button name="loginSubmit" type="submit" class="btn btn-dark">Submit</button>
					</form>
					havn't account ? <a href="register.php">create one</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













