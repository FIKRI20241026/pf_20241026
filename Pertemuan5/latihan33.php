<?php
// array multidimensi
// array di dalam array
$mahasiswa = [
    ["Fikri", "0708078505", "PTI", "Fikri@undikma.ac.id"],
    ["Citra", "0708078505", "PTI", "citrra@undikma.ac.id"],
    ["Rahmat","0708078505", "PTI", "Rahmat@undikma.ac.id"]
  ];
  
    echo $mahasiswa[0][0];
    echo $mahasiswa[0][1];
    echo $mahasiswa[0][2];
    echo $mahasiswa[0][3];

  ?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Latihan Array Multimedia</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
  
    <ul>
      <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
        <br>
      <?php endforeach; ?>
    </ul>
  </body>
  </html>