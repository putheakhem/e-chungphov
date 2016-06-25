<!DOCTYPE html>
<html>
<head>
	<title>Add Recipe</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
	<h2 style="margin-bottom: -1em" class="text-center">Add Your New Recipe</h2>
	<div class="row" style=" font-size: 20px">
	 <div class="col-md-6 col-md-offset-3">
		<form action="upload.php" method="post" id="formAdd" enctype="multipart/form-data">
			  <div class="form-group">
			     <label>Title</label>
			     <input type="text" class="form-control" name="title" required>
			  </div>
			  <div class="form-group">
			     <label>Type</label>
			     <input type="text" class="form-control" name="type" required>
			  </div>
		   <label>Ingredient</label>
		   	  <div class="form-group">
			    <textarea row="5" class="col-md-12" name="ingredient" form="formAdd" required></textarea>
			  </div>
		   <label>How</label>
			  <div class="form-group">
			    <textarea row="7" class="col-md-12" name="how" form="formAdd" required></textarea>
			  </div>
		   </br>
		   </br>
		   
		   	  <label>Image</label>
			  <div class="form-group">
			     <label class="btn btn-default btn-file">
				   <input type="file" name="fileToUpload" id="" required>
			     </label>
			  </div>
			  <div class="form-group" >
			     <label>Video Url</label>
			     <input type="url" class="form-control" name="video" required>
			  </div>
		<div>
		  <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
		  <button type="reset" name="Reset"class="btn btn-default">Reset</button>
		  <a href="adminPage.php" class="btn btn-default">Back</a>
		</div>
		</form>
		
	 </div>
	</div>
</body>
</html>