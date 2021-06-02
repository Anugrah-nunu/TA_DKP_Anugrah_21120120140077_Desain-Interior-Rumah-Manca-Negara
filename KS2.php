<?php

include 'KS.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik & Saran</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="header">
        <h1>Design interior Rumah Mancanegara</h1>
        <h4>Ragam Design Untuk Rumah Idamanmu</h4>
    </div>

    <div class="menu">
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="KS2.php">Kritik & Saran</a></li>
            <li><a href="Penulis.html">Tentang Penulis</a></li>
        </ul>
    </div>

    <div class="row">
        <form action="KS3.php" method="post">
        <div class="coloumn">
            <div class="card">
                <h3> Halaman Kritik & Saran </h3>
                <label for="fname">Email :</label>
                <input type="text" id="fname" name="email_user" autocomplete="off" style="padding-left: 3px;"><br><br>
                <label for="subject">Text :</label><br>
                <textarea id="subject" name="kritik_user" style="height:200px; width: 400px; padding-left: 3px;" autocomplete="off"></textarea><br><br>
                <input type="submit" value="Enter" name="submit">
            </div>
        </div>
        </form>
    </div>
</body>
</html>