<?php session_start(); ?>
<?php
include('connect/connection.php');

if (isset($_POST["register"])) {
    $nama_pendek = $_POST["nama_pendek"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nik = $_POST["nik"];

    $check_email_query = mysqli_query($connect, "SELECT * FROM login_siswa WHERE email ='$email'");
    $rowCountEmail = mysqli_num_rows($check_email_query);

    $check_nik_query = mysqli_query($connect, "SELECT * FROM login_siswa WHERE nik ='$nik'");
    $rowCountNik = mysqli_num_rows($check_nik_query);

    if (!empty($email) && !empty($password)) {
        if ($rowCountEmail > 0) {
?>
            <script>
                alert("Pengguna Dengan Email Tersebut Sudah Ada!");
            </script>
        <?php
        } elseif ($rowCountNik > 0) {
        ?>
            <script>
                alert("NIK Sudah Didaftarkan!");
            </script>
            <?php
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $result = mysqli_query($connect, "INSERT INTO login_siswa (email, nik, nama_pendek, password, status) VALUES ('$email', '$nik', '$nama_pendek', '$password_hash', 0)");

            if ($result) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $email;
                require "Mail/phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';

                $mail->Username = '013sdntanjungpinangbarat@gmail.com';
                $mail->Password = 'abzrczsogizfdwtc';

                $mail->setFrom('013sdntanjungpinangbarat@gmail.com', 'Registrasi Berhasil');
                $mail->addAddress($_POST["email"]);

                $mail->isHTML(true);
                $mail->Subject = "Verifikasi Akun Anda!";
                $mail->Body = "<p>Selamat datang di SD Negeri 013 Tanjungpinang Barat!<br> Terimakasih telah melakukan pendaftaran akun PPDB SD Negeri 013 Tanjungpinang Barat. <br> Berikut Ini Adalah Kode OTP Untuk Verifikasi Akun Anda: </p> <h3>Kode OTP: $otp</h3>";

                if (!$mail->send()) {
            ?>
                    <script>
                        alert("<?php echo "Registerasi Gagal, Email Tidak Valid" ?>");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("<?php echo "Registerasi Berhasil, Kode OTP Telah Dikirim! " ?>");
                        window.location.replace('verification.php');
                    </script>
<?php
                }
            }
        }
    }
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="CSS/register.css?=time();?>">
    <link href="../login_siswa/dist/img/logo.png" rel="icon" />

    <link href="/assets/img/logo.png" rel="icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Regitrasi || PPDB 013</title>

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
                        <div class="card-header">Registrasi</div>
                        <div class="card-body">
                            <form action="#" method="POST" name="register">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nama_siswa" class="form-control" name="nama_pendek" required placeholder="Masukkan Username Siswa">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nik" class="form-control" name="nik" required placeholder="Masukkan NIK anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Alamat E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required placeholder="Masukkan Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6" style="position: relative;">
                                        <input type="password" id="password" class="form-control" name="password" required placeholder="Masukkan Password">
                                        <i class="bi bi-eye-slash" id="togglePassword" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById("password").addEventListener("input", function() {
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
                                    <input type="submit" value="Register" name="register" class="btn btn-primary">
                                </div>
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
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function() {
        if (password.type === "password") {
            password.type = 'text';
        } else {
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>