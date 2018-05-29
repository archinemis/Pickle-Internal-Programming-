<!DOCTYPE html>
<html>
<head>
	<title>Sircle | My Communities</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style-backend.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

    <?php 
    if($this->session->flashdata('item') != null){
    ?>
        <script>
            swal({
                title: "Success",
                text: "Anda berhasil menambah data",
                icon: "success",
                button: "Close",
                });
        </script>
    <?php
    } 
    ?>

	<div id="nav_sidebar">

		<center><img src="<?php echo base_url() ?>assets/img/foto.jpg" class="rounded-circle profile-pic"></center>
		<h6 style="color: #fff; text-align: center; margin-top: 10px">Denandra</h6>
		<ul>
	  		<hr style="background: #f2b632" width="80%" >
			<a href="<?php echo base_url() ?>index.php/dashboard"><li><img src="<?php echo base_url() ?>assets/img/dashboard.png">Dashboard</li></a>
	      	<a href="<?php echo base_url() ?>index.php/communities_back"><li style="background: #677077;"><img src="<?php echo base_url() ?>/assets/img/communities.png">My Communities</li></a>
	      	<a href="<?php echo base_url() ?>index.php/event_back"><li><img src="<?php echo base_url() ?>/assets/img/event.png">My Event</li></a>
	      	<!-- <a href="message.php"><li><img src="img/message.png">My Mesage</li></a> -->
	      	<a href="<?php echo base_url() ?>index.php/home" style="position: absolute; bottom: 0;"><li><img src="<?php echo base_url() ?>assets/img/home.png">Home</li></a>
	  	</ul>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light" style="z-index: 0; padding-right: 4rem; background: #f2b632">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav" style="padding-left: 20px">
	      <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff">
	            Denandra
	          </a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          	<a class="dropdown-item" href="index.php">Setting</a>
	            <a class="dropdown-item" href="#">Log out</a>
	          </div>
	        </li>
	    </ul>
	  </div>
	</nav>

	<div class="container" style="margin-top: 20px; padding-left: 170px; ">
		<h4 style="margin-bottom: 3%; margin-top: 3%">My Communities</h4>
		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color: #000">List Komunitas</a>
		    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: #000">Create Communities</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="background: #fff; padding: 16px">
		  		<div class="row">
		  			<div class="col-md-12">
		  				<table class="table table-dark" style="font-size: 14px; width: 100%">
		  					<thead>
		  						<tr>
		  							<th scope="col">No</th>
		  							<th scope="col">Name</th>
		  							<th scope="col">Date Created</th>
		  							<th scope="col">Kategory</th>
		  							<th scope="col">Status</th>
		  							<th scope="col">Detail</th>
		  						</tr>
		  					</thead>
		  					<tbody>
                                <?php
                                    $no = 1;
                                    foreach($komunitas as $k){
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no ?></th>
                                        <td scope="row"><?php echo $k->nama_komunitas ?></td>
                                        <td scope="row"><?php echo $k->tgl_dibentuk ?></td>
                                        <td scope="row"><?php echo $k->id_kategori_komunitas ?></td>
                                        <td scope="row"><?php echo $k->nama_komunitas ?></td>
                                        <td scope="row"><a href="detail_communities_back.php">More..</a></td>
                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
		  					</tbody>
		  				</table>
		  			</div>
		  		</div>
		  </div>
		  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="background: #fff; padding: 16px">
		  		<form action="<?php echo base_url() ?>index.php/communities_back/insert" method="post" enctype="multipart/form-data">
		  			<div class="form-group">
		  			    <label for="nmKomunitas" style="font-size: 14px">Nama Komunitas</label>
		  			    <input type="text" name="nm_komunitas" class="form-control" id="nmKomunitas" aria-describedby="emailHelp" placeholder="Masukkan nama komunitas">
		  			</div>
		  			<div class="form-group">
		  			    <label for="dKegiatan" style="font-size: 14px">Deskripsi Kegiatan</label>
		  			    <textarea class="form-control" name="deskripsi" id="dKegiatan" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
		  			</div>
		  			<div class="form-group">
	  			      <label for="inputState" style="font-size: 14px">Kategory</label>
	  			      <select id="inputState" class="form-control" name="kat">
	  			        <option selected>Choose...</option>
	  			        <option value="Edukasi">Edukasi</option>
	  			        <option value="Sosial">Sosial</option>
	  			        <option value="Hobby">Hobby</option>
	  			      </select>
	  			    </div>
                    <div class="form-group">
		  			    <label for="nmKomunitas" style="font-size: 14px">Nomor Telepon</label>
		  			    <input type="text" name="no_telp" class="form-control" id="nmKomunitas" aria-describedby="emailHelp" placeholder="Masukkan nomor telepon">
		  			</div>
                    <div class="form-group">
		  			    <label for="nmKomunitas" style="font-size: 14px">Id Line</label>
		  			    <input type="text" name="id_line" class="form-control" id="nmKomunitas" aria-describedby="emailHelp" placeholder="Masukkan Id Line">
		  			</div>
		  			<div class="form-group">
		  			    <label for="exampleFormControlFile1" style="font-size: 14px">Photo</label>
		  			    <input type="file" name="foto" class="form-control-file form-control-sm" id="exampleFormControlFile1" style="width: 100px">
		  			<div>
		  			<button type="submit" class="btn btn-primary" style="margin-top: 2%">Tambah</button>
		  		</form>
		  </div>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>