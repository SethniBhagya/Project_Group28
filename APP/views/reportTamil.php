<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/Report.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/login1.js"></script>
    <title>Report Page</title>
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
             <li id="home_2" style="right:750px"  ><a href="../"  ">முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?user=villager" >டாஷ்போர்டு</a></li>
                <li id="report_2" style=" background-color: rgb(168, 175, 168); right:380px" ><a  href="">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="../user/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="../incident/index?lang=1">English</a>
                        <a href="../incident/index?lang=2">සිංහල</a> 
                        <a href="../incident/index?lang=3">தமிழ்</a>
                    </div>
                  </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile?lang=3">View Profile</a> 
                    <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="report-name" style="display:none">
        <h1>Report by Clicking on The Icon Below</h1>
    </div>
    <div class="container-1">
        
        <button  class="report-1-1" ><a index="rep" class="report-1" href="./setIncident?report=1"> <span class="dot1"><img class="report2" src="../Public/images/report-1.png"></span></br>
            <h1> யானைகள் கிராமத்தில் உள்ளன </h1></a>
        </button>
        <button class="report-2-2" href="" ><a index="rep"class="report-2" href="./setIncident?report=2"><span class="dot2"><img class="report2" src="../Public/images/report-2.png"></span>
           <h1>மற்ற காட்டு விலங்குகள் கிராமத்தில் உள்ளன</h1></a>
        </button>
        <button class="report-3-3" href="" ><a index="rep" class="report-3" href="./setIncident?report=3"><span class="dot3"><img class="report3" src="../Public/images/report-3.png"></span>
           <h1>யானை வேலிகள் உடைப்பு</h1></a>
        </button>
    </div>

    <div class="container-2">
        <button class="report-4-4" href=""><a class="report-4"  href="./setIncident?report=4"><span class="dot4"><img class="report4" src="../Public/images/report-4.png"></span></br>
            <h1> பயிர் சேதங்கள் </h1></a>
        </button>
        <button class="report-5-5" href="" ><a class="report-5" href="./setincident?report=5"><span class="dot5"><img class="report5" src="../Public/images/report-5.png"></span>
           <h1>காட்டு விலங்கு ஆபத்தில் உள்ளது</h1></a>
        </button>
        <button class="report-6-6" href="" ><a class="report-6" href="./setIncident?report=6"><span class="dot5"><img class="report5" src="../Public/images/report-5.png"></span>
           <h1>சட்டவிரோதமாக நடப்பது </h1></a>
        </button>
    </div>


</body>
</html>