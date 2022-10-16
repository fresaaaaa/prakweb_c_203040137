<?php

class About
{
  public function index($nama = 'Fresa', $pekerjaan = 'Mahasiswa')
  {
    echo "Halloo, Nama saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
