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
  *{
    margin: 0px;
    padding: 0px;
  }

  body{
    background-color: dark;
  }
  .car{
    width: 290px;
    border: none;
    border-bottom: .5px solid black;
    float: left;
    margin-left: 10px;
    margin-top: 20px;
    padding: 0px;
    height: auto;
    transition: .3s;
    border-radius: 10px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    display: block;
    justify-content: center;
    box-shadow: 0px 0px 20px rgb(0,0,0,.1);
  }
  .car:hover{
    box-shadow: 0px 0px 5px rgb(255, 117, 0, .5);
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom: .5px solid orange;
  }
  
  .car:hover .card-img-top{
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
  }
  .card-img-top{
    width:100%;
    height:200px;
    transition: .3s;
  }
  
  .card-img-top:hover{
    opacity: 100%;
  }

  .card-title{
    margin-top: 10px;
    font-size: 18px;
    letter-spacing: 1px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  .card-text{
    font-size: 15px;
    letter-spacing: 1px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  .btn-1{
    width: 230px;
    height: 30px;
    background-color: transparent;
    color: orange;
    font-size: 15px;
    letter-spacing: 1px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-decoration: none;
    border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 0px;
    margin-top: 10px;
    margin-bottom: 10px;
    border: 2px solid orange;
    color:gray;
    font-weight:1;
    transition: .3s;
  }

  .btn-1:hover{
    background-color: orange;
    color:white;
  }

  #btn-2{
    color: darkgray;
  }
  #btn-2:hover{
    color: black;
    text-decoration: underline;
  }

  #main{
    margin-top: 60px;
    margin-left: -25px;
  }

  #pinner{
    margin: 0px;
    width: 100%;
    height: 60px;
    background-color: orange;
    position: fixed;

    align-items: center;
    margin-top: -60px;
    border: none;
    border-bottom: 0.5px solid darkorange;
    box-shadow: 0px 0px 15px rgb(0,0,0,.3);
  }
  
  #card{
    width: 33px;
    height: 33px;
    margin-left: 15px;
  }

  @media only screen and (max-width: 500px) {
    .car{
      width: 200px;
      box-shadow: 0px 0px 20px rgb(0,0,0,.1);
      margin-left: 10px;
    }

    .btn-1{
      width: 140px;
    }

    .card-img-top{
      height: 140px;
    }

    #main{
      margin-left: -10px;
    }
  }

 #user_id{
  display: none;
 }

 #search{
        width: 280px;
        height: 40px;
        margin-left: -140px;
        margin-top: 10px;
        font-size: 18px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius: 10px;
        border: 2px solid darkorange;
        padding-left: 10px;
        transition: 0.3s;
        position: fixed;
    }    

  #search:focus{
    border: -2px solid darkorange;
    }

    #ul{
      list-style: none;
    }

</style>
<body>

  <div id="pinner">
    
    <center><input type="text" id="search" placeholder="search" onkeyup="search();"></center>
    
    <form action="card.php" method="post">
      <button name="bbttnn" style="background: none; border: none;"><img style="margin-top:15px;" src="shopping-online.png" id="card"></button>
      <input type="" style="display: none;" name="user_id" id="user_id">
    </form>  

    
    <a href="login.php" style="float:right; margin-top:-36px; margin-right:15px;"><img style="width:40px; height:40px;" src="https://cdn-icons-png.flaticon.com/512/4733/4733569.png"></a>
  </div>

  <?php
  include('config.php');

  $res = mysqli_query($con, "SELECT * FROM `database`");
  while($row = mysqli_fetch_array($res)){
    echo "
    <center>
    <main>
    <div id='main'>
    <ul id='ul'>
    <li class='li'>
    <a>
    <div class='car'>
        <img src='$row[img]' class='card-img-top'>
        <div class='card-body'>
          <h5 class='card-title'>$row[name]</h5>
          <p class='card-text'>$row[price]$</p>
          <p class='card-text'>ID : $row[id]</p>
          <a href='add_to_card.php?id=$row[id]' class='btn-1' class='btn btn-primary'>Add to  card</a>
        </div>
    </a>
    </li>    
    </ul>
    </div>
    </div>
    </main>
    </center>
    ";
  }
  ?>
  

  <script>

    v=document.getElementById("user_id").value=getCookie("userid");
    
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

function search() {
    let input = document.getElementById('search').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('li');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
  </script>
</body>
</html>