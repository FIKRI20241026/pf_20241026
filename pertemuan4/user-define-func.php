<?php
    function salam ($waktu, $nama){
        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Funtion</title>
</html>
<body>
    <h1><?= salam("pagi", "Anak Konda"); ?></h1>
    <!-- <h1>Selamat Pagi Administrator</h1> -->

</body>
</html>