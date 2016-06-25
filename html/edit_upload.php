<?php

	$id = $_POST['id'];
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

	$sql1 = "SELECT image FROM recipelist_t WHERE id = $id";
	$result = $con->query($sql1);

	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../img/{$_FILES["fileToUpload"]["name"]}")){
		$image = "{$_FILES["fileToUpload"]["name"]}";
		if(file_exists($_FILES["fileToUpload"]["tmp_name"]) && is_file($_FILES["fileToUpload"]["tmp_name"]) ){
			unlink($_FILES["fileToUpload"]["tmp_name"]);//delete if exist
		}
		//delete old image
		if($row = $result->fetch_assoc()){
			//delete image on disk
			$filename = "../img/".$row['image'];
			if (file_exists($filename)) {
		    	unlink($filename);
		    	echo 'File '.$filename.' has been deleted';
		    }
		}
	}
	else{
		if($row = $result->fetch_assoc()){
			$image = $row['image'];
		}
	}

	
	//update data to record
	$sql = "UPDATE recipelist_t SET name='$name', type='$type', ingredient='$ingredient', how='$how',image='$image',video='$video',date='$date' WHERE id = $id";

	if ($con->query($sql) === TRUE) {
    	echo "Record Updated Successfully";
    	header("Location: adminPage.php");
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $con->error;
	}
?>