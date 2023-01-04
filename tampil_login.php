</!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<?php include "koneksi.php" ;
	SESSION_START();
	?>
	<P align="center">Selamat Datang <?php echo $_SESSION['username']; ?></P>
	DATA ANGGOTA LOGIN<br>
	<a href="daftar_user.php">Daftar User</a> <a href="logout.php"><strong>Logout</strong></a>
	<table border=1>
		<tr>
			<th>NO</th><th>ID</th><th>NAMA PENGGUNA</th><th>USERNAME</th><th>PASSWORD</th><th colspan=2 align=center>Aksi</th>
		</tr>
		<?php
			$no=0;
			include("koneksi.php");
			$query=mysql_query("select * from user");
			while ($row=mysql_fetch_array($query)) {
				$no++;
		?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nama_pengguna']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo "<a href='edit.php?id=$row[id]'>Edit</a>"?></td>
					<td><?php echo "<a href='hapus.php?id=$row[id]'>Hapus</a>"?></td>
				</tr>
				<?php } ?>
		</table>
	</body>
</html>