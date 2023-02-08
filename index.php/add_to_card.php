
<?php
include('config.php');
$id = $_GET['id'];
$res = mysqli_query($con, "SELECT * FROM `database` WHERE id=$id");
$data = $row = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to card</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    #img{
        width:90%;
        height:auto;
        
    }

    #for-img{
        width: 500px;
        height: auto;
        box-shadow: 0px 0px 20px rgb(0, 0, 0, .1);
        margin-top: 60px;
        border-radius: 10px;
    }

    .input{
        width:450px;
        margin-top: 10px;
        border: none;
        letter-spacing: 1px;
        font-weight: 100;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .input:hover{
        text-decoration: underline;
    }
    #name{
        font-size: 30px;
    }

    #price{
        font-size: 20px;
    }

    ul{
        list-style: none;
        display: inline-block;
        margin-left: -40px;
    }

    li{
        display: inline-block;
    }

    .btns{
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
    }

    #add{
        border: 3px solid orange;
        color: gray;
    }

    #add:hover{
        color: white;
        background-color: orange;
    }

    #back{
        border: 3px solid gray;
        color: gray;
    }

    #back:hover{
        color: black;
        background-color: darkgray;
    }
</style>

<body>
    <center>
        <form action="added_to_card.php" method="POST">
            <div id="for-img">

            <img id="img" src='<?php echo $data["img"]?>'>
            <input type="" name="img" style="display:none;" value='<?php echo $data["img"]?>'>
            <input type="" name="name" class="input" id="name" value='<?php echo $data['name']?>'>
            <input type="" name="price" class="input" id="price" value='<?php echo $data['price']?>$'>
            <input type="" class="input" id="id" value='ID : <?php echo $data['id']?>'>
            <input type="" name="time" id="time" style="display:none;">
            <input type="" name="user_id" id="user_id" style="display:none;">
            <ul>
                <li><button name="add" id="add" class="btns">Add to card</button></li>
                <li><button name="back" id="back" class="btns">Cancel and Back</button></li>
            </ul>
            </div>
        </form>

        
    </center>

    <script>
        var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' | '+time;
document.getElementById("time").value=dateTime;



document.getElementById("user_id").value=getCookie('userid');



function getCookie(cname) {
let name = cname + "=";
let decodedCookie = decodeURIComponent(document.cookie);
let ca = decodedCookie.split(';');
for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
while (c.charAt(0) == ' ') {
    c = c.substring(1);
}
if (c.indexOf(name) == 0) {
  return c.substring(name.length, c.length);
}
}
 return "";
}
    </script>
</body>

</html>