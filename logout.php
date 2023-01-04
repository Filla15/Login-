<? 
	SESSION_START();
	//periksa apakah user telah login atau memiliki session
	if(!isset $_session["username"]) || !isset($_session["password"])) {
		?> <script languange="JavaScript">document.location="login.php"	
		</script><?
	} else {
		unset($_session);
		session_destroy();
		?> <script languange="JavaScript"> document.location="tampil_login.php"</script><?
	}
?>
