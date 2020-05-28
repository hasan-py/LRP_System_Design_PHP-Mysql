<?php 
if(isset($_GET['action']) && $_GET['action']==='logout'){
  session_destroy();
  session_unset();
  header("location: login.php");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-3">  
    <a class="navbar-brand" href="index.php">User Login & Register</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php 
        if(isset($_SESSION['login'])==true){
        ?>
        <li class="nav-item active">
          <a class="nav-link" href="profile.php?u_id=<?php echo $_SESSION['id'] ?>">Profile <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?action=logout">Logout</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>