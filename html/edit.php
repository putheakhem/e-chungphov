<?php
	$id = $_GET['id'];
	require_once('../configuration/conf/conf.php');
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}	
	$sql = "SELECT * FROM recipelist_t WHERE id = $id";
	$result = $con->query($sql);
	if($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Recipe</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
	<h2 style="margin-bottom: -1em" class="text-center">Edit Recipe</h2>
	<div class="row" style=" font-size: 20px">
	 <div class="col-md-6 col-md-offset-3">
		<form action="edit_upload.php" method="post" id="formAdd" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" value="<?= $id?>" name="id">
				</div>
			  <div class="form-group">
			     <label>Title</label>
			     <input type="text" value="<?= $row['name']?>" class="form-control" name="title" >
			  </div>
			  <div class="form-group">
			     <label>Type</label>
			     <input type="text" value="<?= $row['type']?>" class="form-control" name="type">
			  </div>
		   <label>Ingredient</label>
		   	  <div class="form-group">
			    <textarea style="height: 100px" row="5" class="col-md-12" name="ingredient" form="formAdd"> <?= $row['ingredient']?> </textarea>
			  </div>
		   <label>How</label>
			  <div class="form-group">
			    <textarea style="height: 300px" value="<?= $row['how']?>" class="col-md-12" name="how" form="formAdd"> <?= $row['how']?> </textarea>
			  </div>
		   </br>
		   </br>
		   
		   	  <label>Image</label>
			  <div class="form-group">
			     <label class="btn btn-default btn-file">
				   <input type="file" name="fileToUpload" id="">
			     </label>
			  </div>
			  <div class="form-group" >
			     <label>Video Url</label>
			     <input type="url" value="<?= $row['video']?>" class="form-control" name="video">
			  </div>
		<div>
		  <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
		  <button type="reset" name="Reset"class="btn btn-default">Reset</button>
		  <a href="adminPage.php" class="btn btn-default">Back</a>
		</div>
		</form>
		<?php } //end of if statement?>
	 </div>
	</div>
</body>
</html>