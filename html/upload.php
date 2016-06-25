<?php
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../img/{$_FILES["fileToUpload"]["name"]}")){
		$image = "{$_FILES["fileToUpload"]["name"]}";
		if(file_exists($_FILES["fileToUpload"]["tmp_name"]) && is_file($_FILES["fileToUpload"]["tmp_name"]) ){
		unlink($_FILES["fileToUpload"]["tmp_name"]);//delete if exist
		}
	}
	$name = $_POST['title'];
	$type = $_POST['type'];
	$ingredient = $_POST['ingredient'];
	$how = $_POST['how'];
	$video = $_POST['video'];
	$date = date("Y-m-d H:i:s");
	// echo "$name $type $ingredient $how $video $date";

	require_once('../configuration/conf/conf.php');
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//insert new record
	$sql = "INSERT INTO recipelist_t VALUES (NULL,'$name','$type','$ingredient','$how','$image','$video','$date')";

	if ($con->query($sql) === TRUE) {
    	echo "New record created successfully";
    	header("Location: adminPage.php");
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $con->error;
	}
?>