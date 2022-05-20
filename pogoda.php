<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $open = mysqli_connect('localhost', 'root', '', 'prognoza');
                $zap1 = "SELECT * FROM pogoda WHERE miasta_id = 1";
                mysqli_query($open, $zap1);
                while ($work = mysqli_fetch_accos($zap1)) {
                    echo '<tr><td>'.$work[1].'</td><td>'.$work[2].'</td><td>'.$work[3].'</td><td>'.$work[4].'</td><td>'.$work[5].'</td></tr>';
                }
                mysqli_close($open);
            ?>
        </table>
    </div>

</body>

</html>