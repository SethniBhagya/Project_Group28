<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/Villagerpage.css">
    <script src="../Public/Javascript/login1.js"></script>
    <title>டாஷ்போர்டு</title>
</head>

<body>
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
           

            <ul>
            <li id="home_2" style="right:750px"  ><a href="../lang=3" >முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?lang=3" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="../villager/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=1">English</a>
                        <a href="?lang=2&report=1">සිංහල</a> 
                        <a href="?lang=3&report=1">தமிழ்</a>
                    </div>
                  </div>
 
                <!-- <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">Language</button>
                    <div class="dropdown-content-1">
                        <a href=" ">English</a>
                        <a href=" ">සිංහල</a>
                        <a href=" ">தமிழ்</a>
                    </div>
                </div> -->
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile?lang=1">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    $result = $this->data;
    foreach ($result as $row) {
        $fname = $row['Fname'];
    } ?>
    <div class="name">
        <span class="dot2"><img src="../Public/images/user_icon.png" id="user-icon2"></span><label id="name"><b><b>அவ<?php echo " " . $fname; ?></b> </b></label>
    </div>

    <div class="main-view">
        <a href="../incident/index?lang=1">
            <button class="report">
                <h1> அறிக்கை </br>சம்பவங்கள்</h1>
                <div class="line"><img src="../Public/images/emergency.png"></div>

            </button>
        </a>
        <a href="../villager/viewNotification?lang=1">
            <button class="specialNotice">
                <div class="notification"><span class="dot-1"><img src="../Public/images/bell.png" alt="1" srcset=" "></span>
                </div>
                <h1>அவசர அறிவிப்புகள்</h1>
                <div class="line"><img src="../Public/images/notifi.png"></div>
            </button>
        </a>
 
        <a href="../dashboard/index?lang=1">
            <button class="dashboard"  ">
                <h1>புள்ளியியல்</br> பகுப்பா <div class="line"><img src="../Public/images/dashIcon.png"></div>
                </h1>
            </button>
        </a>
        <a href="../incident/viewReport?type=1&page=1&lang=1">
            <button class="view"  ">
                <h1>புகாரளிக் <div class="line"><img src="../Public/images/list.png"></div>
                </h1>
            </button>
        </a>
 
 
     </div>
    <!-- <a class="View-Report" href="../incident/viewReport?type=1&page=1">
        <h2>View Reported Incidents</h2>
    </a> -->
</body>

</html>