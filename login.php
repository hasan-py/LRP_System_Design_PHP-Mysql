<title>Login Page</title>
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<!-- Main Content -->
<div class="container my-5">
	<div class="card">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">Login Page</h2></span>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="col-sm-12 col-lg-6 offset-lg-3 my-5">	
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">I agree all terms & conditions</label>
						</div>
						<button type="submit" class="btn btn-dark">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













