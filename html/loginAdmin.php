
<?php

	if( isset($_POST['password'])){
		require_once('../configuration/conf/conf.php');
		session_start();
		// if(isset($_SESSION['adminitrator'])){
		// 	header("Location: adminPage.php");
		// }
		if (!$con) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM admin where name='mengthong'";
		$result = $con->query($sql);
		$authenticate = false;
		
		while ($row = $result->fetch_assoc()) {						
			if(strcmp($_POST['password'], $row['password'])==0){
				$authenticate = true;
			}
		}
		if($authenticate){
			$_SESSION['adminitrator'] = $_POST['password'];
			header("Location: adminPage.php");
		}else{
			echo "<div class='alert alert-warning'>Wrong credentials</div>";
		}
	}
?>
					
	