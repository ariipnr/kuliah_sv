<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
	<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
	<section id="menu">
		<nav class="navbar navbar-light bg-dark">
	  		
		</nav>
	</section>
	</div>

	
	<section class="navy" id="section1">
		<div class="content">
			<img align="left" src="image/LogoIPB.png" width="400px">
			<h1 align="right">Inventaris Barang Lab Komputer</h1>
			<p align="right">Inventaris Barang Lab Komputer Sekolah Vokasi Institut Pertanian Bogor</p>
			
		</div>
	</section>
	
	<section class="white" id="section2"><br>

			<table width="35%" align="center" border="0">
				<td>
				<div class="">
				  <form action="cek_login.php" method="POST" class="px-4 py-3">
				    <div class="form-group">
				    				<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){ ?>
			<div class="alert alert-danger" role="alert">
 				 Masukkan Username dan Password dengan Benar
			</div>
		<?php }else if($_GET['pesan'] == "logout"){?>
			<div class="alert alert-secondary" role="alert">
  				Anda Berhasil Logout!
			</div>
		<?php
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
				      <label>User</label>
				      <input type="text" name="username" class="form-control" placeholder="Username">
				    </div>
				    <div class="form-group">
				      <label for="exampleDropdownFormPassword1">Password</label>
				      <input type="password" name="password" class="form-control" placeholder="Password">
				    </div>
				    <div class="form-group">
				      <div class="form-check">
				        <input type="checkbox" class="form-check-input" id="dropdownCheck">
				        <label class="form-check-label" for="dropdownCheck">
				          Remember me
				        </label>
				      </div>
				    </div>
				    <button type="submit" class="btn btn-primary">Sign in</button><!-- ><a href="index.html" class="btn btn-primary">Sign In</a> -->
				  </form>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Forgot password?</a>
				</div>
				</td>
			</table>
		</div>
	</section>

	<section class="navy" id="section3">
		<div class="content">
			<h4>CONTACT US</h4>
			<span>Jl. Kumbang No. 14 Cilibende Bogor, Jawa Barat, Indonesia</span><br>
			<span>Phone: (0251) 8329101</span><br>
			<span>E-mail: sv@apps.ipb.ac.id.</span><br>
		</div>
		<div class="clear"></div>
	</section>

	<section class="gray" id="section4">
			<div class="content">
				<p>Copyright © 2019 - Developed by Kelompok 6</p>
			</div>
	</section>

</body>
	<script type="text/javascript" src="script.js"></script>
	<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>

</html>