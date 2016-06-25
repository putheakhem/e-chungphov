<?php
	session_start();
	if(!isset($_SESSION['adminitrator'])){
		header("Location: loginadmin.php");
	}
?>
<!DOCTYPE html>
<htm>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		

		<style type="text/css">
			.logout{
				font-size: 20px;
				font-weight: bold;
				margin-left: 1000px;
				margin-top: -1.5em;
			}
			.bg_contain_right1{
				background-color: #eee;
			}
			#bedit{
				margin-left: 2%;
			}
			li {
				margin-bottom: -1em;
				font-size: 20px;
				font-weight: bold;
			}
			td {
				font-size: 18px;
				font-weight: bold;
			}
			
		</style>

	</head>
	<body>
		<?php
			require_once('../configuration/conf/conf.php');
            if (!$con) {
                 die("Connection failed: " . mysqli_connect_error());
            } 	
		?>
		<div class="container bg-success">
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container-fluid"> 
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="home.php" >Home</a></li>
							<li class="logout"><a href="logout.php">Logout</a></li>
						</ul>
			      	</div>
			    </div>
			</nav>

			<div class="form-group">
					<label style="font-size: 17px">Add New Recipe&nbsp;&nbsp;</label><a href="update.php" class="btn btn-success" role="button" >ADD RECIPE</a>
					
			</div>
				<table class="table table-striped table-bordered" id="oTable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Ingredient</th>
							<th>How</th>
							<th>Image</th>
							<th>Video</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						require_once('../configuration/conf/conf.php');
						if (!$con) {
						    die("Connection failed: " . mysqli_connect_error());
						}	
						$sql = "SELECT * FROM recipelist_t order by type asc";
						$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
					?>
	<tr>
		<td><?= $row['id'] ?></td>
		<td><?= $row['name'] ?></td>
		<td><?= $row['type'] ?></td>
		<td><?= substr($row['ingredient'],0,60) ?></td>
		<td><?= substr($row['how'], 0,60) ?></td>
		<td><?= substr($row['image'], 0,16) ?></td>
		<td><?= substr($row['video'], 24,17) ?></td>
		<td><?= $row['date'] ?></td>
		<td align="center" colspan="2">
			<a class="btn btn-info" href="edit.php?id=<?= $row['id'] ?>" id="bedit">Edit R</a>
			</br></br>
			<a id="bedit" class="btn btn-warning" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete <?= $row['name']?>?')">Delete</a>
		</td>	
	</tr>
					<?php
}
						$con->close();
					?>
					</tbody>
				</table>
			</div>
	</body>

</html>
