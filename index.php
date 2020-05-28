<?php include "./inc/header.php" ?>
		<!-- Navber -->
    	<?php include "./inc/nav.php" ?>

<?php 
// if user not login ! it will automaticly redirect to login page
$user->logoutCheck();
?>

		<!-- Main Content -->
		<?php include "./inc/mainContent.php" ?>

<?php include "./inc/footer.php" ?>













