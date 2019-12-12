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
	
</head>

<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk">
  Masuk
</button>

<!-- Modal -->
<div class="modal " id="masuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
      <form action="" method="post">
        <br>
        <center><i class="fas fa-user fa-lg" style="padding-right : 10px"></i><input type="text" size="30" name="username" placeholder="  Nama Pengguna"></center><br>
        <center><i class="fas fa-lock fa-lg" style="padding-right : 10px"></i><input type="password" size="30" name="password" placeholder="  Kata Sandi"></center><br>
        
      </form>
      </div>
      </div>
      <div class="modal-footer">
        <div class="pull-left mr-auto"> 
          <a data-dismiss="modal" data-toggle="modal" href="#daftar">Lupa Kata Sandi</a>
        </div>
        <button type="button" class="btn btn-primary">Masuk</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>