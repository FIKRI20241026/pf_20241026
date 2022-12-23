<?php
     $mahasiswa = [
        ["nama" => "Fikri",
         "nim" => "20241015",
         "email" => "Fikri@gmail.com",
         "jurusan" => "PTI"
        ],
        ["nama" => "Rahmat",
            "nim" => "20241025",
            "email" => "Rahmat@gmail.com",
            "jurusan" => "PTI"
        ],
        ["nama" => "Safar",
            "nim" => "20241006",
            "email" => "Safar@gmail.com",
            "jurusan" => "PTI"
        ]
      ];    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Asosiatif</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"]?>&nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
    
</body>
</html>