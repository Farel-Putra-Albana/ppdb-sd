<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="CSS/index.css?= time(); ?>">
    <link href="/assets/img/logo.png" rel="icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Bootstrap JS and Popper.js (jQuery is usually required) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo" class="logo">
            <span class="d-inline d-md-none">PPDB SD Negeri 013</span>
            <span class="d-none d-md-inline">Aplikasi SDN 013 Tanjungpinang Barat</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verification.php">Masukkan OTP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="#" method="POST" name="login">
                            <div class="form-group row">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                                <div class="col-md-6">
                                    <input type="text" id="nik" class="form-control" name="nik" required placeholder="Masukkan NIK">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6" style="position: relative;">
                                    <input type="password" id="password" class="form-control" name="password" required placeholder="Masukkan Password">
                                    <i class="bi bi-eye-slash" id="togglePassword" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input type="submit" value="Login" name="login" class="btn btn-primary btn-block">
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <a href="register.php" class="btn btn-primary btn-block" style="text-decoration: none;">Register</a>
                                </div>
                            </div>
                            <a href="recover_psw.php" class="btn btn-link btn-block" style="text-decoration: none;">Dapatkan Password Baru?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    let isPasswordVisible = false;

    toggle.addEventListener('click', function() {
        isPasswordVisible = !isPasswordVisible;
        password.type = isPasswordVisible ? 'text' : 'password';
        this.classList.toggle('bi-eye', isPasswordVisible);
        this.classList.toggle('bi-eye-slash', !isPasswordVisible);
    });
</script>

</body>
</html>
