<div class="container my-2">
	<?php 
	if(isset($_SESSION['loginMsg'])){
		echo $_SESSION['loginMsg'];
		$_SESSION['loginMsg'] = "";
	}
	?>
	<div class="card shadow">
		<div class="card-header">
			<span class="float-left"><h2 class="font-weight-light">User List</h2></span>
			<?php 
			if(isset($_SESSION['name'])){
				?>
				<span class="float-right"><h2 class="font-weight-light">Welcome,<strong>
				<?php echo $_SESSION['name']; ?>
				</strong></h2></span>
			<?php } ?>
		</div>
		<div class="card-body">
			<div class="container">
				<table class="table-responsive table table-hover text-center">
					<thead>
						<tr>
							<th>S.No</th>
							<th class="w-25">Name</th>
							<th class="w-25">Username</th>
							<th class="w-25">Email Address</th>
							<th class="w-25">Join Date</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
						$result = $user->getAllUserDate();
						$s_no = 0;
						while($row=mysqli_fetch_assoc($result)){
							$s_no++;
							$id = $row['id'];
							$fullname = $row['fullname'];
							$username = $row['username'];
							$email = $row['email'];
							$join_date = $row['join_date'];
					 ?>
						<tr>
							<td><?php echo $s_no ?></td>
							<td><?php echo $fullname ?></td>
							<td><?php echo $username ?></td>
							<td><?php echo $email ?></td>
							<td><?php echo $join_date ?></td>
							<td>
								<a href="profile.php?u_id=<?php echo $id ?>" class="btn btn-dark">View</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
