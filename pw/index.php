<?php
/*
    Fresabayu Anggoro
    203040137
    Senin 9.40
    Praktikum PW
    https://github.com/fresaaaaa/prakweb_c_203040137
*/
?>

<?php
session_start();

// Menghubungkan dengan file phplainnya
require 'function.php';
// Melakukan query dari database
$book = query("SELECT * FROM buku");


//ketika tombol cari di klik
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $book = query("SELECT * FROM buku
          WHERE
    Judul LIKE '%$keyword%' OR
    Pengarang LIKE '%$keyword%' OR
    Terbit LIKE '%$keyword%' OR
    Dimensi LIKE '%$keyword%' OR
    ISBN LIKE '%$keyword%' 
    ");
} else {
    $book = query("SELECT * FROM buku");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-Book IF UNPAS</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            background-color: skyblue;
            margin: 50px;
            padding: 25px;
        }

        .kotak {
            border: 1px solid #cecece;
            border-radius: 3px;

            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            color: white;
            background-color: red;
            border-radius: 10px;
        }

        .kotak:hover {
            border: 1px solid #b1b1b1;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Buku</h2>
        <div class="add">
            <a href="tambah.php"><button class="kotak"> Tambah Data </button></a>
            <br><br>
            <form action="" method="get" style="float: left;" class="form">
                <input type="text" name="keyword" size="30" placeholder="Cari Di sini!" autocomplete="off" autofocus>
                <button type="submit" name="cari" class="btn btn-outline-success rounded-pill">Cari!</button>
            </form><br><br>
        </div>

        <table border="1" cellpadding="15" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Terbit</th>
                <th>Dimensi</th>
                <th>ISBN</th>
            </tr>

            <?php if (empty($book)) : ?>
                <tr>
                    <td colspan="8">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($book as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row['id']; ?>"><button class="kotak">Ubah</button></a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="kotak">Hapus</button></a>
                        </td>
                        <td><img src="gambar/<?= $row["gambar"]; ?>" alt=""></td>
                        <td><?= $row["Judul"] ?></td>
                        <td><?= $row["Pengarang"] ?></td>
                        <td><?= $row["Terbit"] ?></td>
                        <td><?= $row["Dimensi"] ?></td>
                        <td><?= $row["ISBN"] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>

</html>