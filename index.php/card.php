<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your card</title>
</head>

<style>

    

    .car{
        width:600px;
        height: 80px;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: left;
        box-shadow: 0px 0px 20px rgb(0,0,0,.1);
        padding: 10px;
        margin-top: 40px;
        z-index: -2;
        border-radius: 20px;
        border-bottom-left-radius: 3px;
        transition: .3s;
    }

    .car:hover{
        box-shadow: 0px 0px 25px rgb(0,0,0,.3);
    }

    .texts{
        font-size: 16px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 200;
        margin-top: 20px;
        z-index: -1;
    }

    .card-img-top{
        width: 80px;
        height: 100%;
        border-radius: 5px;
    }

    #important{
        list-style: none;
        margin-left: -30px;
        margin-top: 0px;
        z-index: -1;
    }

    li{
        display: inline-block;
        align-items: left;
    }

    #info{
        margin-top: 10px;
    }

    #time{
        margin-top: 20px;
        margin-left: 0;
    }

    #delete{
        width: 25px;
        height: 25px;
        margin-left: 0px;
        position: relative;
        z-index: 3;
    }

    #main{
        width: 800px;
        height: 250px;
        margin-top: 0px;
        overflow-y: scroll;
        border: none;
        border-left: none;
        border-right: none;
        box-shadow: inset 0px 0px 20px rgb(0,0,0,.3);
        border-radius: 20px;
    }

    .btn-1{
        width: 40px;
        height: 40px;
        z-index: 2;
        margin-left: 330px;
        margin-top: -200px;
    }

    #img{
        width: 150px;
        height: 150px;
        margin-top: -50px;
    }

    h1{
        font-size: 35px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 200;
    }

    #delete{
        width: 40px;
        height: 40px;
        background-color: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -70px;
        margin-left: 530px;
        border-radius: 6px;
    }

    #delete:hover{
        background-color: rgb(0,0,0,.05);
    }

    #delete-img{
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    #back{
        width: 40px;
        height: 40px;
        transform: rotate(180deg);
    }

    #forback{
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        padding: 3px;
    }

    #forback:hover{
        background-color: rgb(0,0,0,.05);
    }

    #href{
        width: 40px;
        height: 40px;
        cursor: default;
    }

    @media only screen and (max-width: 800px) {
        .car{
            width: 400px;
        }

        #main{
            width: 480px;
        }

        #delete{
            margin-left: 350px;
        }
    }
</style>

<body>

    <div align="right" style="margin-right:20px; margin-top:5px;">
        <a href="shop.php">
            <div id="forback">
                <img id="back" src="https://cdn-icons-png.flaticon.com/512/3585/3585980.png">
            </div>
        </a>
    </div>

    <center>
        <img id="img" src="https://cdn-icons-png.flaticon.com/512/2331/2331970.png">
        <h1>Your Cart</h1>
    </center>
    <input type="" style="display: none;" name="user_id" id="user_id" value="3">
<center>
<div id="main">

<?php
  include('config.php');

if (isset($_POST['bbttnn'])) {
    $id = $_POST['user_id'];
    $res = mysqli_query($con, "SELECT * FROM `addtocard` WHERE user_id='$id'");
    while ($row = mysqli_fetch_array($res)) {
        echo "
    <center>
    <main>
    <div>
    <div class='car'>
        <img src='$row[img]' class='card-img-top'>
        <div class='card-body'>
        <ul id='important' align='left'>
          <li><span id='card-title' class='texts'>$row[name] |</span></li>
          <li><span id='card-text' class='texts'>$row[price]</span></li>
        </ul>
    
        <div id='info'>
            <span id='time' class='texts'>$row[time]</span>
        </div>
       
        </div>
        
    </div>
    <a id='href' href='remove_from_card.php?id=$row[id]'><div id='delete'><img id='delete-img' src='https://cdn-icons-png.flaticon.com/512/6861/6861362.png'></div></a>
    </div>
  </main>
 
  </center>
    ";
    }
}
  ?>

</div>
</center>
</body>
</html>