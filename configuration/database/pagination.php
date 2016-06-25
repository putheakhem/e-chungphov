<ul class="pagination">
<?php
	include_once('../conf/conf.php');
	$per_page = 6;
	$page = 0;
	$sql = "SELECT * FROM recipelist_t";
	$result = $con->query($sql);
	for($i=1; $i<=ceil($result->num_rows/6); $i++){
		?>
			<li id="<?= $i ?>"><a href=""><?= $i ?></a></li>
		<?php
	}
?>
</ul>