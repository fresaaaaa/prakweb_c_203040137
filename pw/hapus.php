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
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
         </script>";
} else {
  echo "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
         </script>";
}
