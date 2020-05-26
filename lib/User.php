<?php 
include './lib/Session.php';

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
		$query = "INSERT INTO users VALUES('','{$username}','{$email}','{$password}')";
		$result = mysqli_query($connection,$query);
		if($result){
			$msg = "<div class='alert alert-success'>
			Account Create SuccessFully
			</div>";
			return $msg;
		}
	}


}

$user = new User();

?>