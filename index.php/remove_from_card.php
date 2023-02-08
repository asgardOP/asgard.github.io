<?php
include("config.php");

    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM `addtocard` WHERE `addtocard`.`id` = $id");
    header("location: card.php");

?>