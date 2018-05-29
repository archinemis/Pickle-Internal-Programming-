<!DOCTYPE html>
<html>
<head>
	<title>Pickle | Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

	    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pickle</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item zz">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>index.php/home">Home</a>
            </li>
            <li class="nav-item zz">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/communities_front">Communities</a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link nav-active" href="<?php echo base_url() ?>index.php/event_front">Event</a>
            </li>
            <?php
                if($this->session->userdata('status') == "login"){
            ?>
                    <li class="nav-item active zz">
                        <a class="nav-link " href="<?php echo base_url() ?>index.php/dashboard">Dashboad</a>
                    </li>
            <?php
                }else{
            ?>
                    <li class="nav-item active zz">
                        <a class="nav-link " data-toggle="modal" href="#exampleModal">Sign In<span class="sr-only">(current)</span></a>
                    </li>
            <?php
                }
            ?>
          </ul>
        </div>
      </div>
    </nav>
	<!-- Navbar -->

	<!-- Header -->

	<!-- Body -->



	<!-- Image -->
	<div id="container" >
		<div class="parallax_event">
			<nav class="navbar navbar-light align-middle justify-content-center" style="padding-top: 11rem;" >
			<blockquote class="blockquote text-center text-white">
				<p style="font-size: 30pt; font-weight: lighter;">All Event We Held</p>
			</blockquote>
			<!-- </nav>
			<nav class="navbar navbar-light align-middle justify-content-center" style="margin-top: 12%">
			  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Cari komunitas / event disini" aria-label="Search" style="border-radius: 0; width: 450px; padding: 10px">
			    <button class="btn  bton" type="submit" style="position: relative; right: 8px; border-radius: 0; width: 100px; padding: 10px">Cari</button>
			  </form>
			</nav> -->
		</div>
	</div> 
	<!-- Image -->


	<!-- ALL Events -->
	<!-- ALL Events -->
    <div class="container" style="padding-top: 54px; padding-bottom: 54px">

      <h1 class="my-4">
        <small></small>
      </h1>

      <div class="row">
        <div class="col-md-3">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url() ?>assets/foto/poster1.png" alt="" height="300px;">
          </a>
        </div>
        <div class="col-md-6 my-auto">
          <h3>Cangkruk Karyo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/event_front/detail">View</a>
        </div>
        <div class="col-md-3 my-auto">
          <h5>Wed, May 23, 2018</h5>
          <p>9:00 AM – 5:00 PM WIB</p>
        </div>
      </div>

      <hr>

       <div class="row">
        <div class="col-md-3">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url() ?>assets/foto/poster1.png" alt="" height="300px;">
          </a>
        </div>
        <div class="col-md-6 my-auto">
          <h3>Cangkruk Karyo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="events_details.php">View</a>
        </div>
        <div class="col-md-3 my-auto">
          <h5>Wed, May 23, 2018</h5>
          <p>9:00 AM – 5:00 PM WIB</p>
        </div>
      </div>

    </div>
    <!-- ALL Events -->