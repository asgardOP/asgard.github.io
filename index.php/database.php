<?php
include('config.php');

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['file'];
    $img_lo = $_FILES['file']['tmp_name'];
    $img_name = $_FILES['file']['name'];
    $img_up = "imgs/".$img_name;
    $insert = "INSERT INTO `database` (`name`, `price`, `img`) VALUES ('$name','$price','$img_up')";
    $sql=mysqli_query($con, $insert);
    
    if(move_uploaded_file($img_lo, "imgs/".$img_name)){
        echo "<script>alert('Done')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }

    header("location: post.php");
}

?>