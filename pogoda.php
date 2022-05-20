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
            <tr>
                <td>234</td>
                <td></td>
                <td>234</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>234</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1235</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>123</td>
                <td></td>
            </tr>

        </table>
    </div>

    <?php
    $open = mysqli_connect('localhost', 'root', '', 'prognoza');
    $zap1 = "SELECT * FROM pogoda WHERE miasta_id = 1";
    mysqli_query($open, $zap1);
    mysqli_close($open);
    ?>
</body>

</html>