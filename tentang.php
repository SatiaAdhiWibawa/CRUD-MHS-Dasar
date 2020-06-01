<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>AplikasiPendataan Mahasiswa Fasilkom</title>
	<meta charset="utf-8">  
	<meta name="viewport” content=”width=device-width, initial-scale=1">  
	<script src="assets/jquery/jquery.min.js"></script> 
	<script src="assets/js/bootstrap.js"></script> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">
    	<img src="assets/images/fasilkom.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">FASILKOM</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item active">
        	<a class="nav-link" href="beranda.php">Beranda <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="input_data.php">Input Data</a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="tentang.php">About</a>
      		</li>
    	</ul>
    </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h2>Tentang Aplikasi</h2>
				<article>
					<header>
						<p>Aplikasi ini disiapkan untuk Mata Kuliah Developing Web Application using PHP, Aplikasi ini bisa di kembangkan lagi fitur-fiturnya agar lebih sempurna.</p>
					</header>
				</article>
			</div>
			<div class="col-sm">
				<p>Fakultas Ilmu Komputer -Universitas Subang</p>
			</div>
		</div>
	</div>
		<footer>
		<footer class="row bg-dark">
		<div class="col-sm">
		<p style="color: #fff;">&copy;Sendi Agustia | D1A.19.0445 -
			<?php 
			echo date('Y')
			?>
		</p>
		</div>
	</footer>
	</body>
	</html>