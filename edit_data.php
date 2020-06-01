<?php
	include("config.php");
	//kalau tidak ada id di query string
	if( !isset($_GET['id']) ){
	header('Location: index.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
die("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi Pendataan Mahasiswa Fasilkom</title>
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
				<h2>Form Edit Data</h2>
				<article>
					<div class="form">
						<form action="proses_edit.php" method="POST">
							<input  type="hidden"  name="id"  value="<?php  echo $data['id'] ?>" />
							<div class="form-group">
								<label for="nama">Nama :</label>
								<input  type="text"  name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama'] ?>" />
							</div>
							<div class="form-grup">
								<label for="alamat">Alamat :</label>
								<textarea class="form-control" name="alamat">
									<?php 
									echo $data['alamat'] 
									?>
										
								</textarea>
							</div><br>
							<div class="form-grup">
								<label for="jk" class="form-check-label">Jenis Kelamin :</label>
								<?php
									$jkel = $data['jk'];
								?><br>
								<label>
									<input type="radio" name="jk" value="Laki-laki" class="form-check-input" <?php 
										echo ($jkel == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label><br>
								<label>
									<input type="radio" name="jk" value="Perempuan"  class="form-check-input" <?php echo ($jkel == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
							</div><br>
							<div class="form-group">
								<label for="agama">Agama: </label><?php $agama = $data['agama']; ?>
								<select name="agama" class="form-control">
									<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
									<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
									<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
									<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
									<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
									<option <?php echo ($agama == 'Lainnya') ? "selected": "" ?>>Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="asal_sekolah">Asal Sekolah: </label>
								<input class="form-control" type="text" name="asal_sekolah" placeholder="nama  sekolah"  value="<?php  echo  $data['asal_sekolah'] ?>" />
								</div>
								<div class="grup">
									<input  type="submit"  value="Simpan"  name="simpan" />
								</div><br>
						</form>
					</article>
				</div>
			</div>
		</div> 
		<footer class="row bg-dark">
		<div class="col-sm">
		<p style="color: #fff;">&copy;Satia Adhi Wibawa | D1A.18.0401 -
			<?php 
			echo date('Y')
			?>
		</p>
		</div>
		</footer>
	</body>
	</html>