<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan 1</title>
  <style>
    .kotak {
      width: 30px;
      height: 30px;
      background-color: greenyellow;
      text-align: center;
      line-height: 30px;
      margin: 3px;
      float: left;
      transition: 1s;
    }
   .kotak:hover {
     transform: rotate(360deg);
     border-radius: 58%;
    }
  </style>
</head>
<body>
    <?php 
      $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>

    <?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $i ) : ?>
         <div class="kotak"><?= $i ?></div>
    <?php endforeach; ?>
         <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>