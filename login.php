<?php 
include ("bootstrap/header.php");

?>
<title>Login</title>
<link rel="stylesheet" href="style/login.css">
<link rel="Icon" href="image/login-icon.png" type="image/x-icon">

<div class="testing">
    <form class="form-container">
        <h3 class="textJudul mb-5 mt-2">Masuk</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">E-mail</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan E-mail">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Password</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
        </div>

        <div class="d-grid mt-3">
        <button type="submit" class="btn btn-outline-primary textForm">Masuk</button>
        </div>
        <div class="mt-4">
            <span class="textForm ">Gk punya akun ya?  <a href="register.php" class="textForm text-hover text-danger">daftar yuk</a></span>
        </div>
      </form>
</div>



<?php 
include ("bootstrap/footer.php");
?>