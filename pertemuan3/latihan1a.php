<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Latihan 1A</title>
</head>
<body>
    <table border="1" cellpeandding="10" cellspacing="0">
        <?php
        for( $i = 0; $i < 3; $i++){
            echo "<tr>";
            for ($j = 0; $j <3; $j++) {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspadding="0">
        <?php for( $i =1; $i <= 3; $i++) :?>
            <tr>
                <?php for( $j = 1; $j <= 3; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>