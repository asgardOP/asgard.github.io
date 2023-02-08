<?php
include("config.php");

if(isset($_POST['back'])){
    header("location: shop.php");
}

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $time = $_POST['time'];
    $insert = "INSERT INTO `addtocard` (`name`, `price`, `img`, `time`) VALUES ('$name', '$price', '$img', '$time')";
    mysqli_query($con, $insert);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<style>
    #true{
        width: 150px;
        height: 150px;
        margin-top: 130px;
        box-shadow: 0px 0px 20px rgb(0,0,0,.1);
        border-radius: 100%;
    }

    h1{
        margin-top: 20px;
        font-size: 40px;
        letter-spacing: 1px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }

  #btn{
        width: 220px;
        height: 60px;
        background-color: white;
        border-radius: 70px;
        letter-spacing: 1px;
        font-weight: 100;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 20px;
        cursor: pointer;
        transition: .3s;
        border: none;
        color: gray;
        margin-top: 100px;
    }

    #btn:hover{
        color: black;
        text-decoration: underline;
    }

    @media only screen and (max-width: 500px) {
        #true{
            width: 100px;
            height: 100px;
        }

        h1{
            font-size: 25px;
        }
    }
</style>
<body>
    <center>
        <img id="true" src="https://cdn-icons-png.flaticon.com/512/4315/4315445.png">
        <h1>Account has been Created</h1>
        
        <form action="login.php">
            <button id="btn">Login</button>
        </form>

</section>


    </center>

    <script>

    </script>
</body>

</html>