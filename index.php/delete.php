<?php
include("config.php");
if (isset($_POST['delete-1'])) {
    $id = $_POST['id'];
    mysqli_query($con, "DELETE FROM `database` WHERE `database`.`id` = $id");
    header("location: del.php");
}
?>