<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/villager_view.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/login.js"></script>
    <title>Document</title>
</head>
<body>
    <header id="main">
        <img src="../images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
            <div href="javascript:void(0);" class="icon" onclick="myFunction_1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li id="home_1"><a href="">HOME</a></li>
                <li id="report_1"><a href="">REPORT</a></li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="">View Profile</a>
                        <a href="">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="name">
        <span class="dot2"><img src="../images/user_icon.png" id="user-icon2" ></span><label><b>M.N.Perera</b></label>
    </div>
    <div class="main-view">
    <button class="report">
       <h1> Report </br>! </h1>
    </button>
    <button class="specialNotice">
        <div class="notification"><span class="dot-1"><img src="../images/bell.png" alt="1" srcset=""></span></div>
        <h1>Special </br>  Notice</h1>
    </button>
    <button class="summary">
       <h1>Summary <div class="line"><h>----------------</h></div></h1>
    </button>
    </div>
    <button class="View-Report">
        <h2>View Reported Incidents</h2>
    </button>
</body>
</html>