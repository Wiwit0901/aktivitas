<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
		<div class="coverBg"></div>
		<br>
		<br>
		<br>
		<h1 align="center"> MONITORING AKTIVITAS PESERTA DIDIK SMK WIKRAMA BOGOR</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<div class="Login"></div>
		<div class="login"></div>
	


	<?php
include "config/koneksi.php";
session_start();
	if (isset($_POST['login'])){
		$sql = mysqli_query($con,"SELECT * FROM  tb_login where username = '$_POST[username]'and password ='$_POST[password]'");
		$cek = mysqli_num_rows($sql);
		if ($cek>0){
			$_SESSION['username'] = $_POST['username'];
			echo "<script>alert('Selamat Datang');document.location.href='menu.php'</script>";
	}else{
			echo "<script>alert('Username atau Password salah');document.location.href='login.php'</script>";
		}
	}


?>
	<form method = "post">
		<table align="center">
			<tr>
				<td>
					Username
				</td>
				<td>
				<input type = "text" name = "username">
			</td>
			</tr>
		<tr>
				<td>
					Password
				</td>
				<td>
				<input type = "password" name = "password">
			</td>
			</tr>
		<tr>
			<td></td>
			<td>

				<?php
					if (isset($_GET['edit'])){
					?>
					<input type="submit" name="update" value="Update">
					<a href="login.php"> batal </a>

					<?php }else{ ?>

						<input type="submit" name="login" value="Login">
						<input type="submit" name="Register" value="Register">

					<?php } ?>

	</td>
</tr> 
</table>
		</form>	

</div>
</div>
</div>
</div>
</body>
</html>