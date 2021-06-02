<?php

  include 'KS.php';

  if(isset($_POST["submit"])){

    $e = $_POST["email_user"];
    $t = $_POST["kritik_user"];

    $Kritik = new Kritik($e,$t);

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik & Saran</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="row">
        <div class="card">
            <h3> Masukkan Anda Telah Kami Terima </h3><br>
            <label for="fname">Email</label><br>
            <input readonly type="text" id="fname" name="email_user" autocomplete="off" value="<?=$Kritik->getEmail();?>"><br><br>
            <label for="fname">Text</label><br>
            <input readonly type="text" id="fname" name="kritik_user" autocomplete="off" value="<?=$Kritik->getText();?>"><br><br><br>
            <p style="text-align: center; font-weight: bold;">Terimakasih Atas Masukkan Dari Anda Demi Perkembangan Web Kami Ini</p>
        </div>
    </div>
</body>
</html>