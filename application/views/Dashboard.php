<!DOCTYPE html>
<html>
<head>
	<title>Sircle | Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style-backend.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

	<div id="nav_sidebar">

		<center><img src="<?php echo base_url() ?>assets/img/foto.jpg" class="rounded-circle profile-pic"></center>
		<h6 style="color: #fff; text-align: center; margin-top: 10px"><?php echo $mahasiswa[0]->nama_mhs ?></h6>
		<ul>
	  		<hr style="background: #f2b632" width="80%" >
			<a href="<?php echo base_url() ?>index.php/dashboard"><li style="background: #677077;"><img src="<?php echo base_url() ?>assets/img/dashboard.png">Dashboard</li></a>
	      	<a href="<?php echo base_url() ?>index.php/communities_back"><li><img src="<?php echo base_url() ?>/assets/img/communities.png">My Communities</li></a>
	      	<a href="<?php echo base_url() ?>index.php/event_back"><li><img src="<?php echo base_url() ?>/assets/img/event.png">My Event</li></a>
	      	<!-- <a href="message.php"><li><img src="img/message.png">My Mesage</li></a> -->
	      	<a href="<?php echo base_url() ?>index.php/home" style="position: absolute; bottom: 0;"><li><img src="<?php echo base_url() ?>assets/img/home.png">Home</li></a>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light" style="z-index: 0; padding-right: 4rem; background: #f2b632">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav" style="padding-left: 20px">
	      <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff">
	            <?php echo $mahasiswa[0]->nama_mhs ?>
	          </a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          	<a class="dropdown-item" href="index.php">Setting</a>
	            <a class="dropdown-item" href="<?php echo base_url() ?>index.php/login/logout">Log out</a>
	          </div>
	        </li>
	    </ul>
	  </div>
	</nav>

	<div class="container" style="margin-top: 20px; padding-left: 170px; ">
		<h4 style="margin-bottom: 3%">Dashboard</h4>

		<div class="row">
			<div class="col-md-4">
				<div class="card-komunitas">
					<h3>1 Communities</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-event">
					<h3>1 Event</h3>
				</div>
			</div>
			<!-- <div class="col-md-4">
				<div class="card-pesan">
					<h3>0 Mesage</h3>
				</div>
			</div> -->
		</div>
		<hr>
		<!-- <div class="alert alert-danger" role="alert" style="margin-top: 3%">
		  <h6>Buka bersama di warung karyo, 29 Mei 2018, 16.30 - selesai</h6>
		</div> -->
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>