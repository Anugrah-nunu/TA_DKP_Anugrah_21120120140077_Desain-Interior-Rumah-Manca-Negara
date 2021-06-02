<?php

include ("user.php");

$email = $_POST['email'];
$password = $_POST['password'];

$user = new user($email, $password);

if($getUsername = $user->login())
{
    header("location:index.html");
} else {
    echo '<script>alert("Data Diri Yang Anda Masukkan Salah")</script>';
    echo '<a href="login.html">Back?</a>';
}

?>