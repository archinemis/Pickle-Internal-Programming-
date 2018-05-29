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
	<link href="css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

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
                <a class="nav-link nav-active" href="<?php echo base_url() ?>index.php/communities_front">Communities</a>
            </li>
            <li class="nav-item active zz">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/event_front">Event</a>
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

	<div id="container" >
		<div class="parallax_event">
			<nav class="navbar navbar-light align-middle justify-content-center" style="padding-top: 11rem;" >
			<blockquote class="blockquote text-center text-white">
				<p style="font-size: 30pt;">Communities Connecting with us</p>
                <hr style="border: 0.2px solid #f2b632;margin-top: -1rem;width: 650px;">
			</blockquote>
            
		</div>
	</div> 
    
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="row">
        <div class="col-lg-12 form-inline">
            <p>

            	<div class="card-group">
				  <div class="card">
				    <img class="card-img-top" src="<?php echo base_url() ?>assets/foto/portfolio/01-thumbnail.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Stikom Cyber Nippon</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    </div>
				    <div class="card-footer text-right">
				      <small class="text-muted">130 Members</small>
				      <a href="<?php echo base_url() ?>index.php/communities_front/detail" class="btn bton" style="padding-left: 10px;">Details</a>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="<?php echo base_url() ?>assets/foto/portfolio/01-thumbnail.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">KOS Club</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				    </div>
				    <div class="card-footer text-right">
				      <small class="text-muted">24 Members</small>
				      <a href="#" class="btn bton" style="padding-left: 10px;">Details</a>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="<?php echo base_url() ?>assets/foto/portfolio/01-thumbnail.jpg" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Karyo club</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				    </div>
				    <div class="card-footer text-right">
				      <small class="text-muted">45 Members</small>
				      <a href="#" class="btn bton" style="padding-left: 10px;">Details</a>
				    </div>
				  </div>
				</div>
			</p>

			<!-- Deskrifsi community 1 -->
			<div class="collapse" id="SCN" >
			  <div class="card card-body">
			    <div class="container-fluid p-0" style="margin-bottom: 50px; margin-top: 50px;">
				  <div class="row no-gutters">
				    <div class="col-lg-6 text-white my-auto showcase-img">
				      <img src="foto/portfolio/01-full.jpg" class="img-fluid colapse_img" alt="Responsive image">
				    </div>
				    <div class="col-lg-6 my-auto showcase-text" style="padding: 2rem;">
			            <h4>SCN</h4>
			            <h5><p class="lead mb-0">Merupakan Tempat berkumpulnya seluruh orang Wibu akut yang bertempat di Kampus Stikom Surabaya, disini kami sangat menerima anggota baru yang masih sangat polos karna momen yang paling seru adalah merusak anak orang.</p></h5>
			            <p>		
						  <br>
			            <a href="communities_details.php"><button class="btn  bton" type="submit" style="position: relative; right: 8px; border-radius: 0; width: 100px; padding: 10px">Join</button></a>
			            </p>
			          </div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- Deskrifsi community 2 -->
			<div class="collapse og-expanded" id="KOS">
			  <div class="card card-body">
			    <div class="container-fluid p-0" style="margin-bottom: 50px; margin-top: 50px;">
				  <div class="row no-gutters">
				    <div class="col-lg-6 text-white my-auto showcase-img">
				      <img src="foto/portfolio/02-full.jpg" class="img-fluid colapse_img" alt="Responsive image">
				    </div>
				    <div class="col-lg-6 my-auto showcase-text" style="padding: 2rem;">
			            <h4>KOS Club</h4>
			            <h5><p class="lead mb-0">Kami merupakan komunitas anak anak autis yang sering dan dominan nongkrong di KAryo dan Dpanji. ikutilah seluruh kegiatan kami dan jadilah anak autis.</p></h5>
			            <p>
			            <a href="#"><button class="btn  bton" type="submit" style="position: relative; right: 8px; border-radius: 0; width: 100px; padding: 10px">Join</button></a>
			            </p>
			          </div>
				  </div>
				</div>
			  </div>
			</div>
        </div>
      </div>
    </div>
