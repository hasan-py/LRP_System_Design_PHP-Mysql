<title>Login Page</title>
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<!-- Main Content -->
<div class="container my-2">
	<div class="card">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">User Profile</h2></span>
			<span class="float-right"><a class="btn btn-dark" href="index.php">Back</a></span>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="col-sm-12 col-lg-6 offset-lg-3 my-5">	
					<form>
						<div class="form-group">
							<label for="name">Full Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username"  placeholder="Enter User Name" required>
							<small class="form-text text-muted">Username Must be unquie</small>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						</div>
						<button type="submit" class="btn btn-dark">Update Profile</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













