<?php
	function recom($id, $con, $type){ 
		$sql = "SELECT * FROM recipelist_t WHERE id!='".$id."' and type='".$type."'  order by date desc limit 0, 4";
		$result= $con->query($sql);
		while($row = $result->fetch_assoc()){
		?>

		<div class="well well-sm media">
			<div class="media-left media-middle">
				<a href="detail.php?id=<?= $row['id'] ?>"><img src="../img/<?= $row['image']?>" width="90" height="80"></a>
			</div>
			<div class="media-body">
				<div class="caption">
					<h3><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['name']?></a></h3>
					<p><?= substr($row['ingredient'],0,50)?></p>
				</div>
			</div>
		</div> <?php
		}
		
	}

	function home(){
		include_once('../configuration/conf/conf.php');
		$sql = "SELECT * FROM recipelist_t order by date desc limit 0, 3";
		$result= $con->query($sql);
		?>
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class=""></li>
		</ol>

<div class="carousel-inner">
	<?php
	$arr = array('one', 'two', 'three');
	$i=0;
	while($row = $result->fetch_assoc()){ 
		if($i==0) {?>
			<div class="item slide_<?=$arr[$i++]?> active">
		<?php }
		else { ?>
			<div class="item slide_<?=$arr[$i++]?>">
		<?php } ?>		
				<a href="" id="slide1">
					<div class="container">
						<div class="carousel-caption">
							<h1><?=$row['name']?></h1>
							<p><?=$row['type']?></p>
						</div>
					</div>
				</a>
			</div>
	<?php }//end of while?>
</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="box-border">
				<img class="img-circle logo" src="../img/tro.png"/></div>
			<div class="text-center">
				<h2>ស្វែងយល់​ ជាមួយវីដេអូ</h2>
			</div>
			
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4" id="v1">
			<div class="embed-responsive embed-responsive-16by9">
				<video muted loop="true" autoplay="autoplay"><source src='..\video\nem.mp4'></video>
			</div>
			</div>
			<div class="col-md-4" id="v2">
			<div class="embed-responsive embed-responsive-16by9">
				<video muted loop="true" autoplay="autoplay"><source src='..\video\num.mp4'></video>
			</div>
			</div>
			<div class="col-md-4" id="v3">
			<div class="embed-responsive embed-responsive-16by9">
				<video muted loop="true" autoplay="autoplay"><source src='..\video\nem.mp4'></video>
			</div>
			</div>
		</div>
		<p class="text-center"><a class="btn btn-lg btn-danger video-btn" href="category_4.html" role="button"><strong><span>មើល​វីដេអូ ជាច្រើន​ទៀត</span></strong></a></p>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="box-border2">
				<img class="img-circle logo" src="../img/tro.png"/>
			</div>
		</div>
	</div>

	<?php
		$sql = "SELECT * FROM recipelist_t order by date desc limit 0, 4";
		$result= $con->query($sql);
	?>
	<div id='newpic'>
		<div class="container">
			<div class="text-center" id="cuisine_title">
				<h2 style="color:#fff;">វីដេអូ និង អត្ថបទ</h2>
			</div>
	<div class="row">
	<?php 
		while($row = $result->fetch_assoc()){ ?>
				<div class="col-lg-3 col-md-3 col-sm-6" id="image">
					<div class="thumbnail">
						<a href="">
							<img class="img-rounded img-size" src="../img/<?=$row['image']?>">
						</a>
						<div class="caption">
						<h3><a href=""><?=$row['name']?></a></h3>
							<span><?=substr($row['how'], 0,150)?></span>
						</div>
					</div>
				</div>
	<?php } //end of while?>
	</div>
			<p class="text-center"><a class="btn btn-lg btn-danger" href="category_1.html" role="button"><strong><span>មើលបន្ថែម</span></strong></a></p>
		</div>
	</div>
<?php }//end of function?>

<?php
	function about(){
		?>


	<div class="container">
		<div class="text-center" id="cuisine_title">
			<h4>The 16th Generation of Department of Information and Communication Engineering, ITC</h4>
			<span>Year 4 Group B</span>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="thumbnail" id="aboutus_border">
					<img class="img-circle img-responsive" src="../img/1.jpg">
					<div class="caption">
						<p class="text-center">សុង ម៉េងថុង</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="thumbnail" id="aboutus_border">
					<img class="img-circle img-responsive" src="../img/2.jpg">
					<div class="caption">
						<p class="text-center">ទេព សុភានុមា</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="thumbnail" id="aboutus_border">
					<img class="img-circle img-responsive" src="../img/3.jpg">
					<div class="caption">
						<p class="text-center">សុខ វាសនា</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="thumbnail" id="aboutus_border">
					<img class="img-circle img-responsive" src="../img/4.jpg">
					<div class="caption">
						<p class="text-center">តូ ធី មិញ ថាញ់</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
	}
?>