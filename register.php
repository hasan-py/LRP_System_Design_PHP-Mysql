<title>Register Page</title>
<?php include "./inc/header.php" ?>
<?php include "./lib/User.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<!-- Main Content -->
<div class="container my-2">
	<div class="card">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">Register Page</h2></span>
			<span class="float-right"><a class="btn btn-dark" href="login.php">< Login Page</a></span>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="col-sm-12 col-lg-6 offset-lg-3 my-5">
				
				<!-- Register method call from User -->
				<?php 
				if(isset($_POST['submitRegister'])){
					echo $user->register($_POST);
				}	
				?>	
					<form method="POST" action="">
						<div class="form-group">
							<label for="name">Full Name</label>
							<input required name="name" type="text" class="form-control" id="name" placeholder="Enter Full Name">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input required name="username" type="text" class="form-control" id="username"  placeholder="Enter User Name">
							<small class="form-text text-muted">Username Must be unquie</small>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-check">
							<input required type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">I agree all terms & conditions</label>
						</div>
						<button name="submitRegister" type="submit" class="btn btn-dark">Submit</button>
					</form>
					an account ? <a href="login.php">login here</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













