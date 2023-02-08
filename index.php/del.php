<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete items</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
  *{
    margin: 0;
    padding: 0;
}

ul{
    margin-top: 30px;
    list-style: none;
    z-index: 1;
}

.s{
    margin-top: 20px;
    z-index: 1;
}

#div{
    width: 400px;
    height: 150px;
    background-color: none;
    display: flex;
    justify-content: center;
    margin-top: 1px;
    box-shadow: 0px 0px 20px rgb(0,0,0,.1);
    border-radius: 20px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    z-index:0;
}

.input{
    width: 300px;
    height: 50px;
    font-size: 18px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    border-radius: 10px;
    border: 1.8px solid;
    padding-left: 20px;
    transition: 0.2s;
}    

input:focus{
    box-shadow: inset 0px 0px 20px rgba(0, 0, 0, 0.116);
}

#file{
    display: none;
}

#lable{
    width: 300px;
    height: 50px;
    font-size: 18px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    border-radius: 10px;
    transition: 0.2s;
    cursor: pointer;
}

#lable:hover{
    color:orange;
    text-decoration: underline;
}

#border{
    width: 100px;
    height: 100px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
}

#options{
    display: block;
}

#delete-btn{
    width:400px;
    height: 50px;
    font-size: 18px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: red;
    border: none;
    border-bottom: 2px solid darkorange;
    margin-left: 0px;
    margin-top: 0px;
    cursor: pointer;
    transition: 0.2s;
    display: inline-block;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0px 0px 20px rgb(0,0,0,.1);
    
}

#delete-btn:hover{
    background-color: rgb(255, 71, 71);
}

@media only screen and (max-width: 500px) {
    #showbt{
        width:300px;
        height: 50px;
    }
    #div{
        width: 300px;
    }
    .input{
        width: 200px;
    }
    #add{
        width: 300px;
    }
    #la{
        display: none;
    }
    
    

}

@media only screen and (min-width: 501px) {
    #showbt{
        width:400px;
        height: 50px;
    }
    .bt-3{
        border: 2px solid black;
    }
}

#href{
    text-decoration: none;
    margin-top: 1000px;
}


#options{
    display: inline-block;
    margin-top: 100;
}

.opt{
    display: inline-block;
}

#ul{
    
    display: flex;
    justify-content: center;
    margin-left: 0px;
    margin-top: 130px;
    z-index: -1;
}

.a-2{
    text-decoration: none;
    margin-left: 0px;
}

.bt-3{
    width: 200px;
    height: 50px;
    background-color: white;
    box-shadow: inset 0px 0px 15px rgb(0,0,0,.3);
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    font-size: 15px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: 200;
    cursor: pointer;
    transition: 0.3s;
}

.bt-3:hover{
    background-color: white;
    box-shadow: inset 0px 0px 15px rgb(0,0,0,.1);
}

#delete{
    background-color: orange;
}
</style>
<body>
<center>
 
 <div id="ul">
     <a href="post.php" class="a-2"><button id="add-1" class="bt-3">Add item</button></a>
     <a href="del.php" class="a-2"><button id="delete" class="bt-3">Delete item</button></a>
 </div>
</center>
<center>
    <form method="POST" action="delete.php">
        <div id="div">
            <ul id="ul2">
                <li class="s">
                    <input name="id" type="number" min="1" placeholder="ID" class="input" required>
                </li>
            
                        
            <li>    
            <ul id="options">
                <li class="opt"><button name="delete-1" id="delete-btn">- Delete</button></li>
                <li class="opt">
            </ul>
            </li>
            </ul>
        </div>
        
    </form>

        


    
    </center>

    <script>
        
    </script>


</body>
</html>