<?php 
  // $mahasiswa = [
  //   ['Fikri', "0708078505", "PTI", "Fikri@undikma.ac.id"], 
  //   ['Rahmat', "0708078005", "PTI", "Rahmat@undikma.ac.id"],
  //   ['Safar', "0708078505", "PTI", "Safar@undikma.ac.id"]
  // ];

  // Array Associative
  // definisinya sama dengan array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri
  $mahasiswa = [
    ["nama" => "FIkri",
     "nim" => "0708078505",
     "email" => "Fikri@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "Rahmat",
     "nim" => "0708078505",
     "email" => "Rahmat@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "Safar",
     "nim" => "0708078505",
     "email" => "Safar@undikma.ac.id",
     "jurusan" => "PTI"
    ]
  ];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asosiatif Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
      <li><?= $mahasiswa[0]; ?></li>
      <li><?= $mahasiswa[1]; ?></li>
      <li><?= $mahasiswa[2]; ?></li>
      <li><?= $mahasiswa[3]; ?></li>
    </ul>
    <br> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li> 
    </ul>
    <?php endforeach; ?>

</body>
</html>
