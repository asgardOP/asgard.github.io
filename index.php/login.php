<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>

    h3{
        letter-spacing: 1px;
        font-weight: 100;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 40px;
    }

    div{
        width: 350px;
        height: 250px;
        margin-top: 50px;
        box-shadow: 0px 0px 20px rgb(0, 0, 0, .3);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
    }

    input{
        display: block;
        margin-top: 0px;
    }

    .input{
        width: 300px;
        height: 50px;
        margin-top: 10px;
        font-size: 18px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius: 10px;
        border: 1.8px solid;
        padding-left: 20px;
        transition: 0.2s;
    }    

    .input:focus{
        box-shadow: inset 0px 0px 20px rgba(0, 0, 0, 0.116);
    }

    #submit{
        width: 220px;
        height: 40px;
        margin-top: 50px;
        background-color: white;
        border-radius: 70px;
        letter-spacing: 1px;
        font-weight: 100;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 20px;
        cursor: pointer;
        transition: .3s;
        border: 3px solid orange;
        color: gray;
    }

    #submit:hover{
        color: white;
        background-color: orange;
    }

    #h5{
        width: 220px;
        height: 60px;
        text-decoration: none;
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
        margin-top: 30px;
    }

    #h5:hover{
        color: black;
        text-decoration: underline;
    }
</style>
<body>
    <center>
    <h3>Sign In</h3>
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828453.png" style="width:50px; height:50px; margin-top:-20px;">
        <div>
            <form action="enter.php">
                <input type="email" name="email" id="email" class="input" placeholder="Email">
                <input type="password" name="pass" id="pass" class="input" placeholder="Password">
                <input type="submit" name="submit" id="submit">
            </form>
        </div>

        <a href="sign-up.php" id="h5"><h5>Create new account</h5></a>
    </center>



</body>
</html>