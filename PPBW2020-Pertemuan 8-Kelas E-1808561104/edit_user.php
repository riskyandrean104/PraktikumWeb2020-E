<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="style_insert.css">
</head>
<body>
 
	<h2>Data Mahasiswa</h2>
	<br/>
	<h3>Edit Data Mahasiswa</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_user.php">
			<table cellpadding="13">
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
                <tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
	<div class="box">
	<a href="dashboard_user.php">KEMBALI</a>
	</div>
</body>
</html>