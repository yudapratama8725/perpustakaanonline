<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
	body
	{

		font-family: arial; 
	}
	.bawah
	{
		height: 700px;
	}
	.loginBox
	{
		position: absolute;
		left: 32%;
		width: 500px;
		height: 480px;
		padding: 80px 40px;
		border-radius: 5px;
		box-sizing: border-box;
		background: rgba(0,0,0,.7);
	}
	.alert{
		margin-left: 120px;
		margin-right: 120px;
		margin-bottom: 0px;
	}
	.user
	{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		border-radius: hidden;
		position: absolute;
		top: calc(-100px/2);
		left: calc(50% - 50px);
	}
	h5
	{
		margin: 0;
		padding: 0 0 20px;
		color: #efed40;
		text-align: center;
	}
	.loginBox p
	{
		margin: 0;
		padding: 0;font-weight: bold;
		color:  white;
	}
	.loginBox input
	{
		width: 100%;
		margin-bottom: 20px;
	}
	.loginBox input[type="Text"],
	.loginBox input[type="Password"]
	{
		border: none;
		border-bottom: 1px solid #efed40;
		background: transparent;
		outline: none;
		height: 40px;
		color:  #efed40;
		font-size: 16px;
	}
	::placeholder
	{
	color: rgba(255,255,255,.5);
	}
	.loginBox input[type="submit"]
	{
		border: none;
		outline: none;
		height: 40px;
		color:  white;
		font-size: 16px;
		background: #5228ad;
		cursor: pointer;
		border-radius: 20px;
	}
	.loginBox input[type="submit"]:hover
	{
		transition: 0.2s;
		background: #ff267e;
		color: #fff;
	}
	.loginBox input[type="reset"]
	{
		border: none;
		outline: none;
		height: 40px;
		color:  white;
		font-size: 16px;
		background: #efed40;
		cursor: pointer;
		border-radius: 20px;
	}
	.loginBox input[type="reset"]:hover
	{
		transition: 0.2s;
		background: #ff267e;
		color: #fff;
	}
	.loginBox a{
		color: #fff;
		font-size: 14px;
		font-weight: bold;
		text-decoration: none;
	}
	.loginBox a:hover{
	color: #efed40;
	text-decoration: none;
	}
	</style>
</head>
<body>
	<section>
	<div class="alert">
		<div class="alert alert-info">
    		<strong>Info</strong> Silahkan Login Terlebih Dahulu Agar Dapat Mengisi Form Peminjaman Buku Jika Belum Mempunyai Akun Silahkan Daftar Untuk User Selanjutnya Anda Akan Mendapatkan Username Dan Password Agar Dapat Login
  		</div>
	</div>
  	 	<h2 align="center"><font color="black">FORM LOGIN PEMINJAMAN BUKU</h2>
  		<br><br>
		<div class="loginBox">
			<img src="img/usericon.png" class="user">
			<h5>Form Login</h5>
				<form method="POST" action="proseslogin.php">
					<p>Username</p>
						<input type="text" name="us" placeholder="Input Username">
					<p>Password</p>
						<input type="Password" name="pas" placeholder="Input Password">
					<input type="submit" name="login" value="Login">
					<input type="reset" name="batal" value="Batal">
					<a href="daftaruser.php">Daftar User |</a><a href="peminjamanbuku.php">|  Kembali</a>
				</form>
			</div>
		</div>
	</section>
</body>
</html>