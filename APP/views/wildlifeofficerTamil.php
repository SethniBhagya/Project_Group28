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
                <li id="home"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=3">தரவு பலகை</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">மொழி</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=3">பயனர் சுயவிவரம்</a>
                        <a href="../user/index?lang=3">வெளியேறு</a>
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
        <a href="../wildlifeofficer/viewIncidents?lang=3">
            <button class="report">
                <h1>சம்பவங்கள்</h1>
                <div class="line"><img src="../Public/images/emergency.png"></div>

            </button>
        </a>
        <a href="../wildlifeofficer/viewNotification?lang=3">
            <button class="specialNotice">
                <div class="notification"><span class="dot-1"><img src="../Public/images/bell.png" alt="1" srcset=" "></span>
                </div>
                <h1>அவசர<br>அறிவிப்புகள்</h1>
                <div class="line"><img src="../Public/images/notifi.png"></div>
            </button>
        </a>
        <a href="../wildlifeofficer/viewDashboard?lang=3">
            <button class="dashboard">
                <h1>தரவு பலகை<div class="line"><img src="../Public/images/dashIcon.png"></div>
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