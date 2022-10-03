<?php
/*
    Fresabayu Anggoro
    203040137
    Senin 9.40
    Praktikum PW
    https://github.com/fresaaaaa/prakweb_c_203040137
*/



session_start();

require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.localtion.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.localtion.href = 'admin.php';
                </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .kotak {
            border: 1px solid #cecece;
            border-radius: 3px;
            padding: 3px 10px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            color: white;
            background-color: red;
        }

        .kotak {
            border: 1px solid #b1b1b1;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <h3>form tambah data buku</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">gambar :</label><br>
                <input type="file" name="gambar" id="gambar" required><br><br>
            </li>
            <li>
                <label for="Judul">Judul :</label><br>
                <input type="text" name="Judul" id="Judul" required><br><br>
            </li>
            <li>
                <label for="Pengarang">Pengarang :</label><br>
                <input type="text" name="Pengarang" id="Pengarang" required><br><br>
            </li>
            <li>
                <label for="Terbit">Terbit :</label><br>
                <input type="date" name="Terbit" id="Terbit" required><br><br>
            </li>
            <li>
                <label for="Dimensi">Dimensi :</label><br>
                <input type="text" name="Dimensi" id="Dimensi" required><br><br>
            </li>
            <li>
                <label for="ISBN">ISBN :</label><br>
                <input type="text" name="ISBN" id="ISBN" required><br><br>
            </li>
            <br>
            <button class="kotak" type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none;" class="kotak">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>