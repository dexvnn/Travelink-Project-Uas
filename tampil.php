<?php
include("koneksi.php");
$query = "SELECT * FROM contacts";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengisian Form</title>
    <link rel="stylesheet" href="tampil.css">
</head>
<body>
    <h1>Hasil Pengisian Form</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal Keberangkatan</th>
            <th>Destinasi Tujuan</th>
            <th>No Telepon</th>
            <th>Pesan</th>
            <th>Bukti Pembayaran</th>
        </tr>

        <?php
        while ($baris = mysqli_fetch_array($result)) {
            $foto = $baris['foto'];  // Ambil nama file gambar
            echo "<tr>
                    <td>{$baris['name']}</td>
                    <td>{$baris['email']}</td>
                    <td>{$baris['tgl']}</td>
                    <td>{$baris['kota']}</td>
                    <td>{$baris['notelp']}</td>
                    <td>{$baris['message']}</td>
                    <td>";
            if (!empty($foto)) {
                echo "<img src='gambar/$foto' width='100' height='100'>";
            } else {
                echo "No image";
            }
            echo "</td></tr>";
        }
        ?>
    </table>
</body>
</html>
