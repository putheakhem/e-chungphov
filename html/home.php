<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-ChongPhov</title>
	<link rel="shortcut icon" href="../img/tro-icon.png" />
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">

</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./home.php"><img class="homelogo" src="../img/icon1.png"></a>
			</div>
			<div class="navbar-right collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<form class="navbar-form navbar-left" role="search">
						  <div class="form-group">
						    <input type="text" class="form-control" placeholder="Search" id="search">
						  </div>
						</form>
					</li>
					<li class="active"><a class="hc" href="home.php"><i class="fa fa-home" ></i> ទំព័រដើម</a></li>
					<li class="dropdown">
						<a href="./content.php" class="ic dropdown-toggle disabled" data-toggle="dropdown"><i class="fa fa-heart"></i> ប្រភេទមុខម្ហូប<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li title="ម្ហូបឆា"><a class="icc" href="content.php?type=ម្ហូបឆា">ម្ហូបឆា</a>	</li>
							<li title="ម្ហូបស្ងោរ"><a class="icc" href="content.php?type=ម្ហូបស្ងោរ">ម្ហូបស្ងោរ</a></li>
							<li title="បង្អែម"><a class="icc" href="content.php?type=បង្អែម">បង្អែម</a></li>
						</ul>
					</li>
					<li><a class="ac"href="about_us.php"><i class="fa fa-child"></i> អំពីយើង</a><li>
					<li><a class="lc"href="login.php"><i class="fa fa-user-plus"></i>Login</a><li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row"><div id="query_search"></div></div>
		</div>
	</div>
<?php
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
	
	while($row = $result->fetch_assoc()){ 
		?>
			<div class="item" style="width: 100%; height: 500px;">
      			<img src="../img/<?= $row['image'] ?>" alt="" style="width: 100%;height: 500px;">
      			<div class="carousel-caption">
      				<a style="font-size: 35px; color: white" href="detail.php?id=<?= $row['id']?>"><?=$row['name']?></a>
      				<p><?= $row['type'] ?></p>
      			</div>
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
				<h2>ស្វែងយល់​ ពីវិធីសាស្រ្តក្នុងការធ្វើម្ហូប</h2>
			</div>
			
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4" id="v1">
			<div class="embed-responsive embed-responsive-16by9">
				<!-- <video muted loop="true" autoplay="autoplay"><source src='..\video\nem.mp4'></video> -->
				<img src="../img/cook2.gif" style="height: 220px; width: 100%;">
			</div>
			</div>
			<div class="col-md-4" id="v2">
			<div class="embed-responsive embed-responsive-16by9">
				<!-- <video muted loop="true" autoplay="autoplay"><source src='..\video\num.mp4'></video> -->
				<img src="../img/cook1.gif" style="height: 220px; width: 100%;">
			</div>
			</div>
			<div class="col-md-4" id="v3">
			<div class="embed-responsive embed-responsive-16by9">
				<!-- <video muted loop="true" autoplay="autoplay"><source src='..\video\nem.mp4'></video> -->
				<img src="../img/cook3.gif" style="height: 220px; width: 100%;">
			</div>
			</div>
		</div>
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
	<div class="row" style="margin-top: -3em">
	<?php 
		while($row = $result->fetch_assoc()){ 
			?>
				<div class="col-lg-3 col-md-3 col-sm-6" id="image">
					<div class="thumbnail">
						<a href="detail.php?id=<?= $row['id']?>">
							<img style="width: 100%; height: 200px" src="../img/<?=$row['image']?>">
						</a>
						<div class="caption">
						<h3><a href="detail.php?id=<?= $row['id']?>"><?=$row['name']?></a></h3>
							<span><?=substr($row['how'], 0,50)?></span>
						</div>
					</div>
				</div>
	<?php } //end of while?>
	</div>

			<p class="text-center"><a class="btn btn-lg btn-danger" href="content.php" role="button"><strong><span>មើលបន្ថែម</span></strong></a></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="text-center" id="sponsored">
				<h4>ឧបត្ថម្ភដោយ</h4>
				<a href="http://www.itc.edu.kh/en/"><img class="img-sponsored" src="../img/ITC_LOGO.png"></a>
			</div>
	</div>
	<div id='footer'>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="caption" id="caption_pad">
							<h5>ស្វែងយល់ពីមុខម្ហូប</h5>
							<a class="credit" href="home.php"><p>ទំព័រដើម</p></a>
							<a class="credit" href="content.php"><p>មុខម្ហូប</p></a>
						</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="caption" id="caption_pad">
							<h5>ព័ត៏មានពាក់ព័ន្ធ</h5>
							<p><i style="color:#b9b8b5"​​​>សៀវភៅ មុខម្ហូបខ្មែរ</i></p>
							<p><a class="credit" href="https://www.youtube.com/user/bernymac20">Learn Here</a></p>
						</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="caption" id="caption_pad">
							<h5>ទាក់ទងយើង</h5>
							<p><a class="credit" href="./contact_us.html">Contact Us</a></p>
							<p><a class="credit" href="http://www.facebook.com">Facebook</a></p>
							<p><a class="credit" href="http://twitter.com/">twitter</a></p>
						</div>
				</div>
	
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="caption" id="caption_pad">
						<h5>គ្រេដីត</h5>
						<p><i style="color:#b9b8b5">Icons:</i></p>
						<p><i style="color:#b9b8b5">AwesomeIcons from </i><a class="credit" href="http://fontawesome.io/">Fontawesome</a></p>
						<p><i style="color:#b9b8b5">glyphicons from </i><a class="credit" href="http://getbootstrap.com">getBootstrap</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div id="caption_pad"><center>
				<img class="footer-logo" src="../img/icon1.png"/>
				<p class="copy-right">Copyright &copy; 2016 E-ចុងភៅ All rights reserved</p></center>
			</div>
		</div>
	</div>

	<script src="../js/jquery1.11.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".carousel-inner").children().eq(0).addClass("active");
			$(document).on("keyup", "#search", function(){
				if(this.value != ""){
					$("#query_search").load("../configuration/database/search.php?query="+this.value);
				}else{
					$("#query_search").text(this.value);
				}
			})	
		})
	</script>
</body>
</html>