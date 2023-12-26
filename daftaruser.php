<!DOCTYPE html>
<html>
<head>
	<title>Halaman Daftar User</title>
	<style type="text/css">
	body
	{

		font-family: arial;
		background: #f8f8f8;
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
		height: 610px;
		padding: 80px 40px;
		border-radius: 5px;
		box-sizing: border-box;
		background: rgba(0,0,0,.7);
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
		font-size: 20px;
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
	.loginBox input[type="Password"],
	.loginBox input[type="number"]
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
  		<br><br><br><br>
		<div class="loginBox">
			<img src="img/usericon.png" class="user">
			<h5>Daftar User</h5>
				<form method="POST" action="prosesdaftaruser.php">
					<p>Email</p>
						<input type="text" name="email" placeholder="Input EMAIL" required>
					<p>Nama lengkap</p>
						<input type="text" name="namalengkap" placeholder="Input Nama Lengkap" required>
					<p>Alamat</p>
						<input type="text" name="alamat" placeholder="Input Alamat" required>
					<p>Telp</p>
						<input type="number" name="telp" placeholder="Input Telp" required>
					<input type="submit" name="simpan" value="Simpan">
					<input type="reset" name="batal" value="Batal">
					<a href="loginawal.php">Kembali</a>
				</form>
			</div>
		</div>
	</section>
	
</body>
</html>