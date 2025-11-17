<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: tambah.php");
    } else {
        echo "<script>alert('Username atau password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="desain.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to right, #e0f7fa, #fff3e0);">
    <!-- navbar -->
    <div class="andrew">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-family: 'Times New Roman', Times, serif;">
            <div class="container-fluid">
                <a class="navbar-brand" href="landingpage.php"><img src="gymlogo.png" alt="Logo" style="height: 50px;"></a>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link btn btn-outline-primary me-2" href="landingpage.php">Landing Page</a>
                    <a class="nav-link btn btn-outline-primary me-2" href="aboutus.php">About Us</a>
                    <a class="nav-link btn btn-outline-primary" href="login.php" style="background-color:black !important;">Log In</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- login -->
    <div class="sutantti">
        <h2>Login Form</h2>
        <form method="post">
            <fieldset>
                <table>
                    <tr>
                        <td>
                            <label>Username </label>
                        </td>
                        <td>
                            <label> : </label>
                        </td>
                        <td>
                            <input type="text" name="username" placeholder="Masukkan Username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password </label>
                        </td>
                        <td>
                            <label> : </label>
                        </td>
                        <td>
                            <input type="password" name="password" placeholder="Masukkan Password" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <input type="submit" name="login" value="LOGIN">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p>Register Akun <a href="register.php">Daftar di sini</a></p>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form> 
    </div>
    <!-- Footer -->
     <div class="mincang">
      <footer class="bg-clay text-center footer-main">
        <div class="container">
            <!-- Section 1: Tagline -->
            <div class="row align-items-center justify-content-center mb-4">
                <div class="col-md-12">
                    <p class="footer-tagline">
                        FITNAH ITU KEJAM, FITNESS ITU KEJIM!
                        <br>
                        AYO JOIN CELEBRITY FITNESS SEKARANG JUGA!
                    </p>
                </div>
            </div>
            
            <!-- Section 2: Navigation Links -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-12">
                    <a href="register.php" class="footer-link me-4">Mari Bergabung</a>
                    <a href="aboutus.php" class="footer-link">Hubungi & Informasi</a>
                </div>
            </div>
            
            <!-- Section 3: Copyright -->
            <div class="row justify-content-center footer-copyright-section">
                <div class="col-md-12">
                    <p class="footer-copyright">
                        Copyright © 2025 Celebrity Fitness I Award Winning Fitness Chain in South East Asia.<br>
                        All Rights reserved. Terms & Conditions | Club Rules | Privacy Policy
                    </p>
                </div>
            </div>
        </div>
      </footer>
    </div>
</body>
</html>