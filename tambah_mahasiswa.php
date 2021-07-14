<?php 
	//variabel global post
	//$_POST['npm']; //273237423
	if(isset($_POST['simpan'])) {
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$tampat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];
		$ipk = $_POST['ipk'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistem Informasi Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 id="label" >Sistem Informasi <span>Kampusku</span></h1>
			<p id="tanggal"><?php echo Date('d M Y'); ?></p>
		</div>
		<hr>
		
		<nav>
			<ul>
				<li>
					<a href="tambah_mahasiswa.php">Tambah</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>

		<div class="content">
			<h2>Tambah Data Mahasiswa</h2>
			<form id="form_mahasiswa" method="POST" action="tambah_mahasiswa.php" >
				<fieldset>
					<legend>Mahasiswa Baru</legend>
					<p>
						<label for="npm" >NPM :</label>
						<input type="text" name="npm" id="npm">
					</p>
					<p>
						<label for="nama" >Nama :</label>
						<input type="text" name="nama" id="nama">
					</p>
					<p>
						<label for="tempat_lahir" >Tempat Lahir :</label>
						<input type="text" name="tempat_lahir" id="tempat_lahir">
					</p>
					<p>
						<label for="tanggal_lahir" >Tanggal Lahir :</label>
						<input type="date" name="tanggal_lahir" id="tanggal_lahir">
					</p>
					
					<p>
						<label for="fakultas" >Fakultas :</label>
						<select name="fakultas" id="fakultas" >
							<option value="Fakultas Teknik & Sains">Fakultas Teknik dan Sains</option>
							<option value="Fakultas Ilmu Kesehatan">Fakultas Ilmu Kesehatan</option>
							<option value="Fakultas Ekonomi & Bisnis">Fakultas Ekonomi & Bisnis</option>
							<option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
							<option value="Fakultas Keguruan & Ilmu Pendidikan">Fakultas Keguruan & Ilmu Pendidikan</option>
							<option value="Fakultas Hukum">Fakultas Hukum</option>
						</select>
						
					</p>
					<p>
						<label for="jurusan" >Jurusan :</label>
						<input type="text" name="jurusan" id="jurusan">
					</p>
					<p>
						<label for="ipk" >IPK :</label>
						<input type="text" name="ipk" id="ipk">
					</p>
					<p>
						<button type="submit" name="simpan">Simpan</button>
					</p>


				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>