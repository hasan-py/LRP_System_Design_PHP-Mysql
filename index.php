<?php include "./inc/header.php" ?>
		<!-- Navber -->
    	<?php include "./inc/nav.php" ?>

<?php 
// Redirect user to index page without login
if(isset($_SESSION['login'])==false){
	header("location: login.php");
	exit();
}
?>

		<!-- Main Content -->
		<?php include "./inc/mainContent.php" ?>

<?php include "./inc/footer.php" ?>













