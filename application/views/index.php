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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">Pickle</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger nav-active" href="<?php echo base_url() ?>index.php/home">Home</a>
            </li>
            <li class="nav-item zz">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/communities_front">Communities</a>
            </li>
            <li class="nav-item active zz">
              <a class="nav-link " href="<?php echo base_url() ?>index.php/event_front">Event</a>
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
		<div class="parallax">
			<nav class="navbar navbar-light align-middle justify-content-center" style="padding-top: 7.5rem;" >
			</nav>
			<div class="align-middle justify-content-center" style="margin-top: 4%">
			  <center>
			  	<h2 style="color: #fff; font-weight: lighter; margin-bottom: 1.5%">There's no fun you will miss</h2>
			  	<p>
			  		<a href="<?php echo base_url() ?>index.php/communities_front"><button class="btn btn-primary" style="margin-right: 1%; width: 230px; height: 40px; font-weight: lighter; background: transparent; border-radius: 20px">Explore Communities</button></a>
			  		<a href="<?php echo base_url() ?>index.php/event_front"><button class="btn btn-primary" style="margin-left: 1%; height: 40px; width: 230px; font-weight: lighter; background: transparent; border-radius: 20px">Explore Events</button></a>
			  	</p>
			  </center>
			</div>
		</div>
	</div>
	<!-- Image -->

	<!-- About -->
	<div class="jumbotron " style="text-align: center; margin-bottom: 0; padding-left: 80px; padding-right: 80px; background: #fff; font-family: 'Maven Pro', sans-serif;">
	  <h1 style="color: #f2b632">Pickle?</h1>
	  <p style="margin-top: 30px; margin-bottom: 10px; font-weight: lighter; font-size: 19px; color: #677077">Pickle is place where you can find unofficial communities and event, so they know there is more exciting communities than the official communities like UKM and UKP</p>
	  <div class="container" style="margin-top: 5%;">
	  	<div class="row">
	  		<div class="col-sm-3">
	  		</div>
	  		<div class="col-sm-2" style="color: #677077">
	  			<img src="<?php echo base_url() ?>assets/img/people.png" width="60" style="margin-bottom: 5%"><br>
	  			<h1>30</h1>Users
	  		</div>
	  		<div class="col-sm-2" style="color: #677077">
	  			<img src="<?php echo base_url() ?>assets/img/calendar.png" width="60" style="margin-bottom: 5%"><br>
	  			<h1>5</h1>Events
	  		</div>
	  		<div class="col-sm-2" style="color: #677077">
	  			<img src="<?php echo base_url() ?>assets/img/communities2.png" width="60" style="margin-bottom: 5%"><br>
	  			<h1>8</h1>Communities
	  		</div>
	  		<div class="col-sm-3">
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- About -->

	

	<!-- community Slider -->
		 <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio" style="padding-top: 75px; padding-bottom: 75px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="color: #f2b632; margin-bottom: 5%">Communities</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url() ?>assets/foto/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a href="communities_details.php"><h4>SCN</h4>
              <p class="text-muted">Stikom Cyber Nippon</p></a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url() ?>assets/foto/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a href=""><h4>KOS Club</h4>
              <p class="text-muted">Karyo The Best</p></a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url() ?>assets/foto/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a href=""><h4>Komunitas Pansos</h4>
              <p class="text-muted">Pansos The Best</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>

	<div class="container-fluid p-0" style="background: #f2b632">
	  <div class="row no-gutters">
	    <div class="col-lg-6 text-white my-auto showcase-img">
	      <img src="<?php echo base_url() ?>assets/foto/zz.jpg" class="img-fluid" alt="Responsive image">
	    </div>
	    <div class="col-lg-6 my-auto showcase-text" style="padding: 7rem; color: #fff">
            <h2>About Us</h2>
            <p>We help all societies or students to find an unofficial community that is no less exciting than the official community</p>
          </div>
	  </div>
	</div>

	<div id="eventss" class="card" style="background: #fff;">  
	<div class="jumbotron form-inline" style="padding-left: 80px; padding-right: 80px; margin-bottom: 0;background: #fff; border-radius: 0px">
	  	<div class="container">
	  	<div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="color: #f2b632; margin-bottom: 5%">Events</h2>
          </div>
        </div>
	  	
	  	<div class="row">
		    <div class="col-sm">
		      	<div class="card" style="width: 18rem; margin-top: 10px; padding: 8px">
		      		<div style="background: #252839; width: 100%; height: 50px; margin-bottom: 3%; padding-left: 10%; color: #fff;
		      		padding-top: 5%; font-weight: lighter;">
		      			18 JULY 2018
		      		</div>
				  	<img class="card-img-top" src="<?php echo base_url() ?>assets/foto/poster1.png">
				   	<div class="card-body">
				    	<h5 class="card-title" style="font-weight: lighter;">Cangkruk Karyo</h5>
				    	<hr style="background-color: #f2b632">
				    	<p class="card-text fon" style="font-size: 12px">
				    		Grand City Mall Surabaya, Jalan Walikota Mustajab No.1, Ketabang, Genteng, Ketabang, Genteng, Kota SBY, Jawa Timur 60272
				    	</p>
				    	<button class="btn btn-primary">Details</button>
			  		</div>
				</div>
		    </div>
		    <div class="col-sm">
		      	<div class="card" style="width: 18rem; margin-top: 10px; padding: 8px">
		      		<div style="background: #252839; width: 100%; height: 50px; margin-bottom: 3%; padding-left: 10%; color: #fff;
		      		padding-top: 5%; font-weight: lighter;">
		      			18 JULY 2018
		      		</div>
				  	<img class="card-img-top" src="<?php echo base_url() ?>assets/foto/poster1.png">
				   	<div class="card-body">
				    	<h5 class="card-title" style="font-weight: lighter;">Cangkruk Karyo</h5>
				    	<hr style="background-color: #f2b632">
				    	<p class="card-text fon" style="font-size: 12px">
				    		Grand City Mall Surabaya, Jalan Walikota Mustajab No.1, Ketabang, Genteng, Ketabang, Genteng, Kota SBY, Jawa Timur 60272
				    	</p>
				    	<button class="btn btn-primary">Details</button>
			  		</div>
				</div>
		    </div>
		    <div class="col-sm">
		      	<div class="card" style="width: 18rem; margin-top: 10px; padding: 8px">
		      		<div style="background: #252839; width: 100%; height: 50px; margin-bottom: 3%; padding-left: 10%; color: #fff;
		      		padding-top: 5%; font-weight: lighter;">
		      			18 JULY 2018
		      		</div>
				  	<img class="card-img-top" src="<?php echo base_url() ?>assets/foto/poster1.png">
				   	<div class="card-body">
				    	<h5 class="card-title" style="font-weight: lighter;">Cangkruk Karyo</h5>
				    	<hr style="background-color: #f2b632">
				    	<p class="card-text fon" style="font-size: 12px">
				    		Grand City Mall Surabaya, Jalan Walikota Mustajab No.1, Ketabang, Genteng, Ketabang, Genteng, Kota SBY, Jawa Timur 60272
				    	</p>
				    	<button class="btn btn-primary">Details</button>
			  		</div>
				</div>
		    </div>
	  	</div>
	</div>
	</div>

	<div class="add-event-banner" style="padding-top: 5.5%">
		<center>
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<h1 style="font-family: 'Amaranth', sans-serif; color: #e5e5e5">Ready to create experiences?</h1>
					</div>
					<div class="col-sm" style="padding-top: 0.3%">
						<button class="btn btn-primary" style="height: 50px; width: 250px;border-radius: 25px">Create Communities</button>
					</div>
				</div>
			</div>
		</center>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Sign-in</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="<?php echo base_url() ?>index.php/login" method="post">
	  	      <div class="modal-body">
	  	        <div class="form-group">
	  			    <label for="exampleInputEmail1">NIM</label>
	  			    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
	  			  </div>
	  			  <div class="form-group">
	  			    <label for="exampleInputPassword1">PIN</label>
	  			    <input type="password" name="pin" class="form-control" id="exampleInputPassword1" placeholder="PIN">
	  			    <br>
	  			     <small id="emailHelp" class="form-text text-muted">Don't Have an Account? <a data-toggle="modal" href="#register" data-dismiss="modal" >Click Here!</a></small>
	  			  </div>
	  	      </div>
	  	      <div class="modal-footer">
	  	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	  	        <input type="submit" class="btn btn-primary" name="login" value="Login">
	  	      </div>
	      </form>
	    </div>
	  </div>
	</div>


	<div class="modal fade bd-example-modal-lg" tabindex="-1" id="register" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      	</div>
	       <form style="padding: 35px;">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Nama</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Nama">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Jurusan</label>
			      <select id="inputState" class="form-control">
			        <option selected>Choose...</option>
			        <option>Sistem Informasi</option>
			        <option>Sistem Komputer</option>
			        <option>Desain Komunikasi Visual</option>
			        <option>Multimedia</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="inputAddress">NIM</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="NIM">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="inputAddress">PIN</label>
			    <input type="password" class="form-control" id="inputAddress" placeholder="PIN">
			  </div>
				</div>
			  <div class="form-group">
			    <label for="inputAddress">Alamat</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Anda">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">No. Telepone</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="No. Telepone">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Input Foto</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1">
			  </div>
			  <div class="form-group">
			  </div>
			  <button type="submit" class="btn btn-primary">Sign Up</button>
			</form>
	    </div>
	  </div>
	</div>

	