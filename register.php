<?php 
    include('bootstrap/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="Icon" href="image/login-icon.png" type="image/x-icon">
</head>

<body>
    <section>
        <section>
            <form action="proses/proses_regis.php" class="form-container" method="POST">
                <h4 class="textJudul mb-3 mt-2">Register</h4>
                <!-- Form -->
                <div class="mb-3">
                    <label for="username" class="form-label textForm">Username</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" class="basic-addon1"><i class="bi bi-person-circle"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label textForm">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label textForm">Password</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>

              
                <button type="submit" name="submit" class="btn btn-outline-primary ps-5 pe-5 ">Register</button>
                <div class="form-footer mt-2">
                    <p> Sudah Punya Account ? <a href="index.php">Login</a></p>
                </div>
            </form>
        </section>
    </section>
</body>

<?php  
    include('bootstrap/footer.php');
?>

</html>