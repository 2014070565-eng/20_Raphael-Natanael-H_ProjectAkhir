<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data</title>
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
                    <a class="nav-link btn btn-outline-primary me-2" href="tambah.php">Input Data</a>
                    <a class="nav-link btn btn-outline-primary me-2" href="tampildata.php">Tampil Data</a>
                    <a class="nav-link btn btn-outline-primary" href="landingpage.php" style="
    background-color: black !important;
    color: var(--color-bg) !important; /* Teks Putih */
    border: 2px solid var(--color-primary);
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 700 !important;
    text-transform: uppercase;
    margin-left: 16px; 
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55); ">Log out</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- form -->
    <form class="inputdata" method="post" action="tambah_aksi.php">
            <h3 style="text-align: center; font-weight: 800; font-size: 28px;"><b>Form Input</b></h3>
            <table>
                <tr>
                    <td>
                        <label>Nama Alat</label>
                    </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="text" name="nama_alat" placeholder="Masukkan Nama Alat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kode Alat</label>
                    </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="text" name="kode_alat" placeholder="Masukkan Kode Alat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tanggal Dibuat</label>
                    </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="date" name="tanggal_dibuat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jumlah Alat</label>
                    </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="number" name="jumlah_alat" placeholder="Masukkan Jumlah Alat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Baru/Bekas</label>
                    </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="radio" name="secbaru" value="Baru" required> Baru
                        <input type="radio" name="secbaru" value="Bekas"> Bekas
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Asal Alat</label>
                       </td>
                    <td>
                        <label> : </label>
                    </td>
                    <td>
                        <input type="text" name="asal_alat" placeholder="Masukkan Asal Alat" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <input type="submit" name="SIMPAN" value="INPUT">
                    </td>
                </tr>
            </table>
    </form>
    <br><br>
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