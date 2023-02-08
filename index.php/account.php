<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `userus` WHERE email='$email'";
    $res = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($res)) {
        $email_data = $row['email'];

        if ($email_data == $email) {
            header("location: fild_to_creat.php");
            exit(0);
        }

    }
    $insert = "INSERT INTO `userus` (`email`, `password`, `name`) VALUES ('$email','$pass','$name')";
    $sql=mysqli_query($con, $insert);
    header("location: account_created.php");
}
?>
