<!DOCTYPE html>
<html>
<head>
	<!-- Judul halaman web -->
	<title>Rental</title>
	
	<!-- Link external css dan js bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4b35cfdbc8.js" crossorigin="anonymous"></script>
    
	<!-- Link costum external css-->
	<link rel="stylesheet" href="css/style.css">
  
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#daftar').modal({backdrop: 'static', keyboard: false});
    });
  </script>

</head>

<body class="banner">

<!-- Trigger modal -->

<!-- Modal -->
<div class="modal " id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Daftar Akun</h5>
        <button type="button" class="close" aria-label="Close">
          <a href="index.php" style="text-decoration: none"><span aria-hidden="true">×</span></a>
        </button>
      </div>
      <div class="modal-body">
      <center><img src="pic/logo.png" alt="logo" style="width:auto;height:130px;"></center> <br>
      <center>Silakan isi data di bawah ini dengan informasi yang jujur dan akurat.</center>
      <div class="container">
        <div class="row">
          <div class="col-xl-6" style="padding : 0px 0px 0px 60px">
          <form action="" method="post">
          <br>
            <center><i class="fas fa-user-circle fa-lg" style="padding-right : 10px"></i><input type="text" size="30" name="nama" placeholder="  Nama Lengkap"></center><br>
            <center><i class="fas fa-phone fa-lg" style="padding-right : 10px"></i><input type="text" size="30" name="no" placeholder="  Nomor Telepon"></center><br>
            <center><i class="fas fa-envelope fa-lg" style="padding-right : 10px"></i><input type="email" size="30" name="email" placeholder="  Alamat E-mail"></center>
          </div>
          <div class="col-xl-6" style="padding : 0px 60px 0px 0px">
          <br>
            <center><i class="fas fa-user fa-lg" style="padding-right : 10px"></i><input type="text" size="30" name="username" placeholder="  Nama Pengguna"></center><br>
            <center><i class="fas fa-lock fa-lg" style="padding-right : 10px"></i><input type="password" size="30" name="password" placeholder="  Kata Sandi"></center><br>
            <center><i class="fas fa-lock fa-lg" style="padding-right : 10px"></i><input type="password" size="30" name="confirm_pass" placeholder="  Konfirmasi Kata Sandi"></center>
          </div>
          <div class="col-xl-12" style="padding : 0px 60px 0px 60px">
          <br>
            <center><input type="checkbox" name="check" value="true"> Saya setuju dengan Syarat dan Ketentuan</center>
          </div>
          </form>
        </div>
      </div>
      </div>
      <div class="modal-footer ">
        <div class="pull-left mr-auto"> 
          <a href="masuk.php">Sudah punya akun? Masuk</a>
        </div>
        <button type="button" class="btn btn-primary">Daftar</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>