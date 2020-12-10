<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="style_insert.css">
</head>
<body>
 
	<h2>Data Mahasiswa</h2>
	<br/>
	<h3>Tambah Data Mahasiswa</h3>
	<form method="post" action="insert_user.php">
		<table cellpadding="13">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
            <tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<br/>
	<div class="box">
	<a href="dashboard_user.php">KEMBALI</a>
	</div>
</body>
</html>