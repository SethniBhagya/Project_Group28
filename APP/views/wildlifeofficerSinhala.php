<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerView.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css" type="text/css">
    <script src="../Public/javascript/login.js"></script>
    <script src="../Public/javascript/wildlifeofficer.js"></script>
    <title>WildlifeCare</title>
</head>

<body>
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
            <div href="javascript:void(0);" class="icon" onclick="myFunction_1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li id="home"><a href="../">මුල් පිටුව</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard">දත්ත පුවරුව</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">භාෂාව</button>
                        <div class="dropdown-content-1">
                            <a href=" ">English</a>
                            <a href=" ">සිංහල</a>
                            <a href=" ">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile">පරිශීලක පැතිකඩ</a>
                        <a href="../user/index">ඉවත් වීම</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="name">

        <span class="dot2"><img src="../Public/images/user_icon.png" id="user-icon2"></span><b>
            <?php
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            echo $_SESSION["Fname"] . " " . $_SESSION["Lname"] ?>
        </b></label>
    </div>
    <div class="main-view">
        <a href="../wildlifeofficer/viewIncidents">
            <button class="report">
                <h1> වාර්තා වූ </br>සිදුවීම්</h1>
                <div class="line"><img src="../Public/images/emergency.png"></div>

            </button>
        </a>
        <a href="404">
            <button class="specialNotice">
                <div class="notification"><span class="dot-1"><img src="../Public/images/bell.png" alt="1" srcset=" "></span>
                </div>
                <h1>හදිසි<br>දැනුම්දීම්</h1>
                <div class="line"><img src="../Public/images/notifi.png"></div>
            </button>
        </a>
        <a href="../wildlifeofficer/viewDashboard">
            <button class="dashboard">
                <h1>දත්ත<br>පුවරුව<div class="line"><img src="../Public/images/dashIcon.png"></div>
                </h1>
            </button>
        </a>
    </div>
    <!-- <button class="View-Report">
        <h2>View Reported Incidents</h2>
    </button> -->
    <!-- <div><img scr="../Public/images/Untitled-1-01.png"></div> -->

</body>

</html>