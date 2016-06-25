<?php
	$id = $_GET['id'];
	require_once('../configuration/conf/conf.php');
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql1 = "SELECT image FROM recipelist_t WHERE id = $id";
	$result = $con->query($sql1);
	if($row = $result->fetch_assoc()){
		//delete image on disk
		$filename = "../img/".$row['image'];
		if (file_exists($filename)) {
	    	unlink($filename);
	    	echo 'File '.$filename.' has been deleted';

	    	//delete record in database
	    	$sql = "DELETE FROM recipelist_t WHERE id = $id";
			if ($con->query($sql) === TRUE){
		    	echo "Record deleted successfully";
		    	$con->close();
		    	header("Location: adminPage.php");
			}
			else{
		    	echo "Error deleting record: " . $con->error;
				$con->close();
				header("Location: adminPage.php");
			}
  		}
  		else {
  			$con->close();
    		echo 'Could not delete '.$filename.', file does not exist';
    		header("Location: adminPage.php");
  		}
	}
?>