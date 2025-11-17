<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingpage</title>
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
    <!-- jumbotron -->
     <div class="sugeng">
        <h1 class="display-4" style="font-weight: bold;">Welcome to Celebrity Fitness</h1>
        <p class="lead">Tubuh Bugar adalah Bagian dari Iman</p>
        <a href="login.php" class="btn btn-primary btn-lg mt-3">Gas Join</a>
    </div>
    <!-- konten -->
    <section id="organisasi" class="my-5">
        <div class="text-center mb-4">
            <h2 style="font-weight: bold;">FASILITAS MENARIK</h2>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <div class="card" style="width: 18rem;">
            <img src="member.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Join Membership</h5>
                <p class="card-text">Manfaat utama dari keanggotaan Celebrity Fitness adalah akses tak terbatas ke fasilitas gym premium, berbagai kelas kebugaran yang inovatif dan menyenangkan.</p>
                <a href="https://www.celebrityfitness.com/id/en/membership#plan2" class="btn btn-primary">Join</a>
            </div>
            </div>

            <div class="card" style="width: 18rem;">
            <img src="pt.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Personal Tariner</h5>
                <p class="card-text">Pelatih bersertifikat internasional yang merancang program latihan khusus, memberikan umpan balik personal, dan memastikan Anda berlatih dengan teknik yang tepat dan aman untuk mencapai target kebugaran Anda.</p>
                <a href="https://www.celebrityfitness.com/id/en/personal-training" class="btn btn-primary">Join</a>
            </div>
            </div>

            <div class="card" style="width: 18rem;">
            <img src="kelas.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kelas Gym</h5>
                <p class="card-text">Ragam kelas kebugaran inovatif dan menyenangkan, termasuk program Signature dan LesMills, yang dipandu oleh StarMaker Instructor tersertifikasi untuk menjadikan olahraga lebih seru dan dinamis.</p>
                <a href="https://www.celebrityfitness.com/id/en/classes" class="btn btn-primary">Join</a>
            </div>
            </div>

            <div class="card" style="width: 18rem;">
            <img src="karir.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Partner Karir Gym</h5>
                <p class="card-text">Kesempatan untuk bergabung sebagai StarMaker (termasuk Personal Trainer dan posisi lainnya) dalam lingkungan kerja yang positif, suportif, dan fokus pada pertumbuhan bersama, dengan benefit seperti keanggotaan gym gratis.</p>
                <a href="https://www.celebrityfitness.com/id/en/careers" class="btn btn-primary">Join</a>
            </div>
            </div>
        </div>
    </section>
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