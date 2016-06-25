<div class="container">
	<div class="row">

<?php
	include_once('../conf/conf.php');
	$per_page = 6;
	$page = 0;
	if(isset($_GET['id'])){
		$page = ($_GET['id']-1)*$per_page;
		$sql = "SELECT * FROM recipelist_t order by date desc limit $page, $per_page ";
		?> <h2 class="text-center"> មុខម្ហូប</h2> <?php
	}
	else if(isset($_GET['type'])){
		?> <h2 class="text-center"><?php echo $_GET['type']?> </h2> <?php
		$sql = "SELECT * FROM recipelist_t WHERE type='".$_GET['type']."' order by date desc limit $page, $per_page ";
	}
	else{
		$page = 0;
		$sql = "SELECT * FROM recipelist_t order by date desc limit $page, $per_page ";
		?> <h2 class="text-center">មុខម្ហូប</h2> <?php
	}
	$result= $con->query($sql);
	while ($row = $result->fetch_assoc()){
		?>
			<div class="col-lg-4 col-md-4 col-sm-12" id="image">
				<div class="thumbnail">
					<a href="detail.php?id=<?= $row['id']?>"><img src="../img/<?= $row['image']?>" style="width:100%;height:300px;"></a>
					<div class="caption">
						<h3><a href="detail.php?id=<?= $row['id']?>"><?= $row['name']?></a</h3>
						<p><?= substr($row['how'], 0, 100) ?></p>
					</div>
				</div>
			</div>
		<?php
	}
?>
	</div>
</div>