<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Public/css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/Notice1.css">
    
    <script src="../Public/Javascript/login.js"></script>

    <title>Notification</title>
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
                <li id="home_2"><a href="">Home</a></li>    
                <li id="dashboard_1"    ><a href="" >Dashboard</a></li>
                <li id="report_2"><a href="">Incidents Report</a></li>
                <li id="special_1"  ><a href="">SpecialNotice </a></li> 
                <div class="dropdown-1">
                    <button class="dropbtn-1">Language</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1">English</a>
                        <a href="?lang=2">සිංහල</a> 
                        <a href="?lang=3">தமிழ்</a>
                    </div>
                  </div> 
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="">View Profile</a>
                        <a href="">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-1">
        <h1>දැනුම්දීම</h1>
        <div class="container-2">
            <h2>
            වගා හානි ගැන
            </h2>
            <h3 style="float:right">දිනය 08/08/2021</h3>
            <div class="container-sub-1">
                <p>
                   හිතවත් ගැමියා, <br>
                   ඔබේ වන්දිය ලබා ගැනීමට ග්‍රාම නිලධාරී කාර්යාලයට එන්න
                </p>
            </div>
        </div>    
    </div>
</body>
</html>