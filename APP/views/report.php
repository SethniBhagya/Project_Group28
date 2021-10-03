<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/report.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/login.js"></script>
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
                <li id="home_1"><a href="../">HOME</a></li>
                <li id="report_1"><a href="">REPORT</a></li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="">View Profile</a>
                        <a href="">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="report-name" style="display:none">
        <h1>Report by Clicking on The Icon Below</h1>
    </div>
    <div class="container-1">
        
        <button  class="report-1-1" ><a index="rep" class="report-1" href="./setIncident?report=1">Elephants are in The Village<span class="dot1"><img class="report2" src="../Public/images/report-1.png"></span>
            <h1> Elephants are in The Village </h1></a>
        </button>
        <button class="report-2-2" href="" ><a index="rep"class="report-2" href="./setIncident?report=2"><span class="dot2"><img class="report2" src="../Public/images/report-2.png"></span>
           <h1>Other Wild Animals are in The Village</h1></a>
        </button>
        <button class="report-3-3" href="" ><a index="rep" class="report-3" href="./setIncident?report=3"><span class="dot3"><img class="report3" src="../Public/images/report-3.png"></span>
           <h1>Breakdown of Elephant Fences</h1></a>
        </button>
    </div>

    <div class="container-2">
        <button class="report-4-4" href=""><a class="report-4"  href="./setIncident?report=4"><span class="dot4"><img class="report4" src="../Public/images/report-4.png"></span>
            <h1> Crop Damages </h1></a>
        </button>
        <button class="report-5-5" href="" ><a class="report-5" href="./setincident?report=5"><span class="dot5"><img class="report5" src="../Public/images/report-5.png"></span>
           <h1>Wild Animal is in Danger</h1></a>
        </button>
        <button class="report-6-6" href="" ><a class="report-6" href="./setIncident?report=6"><span class="dot5"><img class="report5" src="../Public/images/report-5.png"></span>
           <h1>Illegal Happing </h1></a>
        </button>
    </div>


</body>
</html>