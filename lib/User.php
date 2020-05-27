<?php 
include_once './lib/Session.php';

class User {

	function register($data){
		$connection = mysqli_connect("localhost","root","","lrp_system");
		$name = $data['name'];
		$username = $data['username'];
		$email = $data['email'];
		$password = $data['password'];
		
		if(strlen($password)>8){
			$password = md5($password);
		}

		if($name == "" OR $username == "" OR $email == "" OR $password == ""){
			$msg = "<div class='alert alert-warning'>
			Field Must Not Be Empty.
			</div>";
			return $msg;
		}
		if(strlen($password)<8){
			$msg = "<div class='alert alert-warning'>
			Password Must be 8 charecter.
			</div>";
			return $msg;
		}
		if($username){
			$sql = "SELECT username FROM users WHERE username ='{$username}'";
			$result = mysqli_query($connection,$sql);
			if($row=mysqli_num_rows($result)>0){
				$msg = "<div class='alert alert-warning'>
				Username Already Exits.
				</div>";
				return $msg;
			}
		}
		if($email){
			$sql = "SELECT email FROM users WHERE email ='{$email}'";
			$result = mysqli_query($connection,$sql);
			if($row=mysqli_num_rows($result)>0){
				$msg = "<div class='alert alert-warning'>
				Email Already Exits.
				</div>";
				return $msg;
			}
		}
		$query = "INSERT INTO users VALUES('','{$username}','{$name}','{$email}','{$password}')";
		$result = mysqli_query($connection,$query);
		if($result==true){
			$msg = "<div class='alert alert-success'>
			Account Create SuccessFully
			</div>";
			return $msg;
		}
		else{
			die(mysqli_error());
		}
	}

	function login($email,$password){
		$connection = mysqli_connect("localhost","root","","lrp_system");
		$password = md5($password);
		$login_query = "SELECT * FROM users WHERE email ='{$email}' and password='{$password}'";
		$result = mysqli_query($connection,$login_query);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){	
				$id = $row['id'];
				$username = $row['username'];
				$name = $row['fullname'];
				session_start();
				$_SESSION["loginMsg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				<strong>Successfully login</strong>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
				$_SESSION["login"] = true;
				$_SESSION["id"] = $id;
				$_SESSION["username"] = $username;
				$_SESSION["name"] = $name;
				if(isset($_SESSION['id'])){
					header("Location: index.php");
				}
			}
		}
		else{
			$msg = "<div class='alert alert-warning'>
			Email or Password Incorrect.
			</div>";
			return $msg;
		}
	}


}

$user = new User();

?>