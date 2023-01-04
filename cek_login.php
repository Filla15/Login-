<?php
	session_start();
	include "koneksi.php";
	#jika ditekan tombol login
	if(isset($_POST['login'])) {
		$username= $_POST['username'];
		$password = md5($_POST['password']);
		$sql = mysql_query("SELECT * FROM user WHERE username='$username' && password='$password'");
		$num = mysql_num_rows($sql);
		if($num==1) {
			//login benar //
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		?>
		<script languange="JavaScript">alert('Anda berhasil login');
	document.location='tampil_login.php'</script>
	<?php
		} else {
			//jika login salah
			?>
			<script languange="JavaScript">alert('Username atau Password anda salah');
	document.location='login.php'</script>
	<?php
		}
	}
?>