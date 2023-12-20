<?php 
    include('bootstrap/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <section>
        <section>
            <form action="" class="form-container">
                <h4 class="textJudul mb-5 mt-2">Register</h4>
                <!-- Form -->
                <div class="mb-3" >
                <label for="username" class="form-label textForm">Username</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" class="basic-addon1"><i class="bi bi-person-circle"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Username" >
                </div>
            </div>
            
            <div class="mb-3" >
                <label for="email" class="form-label textForm">Email</label>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="basic-addon1" >@</span>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                </div>

                <div class="mb-3" >
                <label for="password" class="form-label textForm">Password</label>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                </div>

                <a href="login.php" class="btn btn-outline-primary">Back</a>
                <button type="submit" name="sesuai operasi ya el" class="btn btn-primary">Regist</button>
                <div class="form-footer mt-2">
                        <p> Sudah Punya Account ? <a href="login.php">Login</a></p>
                </div>
            </form>
        </section>
    </section>
</body>

<?php  
    include('bootstrap/footer.php');
?>
</html>