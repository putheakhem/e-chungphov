<!DOCTYPE html>
<html>
<head>
	<title>Administrator login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery1.11.3.min.js"></script>
</head>
<body background="../img/bg.jpg">
	<div class="container bg-success col-md-4 col-md-offset-4" style="font-size: 20px">
		<form action="loginAdmin.php" method="POST">
			<div class="form-group">
				<h4 align="center" class="text-muted" style="font-size: 30px">Enter Administrator Password</h2>
				<label for="password">Password</label>
				<input required="required" type="password" class="form-control" name="password" >
			</div>
			
			<div class="form-group" align="center">
				<button type="submit" class="btn btn-primary">Login</button>
				<a href="home.php" class="btn btn-warning">Cancel</a>
			</div>
		</form>
		
	</div>
	
	<script type="text/javascript" src="public/vendor/bootstrap/bootstrap.min.js"></script>
</body>
</html>