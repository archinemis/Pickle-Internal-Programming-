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
<body >

	<!-- Header -->

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #252839;padding-right: 5rem;
padding-left: 5rem; height: 65px;">
	  <a class="navbar-brand text-white" href="#">Infinity Code</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link text-white fon b_head" href="<?php echo base_url() ?>index.php/home">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-white fon b_head nav-active" href="<?php echo base_url() ?>index.php/communities_front">Communities <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-white fon b_head " href="<?php echo base_url() ?>index.php/event_front">Event <span class="sr-only">(current)</span></a>
	      </li>
	      <?php
                if($this->session->userdata('status') == "login"){
            ?>
                <li class="nav-item active">
                    <a class="nav-link text-white fon b_head" href="<?php echo base_url() ?>index.php/dashboard">Dashboad</a>
                </li>
            <?php
                }else{
            ?>
            <li class="nav-item active">
                <a class="nav-link text-white fon b_head" data-toggle="modal" href="#exampleModal">Sign In<span class="sr-only">(current)</span></a>
            </li>
            <?php
                }
            ?>
	    </ul>
	  </div>
	</nav>

	<div id="container" >
			<nav class="navbar navbar-light align-middle justify-content-center" style="padding-top: 3rem; padding-bottom: 3rem;" >
			<blockquote class="blockquote text-center text-white">
				<p class="mb-0" style="font-size: 30pt; color: #f2b632;">Stikom Cyber Nippon</p>
			</blockquote>
			<!-- </nav>
			<nav class="navbar navbar-light align-middle justify-content-center" style="margin-top: 12%">
			  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Cari komunitas / event disini" aria-label="Search" style="border-radius: 0; width: 450px; padding: 10px">
			    <button class="btn  bton" type="submit" style="position: relative; right: 8px; border-radius: 0; width: 100px; padding: 10px">Cari</button>
			  </form>
			</nav> -->
	</div> 
	<!-- Image -->


	<!-- Page Communities -->
	<div id="container">
		<div class="row">
		  <div class="col-7" style="padding: 10px; padding-left: 100px;" >
		  	<div class="card" >
			  <div class="card-body">
			    <h4 >SCN</h4>
			    <p class="blockquote-footer">Stikom Cyber Nippon</p>
			    <hr>
			    <p>Locations : Vancouver, B.C. (Downtown)</p>
			    <br>
			    <p>
			    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			    </p>
			    <br>
			    <h5>
			    	What we do :
			    </h5>
			    <p>
			    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			    </p>
			    <br>
			    <h5>
			    	Mission :
			    </h5>
			    <p>
			    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			    </p>
			    <br>
			    <hr>
			  </div>
			</div>
		  </div>
		  <div class="col-5" style="padding: 10px; padding-right: 100px; ">
			<div id="jumbotron">
		  	<div class="card text-center">
				   <img class="card-img-top" src="<?php echo base_url() ?>assets/foto/portfolio/01-thumbnail.jpg" alt="Card image cap">
				  <div class="card-body">
				    <hr>
				    <a href="#" class="btn btn-primary">Aplly Membership</a>
				    <hr>
				    
				  </div>
				</div>
				</div>
		  </div>
		</div>
	</div>