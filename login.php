<!DOCTYPE html>

<title>Login | Web Galeri Foto</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="bg-login">
     <div class="box-login">
         <h2>Login</h2>
         <form action="" method="POST">
             <input type="text" name="user" placeholder="Username" class="input-control">
             <input type="password" name="pass" placeholder="Password" class="input-control">
             <input type="submit" name="submit" value="Login" class="btn">
         </form>
         <?php
		     if(isset($_POST['submit']))
				 session_start();
				 include 'koneksi.php';

				 $user = mysqli_real_escape_string($conn, $_POST['user']);
				 $pass = mysqli_real_escape_string($conn, $_POST['pass']);
				 
				 $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."'AND password ='".$pass."'");
				 if(mysqli_num_rows($cek) > 0){
					 $d = mysqli_fetch_object($cek);
					 $_SESSION['status_login'] = true;
					 $_SESSION['a_global'] = $d;
					 $_SESSION['id'] = $d->admin_id;
					 
			 }
	     ?><br/>
         <p>Belum punya akun? daftar <a style="color:#00C;" href="registrasi.php">DISINI</a></p>
         <p>atau klik <a style="color:#00C;" href="index.php">Kembali</a></p>
      </div>
      
</body>
</html>