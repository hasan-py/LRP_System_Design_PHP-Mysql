<title>Login Page</title>
<!-- Header -->
<?php include "./inc/header.php" ?>

<!-- Navber -->
<?php include "./inc/nav.php" ?>

<?php 
// if user not login ! it will automaticly redirect to login page
$user->logoutCheck();
?>

<!-- Check If undefined get request -->
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
<?php include "./inc/profileFeed.php" ?>

<!-- Footer -->
<?php include "./inc/footer.php" ?>













