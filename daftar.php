<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

  <div class="container">
  	<form action="signup.php" class="signup-form" method="POST">
      <div class="isi">
        <h2 id="login-texxt">Silahkan Daftar Terlebih Dahulu</h2>
        <label for="nama"><b>Nama Lengkap</b></label>
        <input type="text" placeholder="Masukkan Nama Lengkap" name="nama" required>
        <label for="tgl"><b>Tempat tanggal lahir</b></label>
        <input type="text" placeholder="Masukkan tanggal lahir" name="tgl" required>
        <br>
        <label for="jkl"><b>Jenis kelamin</b></label>
        <input type="text" placeholder="Masukkan jenis kelamin" name="jkl" required>
        <label for="usn"><b>Username</b></label>
        <input type="text" placeholder="Masukkan Username" name="usn" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="psw" required>
        <label for="eml"><b>Email Address</b></label>
        <input type="text" placeholder="Masukkan Email Address" name="eml" required>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <span class="daftar"><a href="login.php">Login</a></span>
      </div>
    </form>
  </div>
</form> 
</body>
</html>