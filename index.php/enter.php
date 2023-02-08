<?php
include("config.php");

    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $sql = "SELECT * FROM `userus` WHERE email='$email' AND password='$pass'";
    $res = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($res)) {
    $user_email = $row['email'];
    $id = $row['id'];

    setcookie("userid", "$id", time() + (86400 * 30), "/");
    header("location: shop.php");

    exit(0);
}
header("location: fild_to_login.php")



?>