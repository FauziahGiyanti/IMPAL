<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

  <div class="container">
  	<form action="masuk.php" method="POST">
      <div class="isi">
        <h2 id="login-texxt">Login</h2>
        <label for="usn"><b>Username</b></label>
        <input type="text" placeholder="Masukkan Username" name="usn" required>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="psw" required>
        <br>
        <button type="submit" class="btn btn-success">Login</button>
        <br>
        <span class="pull-right">
          <a href="#" >Forget password ? </a> 
       </span>
        <span class="daftar"><a href="daftar.php">Daftar</a></span>
      </div>
    </form>
  </div>
</form> 
</body>
</html>