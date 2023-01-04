<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
	<meta http-equiv="content-Type" content="text/html;
	charset=iso-8859-1">
	<style type="text/css">
		<!--
		table {
		}
		input {
		}
		-->
		font-family: verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		font-family: verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		height: 20px;
	</style>
</head>
<body>
<div align="center">
	<form action="cek_login.php" method="post" name="login">
		<table width="286" border="0" cellpading="0" cellspacing="0">
			<!--DWLayoutTable-->
			<tr bgcolor="#ff6633">
				<td height="19" colspan="2" align="center" valign="middle">
					<font color="#ffffff">LOGIN DI SINI</font>
				</td>
			</tr>
			<tr>
				<td width="106" height="27">&nbsp;</td>
				<td width="106">&nbsp;</td>
			</tr>
			<tr>
				<td height="18" align="right" valign="middle">Username :&nbsp;</td>
				<td valign="middle">
					<input type="text" name="username" id="username" size="20">
				</td>
				<tr>
					<td height="18" align="right" valign="middle">Password :&nbsp;</td>
				<td valign="middle">
					<input type="password" name="password" id="password" size="20">
				</td>
				</tr>
				<tr>
					<td height="19">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td height="18" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
					<td valign="middle">
					<input type="submit" name="login" id="login" value="login">
					<a href="daftar_user.php">Daftar</a></td>	
				</tr>
				<tr>
					<td height="28">&nbsp;</td>
					<td></td>
				</tr>
				<tr bgcolor="#ff6633">
					<td height="18" colspan="2" valign="top"><!--DWLayoutEmptyCell-->
				</tr>
		</table>
	</form>
</div>
</body>
</html>