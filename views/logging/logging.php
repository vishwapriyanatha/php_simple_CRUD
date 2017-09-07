<html>
<head>

</head>
<body>
<?php 
include '../../index.php';
?>
	<form action="../../controller/logging.php" method="POST" name="StudentRegistration">

		<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
		cellspacing="2">

		<tr>
			<td colspan=2>
				<center><font size=4><b>Logging</b></font></center>
			</td>
		</tr>

		<tr>
		<td>User Name</td>
			<td><input type="text" name="username" id="username" size="20"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" id="pwd" size="20"></td>
		</tr>
		<tr>
			<td><input type="reset"></td>
			<td colspan="2"><input type="submit" value="Logging" /></td>
		</tr>

	</table>
</form>
</body>
</html>