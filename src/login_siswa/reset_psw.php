<?php session_start() ;
include('connect/connection.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/resetpw.css?=time();?>">

    <link href="../login_siswa/dist/img/logo.png" rel="icon"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Perbarui Password || PPDB 013</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
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
                    <a class="nav-link" href="index.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Perbarui Password Anda</div>
                    <div class="card-body">
                    <form action="#" method="POST" name="login">
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password Baru</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" autofocus>
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                                <div id="password-error" class="text-danger"></div> <!-- Menampilkan pesan kesalahan -->
                            </div>
                        </div>
                                <script>
                                    document.getElementById("password").addEventListener("input", function () {
                                        var password = this.value;
                                        var togglePassword = document.getElementById("togglePassword");
                                        
                                        if (password.length < 6) {
                                            // Tambahkan pesan kesalahan jika kurang dari 6 karakter
                                            this.setCustomValidity("Password harus memiliki setidaknya 6 karakter");
                                            togglePassword.style.display = "none"; // Sembunyikan ikon mata
                                        } else {
                                            // Hapus pesan kesalahan jika valid
                                            this.setCustomValidity("");
                                            togglePassword.style.display = "block"; // Tampilkan ikon mata
                                        }
                                    });
                                </script>

                        <div class="col-md-6 offset-md-4">
                            <input type="submit" value="Reset" name="reset" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    if(isset($_POST["reset"])){
        include('connect/connection.php');
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $Email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($connect, "SELECT * FROM login_siswa WHERE email='$Email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $hash;
            mysqli_query($connect, "UPDATE login_siswa SET password='$new_pass' WHERE email='$Email'");
            ?>
            <script>
                window.location.replace("index.php");
                alert("<?php echo "Kata Sandi Anda Telah Berhasil di Ubah"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Silakan Coba Lagi"?>");
            </script>
            <?php
        }
    }

?>
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>
