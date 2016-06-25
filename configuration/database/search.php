<?php
	include_once("../conf/conf.php");
	if(isset($_GET['query'])){
		$query = $_GET['query'];
		$sql = "SELECT * FROM recipelist_t where name like '%$query%'";
		$result = $con->query($sql);
		while ($row = $result->fetch_assoc()) {
			?>
				<div class="col-lg-4">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="detail.php?id=<?=$row['id']?>"><?=$row['name'] ?></a></div>
					  <div class="panel-body">
					     <a href="detail.php?id=<?=$row['id']?>"><img src="../img/<?= $row['image'] ?>" class="img-responsive"></a>
					  </div>
					</div>
				</div>
			<?php
		}
	}
?>