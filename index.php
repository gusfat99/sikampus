<?php
	//koneksi dengan databse
	include "connection.php";

	$query = "SELECT * FROM tbl_mahasiswa";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIKAMPUS</title>
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
			<?php
				//unutj menjalankan query
				$result = mysqli_query($connect,$query);
				

			?>
			<h2>Data Mahasiswa</h2>
			<table width="100%" border="1">
				<tr>
					<th>No.</th>
					<th>NPM</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>IPK</th>
					<th>Aksi</th>
				</tr>
				<?php
					$no = 1; 
					while($data = mysqli_fetch_assoc($result)) : ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['npm']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['tempat_lahir']; ?></td>
						<td><?php echo $data['tanggal_lahir']; ?></td>
						<td><?php echo $data['fakultas']; ?></td>
						<td><?php echo $data['jurusan']; ?></td>
						<td><?php echo $data['ipk']; ?></td>
						<td></td>
					</tr>
				<?php
					$no++; 
					endwhile; ?>
				
			</table>
		</div>
	</div>
</body>
</html>