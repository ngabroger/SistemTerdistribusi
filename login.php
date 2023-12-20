<?php 
include ("bootstrap/header.php");

?>
<link rel="stylesheet" href="style/login.css">

<div class="container">
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
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
        </div>
        <div style="margin-top: -13px;" class="text-end">
            <a href="#" class="textForm text-hover">Lupa Password?</a>
        </div>
        <div class="d-grid mt-5">
        <button type="submit" class="btn btn-outline-primary textForm">Masuk</button>
        </div>
        <div class="mt-1">
            <span class="textForm ">Gk punya akun ya?  <a href="register.html" class="textForm text-hover">daftar yuk</a></span>
        </div>
      </form>
</div>



<?php 
include ("bootstrap/footer.php");
?>