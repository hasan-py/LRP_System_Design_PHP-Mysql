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
				<table class="table-responsive table table-hover">
					<thead>
						<tr>
							<th class="w-25">Name</th>
							<th class="w-25">Username</th>
							<th class="w-25">Email Address</th>
							<th class="w-25">Join Date</th>
							<th class="w-25">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Hasan</td>
							<td>hasan29351</td>
							<td>hasan29351@gmail.com</td>
							<td>2019, July 30</td>
							<td>
								<a href="profile.php?p_id=1" class="btn btn-dark">View</a>
							</td>
						</tr>
						<tr>
							<td>Hasan</td>
							<td>hasan29351</td>
							<td>hasan29351@gmail.com</td>
							<td>2019, July 30</td>
							<td>
								<a href="profile.php?p_id=1" class="btn btn-dark">View</a>
							</td>
						</tr>
						<tr>
							<td>Hasan</td>
							<td>hasan29351</td>
							<td>hasan29351@gmail.com</td>
							<td>2019, July 30</td>
							<td>
								<a href="profile.php?p_id=1" class="btn btn-dark">View</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
