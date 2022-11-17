<?php
// Date
// menampilkan tanggal dengan formasi tertentu
// echo date ("1, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari  1970
// echo time();
// oche date("1 d m y", time()-60*60*24*100);

// mktime
// membuat sendiri detik dari januari 1970 sampe waktu yang diinginkan
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,9,19,2001);
// echo date("1 d M y", mktime(0,0,0,7,8,1985));

?>