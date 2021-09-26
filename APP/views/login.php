<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/login.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/login.js"></script>
    <title>Login</title>
</head>

<body onload="myFunction()" > 
    <div id="loader"></div>
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
            <div href="javascript:void(0);" class="icon" onclick="myFunction_1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>

                <li id="home"><a href="vvvvv">HOME</a></li>
                <li id="report"><a href="./">REPORT</a></li>
                <li id="register"><a href="../villager/register">REGISTER</a></li>
                <li id="login"><a id=login_text href="">LOGIN</a></li>
                <li class="dropdown">
                    <button onclick="myFunction_2()" class="dropbtn">Language <i class="down"></i></button>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="">English</a>
                      <a href="">සිංහල</a>
                      <a href="">தமிழ்</a>
                    </div>
                </li>
            </ul>
    </header>
    </div> 
    <div class="contanier">
        <div class="login-header">
            <h3>LOGIN</h3>
        </div>
        </br>
        <form action="login" method="POST" class="login_form">
            <div class="group">
                <label for="username">Username</label><br>
                <input type="text" name="username"><br>
            </div>
            <br>
            <div class="group">
                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
            </div>
            <br>
            <div class="group_link">
                <a href="">Forgotten your username or password?</a>
            </div>
            <div class="sumbit">
                <!-- <input name="submit" type="button" value="LOGIN"> -->
                <button>Login</button>
            </div>
        </form>
    </div>
</body>

</html>