<title>Login Page</title>
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<?php 
// if user not login ! it will automaticly redirect to login page
$user->logoutCheck();
?>

<?php 

if(isset($_GET['u_id'])){
	$userID = $_GET['u_id'];
	$query = "SELECT * FROM users WHERE id={$userID}";
	$result = mysqli_query($connection,$query);
	if(!$row=mysqli_fetch_assoc($result)>0){
		header('Location: index.php');
	}
	

}
?>

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
					<?php 
					if(isset($_POST['updateSubmit'])){
						echo $user->updateProfile($_GET['u_id'],$_POST['fullname'],$_POST['username'],$_POST['email']);
					}
					?>
					<?php 
					if(isset($_GET['u_id'])){
						$userID = $_GET['u_id'];
						$query = "SELECT * FROM users WHERE id={$userID}";
						$result = mysqli_query($connection,$query);
						while($row=mysqli_fetch_assoc($result)){
							$id = $row['id'];
							$fullname = $row['fullname'];
							$username = $row['username'];
							$email = $row['email'];
							$join_date = $row['join_date'];
						}
						?>
						<?php 
						if($_SESSION['id']===$_GET['u_id']){
							?>
							<form method="POST" action="">
								<div class="form-group">
									<label for="name">Full Name</label>
									<input name="fullname" value="<?php echo $fullname ?>" type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
								</div>
								<div class="form-group">
									<label for="username">Username</label>
									<input name="username" value="<?php echo $username ?>" type="text" class="form-control" id="username"  placeholder="Enter User Name" required>
									<small class="form-text text-muted">Username Must be unquie</small>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input name="email" value="<?php echo $email ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
								</div>
								<button name="updateSubmit" type="submit" class="btn btn-dark">Update Profile</button>
								<a style="background:#C4CAD2;" href="changepass.php?u_id=<?php echo $id ?>" class="btn btn-light">Change Password</a>
							</form>
						<?php }else{ ?>
							<form>
								<div class="form-group">
									<label for="name">Full Name</label>
									<input readonly value="<?php echo $fullname ?>" type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
								</div>
								<div class="form-group">
									<label for="username">Username</label>
									<input readonly value="<?php echo $username ?>" type="text" class="form-control" id="username"  placeholder="Enter User Name" required>
									<small class="form-text text-muted">Username Must be unquie</small>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input readonly value="<?php echo $email ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
								</div>
								<p class="text-muted">Join in <?php echo $join_date ?></p>
							</form>
						<?php } ?>

					<?php }
					else{ 
						echo "
						<div class='text-center font-weight-light'>
						<h3 class='font-weight-light'>Goto Your Profile</h3>
						<a class='text-center' href='profile.php?u_id={$_SESSION['id']}'>Click here</a>
						</div>
						";
					} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













