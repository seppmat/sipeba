<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
    <style>
        *, html, body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: 0;
}

body{
    background-color: ghostwhite;
    font-family: inter;
}

div.container{
    width: 100%;
    display: flex;
    height: 100vh;
    flex-direction: column;
    font-family: inter;
    justify-content: center;
}

div.wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
}

div.content{
    background-color: white;
    padding: 50px 80px;
    border: 2px solid transparent;
    box-shadow: 0 0 3px gainsboro;
    border-radius: 5px;
}

div.content img{
    display: flex;
    justify-content: center;
    margin: 10px auto;
    width: 150px;
    margin-bottom: 30px;
}

input{
    width: 100%;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid black; 
    padding: 15px;
    font-size: 15px;
    font-family: inter;
}

.username{
    background-image: url(asset/envelope.svg);
    background-size: 20px;
    background-repeat: no-repeat;
    background-position: left;  
    padding-left: 28px;
}

.password{
    background-image: url(asset/unlock.svg);
    background-size: 20px;
    background-repeat: no-repeat;
    background-position: left;  
    padding-left: 28px;
}

input.login{
    width: 100%;
}

input.login,
a.register{
    border: none;
    box-shadow: 0 0 10px darkgray;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    font-size: 1.5em;
    font-weight: bolder;
    color: white;
    margin-top: 20px;
    margin-bottom: 20px;
    cursor: grab;
    transition: 1s ease-in-out;
    background-color: #0580c5;
    text-decoration: none;
}

a.register{
    background-color: forestgreen;
    display: flex;
    margin: 0 auto;
    width: 60%;
    font-size: 1em;
}

.login:hover{
    color: white;
    background-color: #0580c5;
    transform: scale(1.02);
}

a.register:hover{
    color: white;
    background-color: forestgreen;
    transform: scale(1.02);
}

hr{
    margin-bottom: 20px;
}

::placeholder{
    font-size: 12px;
    cursor: text;
}

@font-face {
    font-family: inter;
    src: url(asset/inter.ttf);
}
@font-face {
    font-family: louis;
    src: url(asset/louis.ttf);
}

@media screen and (max-width: 650px) {
    div.navbar h3{
        font-size: 0.6em;
    }
    div.content{
        width: 90%;
        padding: 10px;        
    }
    div.content img{
        width: 100px;        
    }
    input{
        width: 80%; 
        display: flex;
        margin: 0 auto;
    }
    input.login{
        width: 80%;
        margin: 0 auto;
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 1em;
    }
    a.register{
        margin: 0 auto;    
        width: 50%;
        font-size: 11px;
        margin-bottom: 20px;
    }
    hr{
        width: 80%;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    div.footer{
        font-size: 9px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">   
            <div class="content">    
                <form action="login.php" name="login" method="post">
                    <img src="asset/sucofindo.png" alt="">
                    <input name="email" class="username" type="email" placeholder="Type your username" required>
                    <input name="password" class="password" type="password" placeholder="Type your password" required>
                    <input type="submit" class="login" value="Log in">
                    <hr>
                    <a class="register" href="indexreg.php">Create New Account</a>
                </form>
                </div>
            </div>
    </div>
</body>
</html>

