<title>Login Page</title>
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<?php 
// if user not login ! it will automaticly redirect to login page
$user->logoutCheck();
?>

<!-- Main Content -->
<div class="container my-2">
	<div class="card">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">User Profile</h2></span>
			<span class="float-right"><a class="btn btn-dark" href="profile.php?u_id=<?php echo $_GET['u_id'] ?>">Back</a></span>
		</div>
		<div class="card-body">
			<div class="container">
				<div class="col-sm-12 col-lg-6 offset-lg-3 my-5">
					<?php 
					if(isset($_POST['updatePassword'])){
						echo $user->updatePassword($_GET['u_id'],$_POST['oldpassword'],$_POST['newpassword']);
					}
					?>
					<?php 
					if(isset($_GET['u_id'])){
						$userID = $_GET['u_id'];
						$query = "SELECT * FROM users WHERE id={$userID}";
						$result = mysqli_query($connection,$query);
						while($row=mysqli_fetch_assoc($result)){
							$id = $row['id'];
						}
						?>
						<?php 
						if($_SESSION['id']===$_GET['u_id']){
							?>
							<form method="POST" action="">
								<div class="form-group">
									<label for="name">Old password</label>
									<input name="oldpassword" type="password" class="form-control" id="name" placeholder="Enter old password" required>
								</div>
								<div class="form-group">
									<label for="username">New password</label>
									<input name="newpassword" type="password" class="form-control" id="username"  placeholder="Enter new password" required>
								</div>

								<button name="updatePassword" type="submit" class="btn btn-dark">Update Password</button>
							</form>
						<?php }
						else{
							header('Location: index.php?');
						} ?>

					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/footer.php" ?>













