<?php 
		$nama_pengguna =$_POST['Nama'];
		$username   =$_POST['username'];
		$password  =$_POST['password'];
		
	include('koneksi.php');
	$simpan = mysql_query("INSERT INTO user VALUES (null,'$nama_pengguna','$username',md5('$password'))");
	header('location:daftar_user.php');



 ?>