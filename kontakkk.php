<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kk.css">
    <title>Travelinkk</title>
    <link rel="icon" href="trav.jpeg">
</head>
<body>
        <script src="script.js"></script>
        <script src="container.js"></script> 
        <div id="container">
        <header id="header">
            <h1 class="hw1">Selamat Datang di Website TRAVELINK</h1>
            <p class="haha">Travelink Siap Menemani Liburan Wisata Anda</p>
        </header>

        <script src="header.js"></script>
        <nav>
            <ul>
                <li><a href="home.html">Halaman Utama</a></li>
                <li><a href="destinasiii.html">Destinasi</a></li>
                <li><a href="index.html">Sejarah</a></li>
            </ul>
        </nav>

        <section class="contact-us">    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-row">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-row">
                    <label for="tgl">Tanggal Keberangkatan:</label>
                    <input type="date" name="tgl">
                </div>

                <div class="form-row">
                    <label for="kota">Destinasi Tujuan :</label>
                    <select name="kota">
                        <option>Pantai Gili</option>
                        <option>Kepulauan Wakatobi</option>
                        <option>Pantai Kuta</option>
                        <option>Pulau Komodo</option>
                        <option>Gunung Bromo</option>
                        <option>Kepulauan Raja Ampat</option>
                        <option>Candi Borobudur</option>    
                        <option>Danau Sentani</option>
                    </select>
                </div>

                <div class="form-row">
                    <label for="notelp">No Telepon</label>
                    <input type="text" name="notelp">
                </div>

                <div class="form-row">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="form-row">
                    <label for="foto">Bukti Pembayaran:</label>
                    <input type="file" name="foto"><br>
                </div>

                <div class="form-row">
                    <button type="submit" name="submit">Kirim Pesan</button>
                </div>
            </form>
        </section><br>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include("koneksi.php");

            $name = $_POST['name'];
            $email = $_POST['email'];
            $tgl = $_POST['tgl'];
            $kota = $_POST['kota'];
            $notelp = $_POST['notelp'];
            $message = $_POST['message']; 

            // Mengambil informasi file gambar
            $gambar = $_FILES['foto']['name'];
            $file_tmp = $_FILES['foto']['tmp_name'];

            // Memindahkan file ke folder gambar/
            if (!empty($gambar)) {
                move_uploaded_file($file_tmp, 'gambar/'.$gambar);

                // Query untuk menyimpan data ke database
                $query = "INSERT INTO contacts (name, email, tgl, kota, notelp, message, foto) 
                          VALUES ('$name', '$email', '$tgl', '$kota', '$notelp', '$message', '$gambar')";

                if (mysqli_query($conn, $query)) {
                    echo "<p>Data berhasil disimpan.</p>";
                } else {
                    echo "<p>Error: " . mysqli_error($conn) . "</p>";
                }
            } else {
                echo "<b>Gambar belum dipilih.</b>";
            }
        }
        ?>

        <footer class="hoho">
            <p>&copy; 2024 Steven Wijaya (231011700272) 03SIFP005</p>
        </footer>

        
</body>
</html>
