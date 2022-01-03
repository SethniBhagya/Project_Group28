<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeoffficerViewIncidentsIndetail.css">
    <script src="../Public/Javascript/login.js"></script>
    <script src="../Public/Javascript/viewReport.js"></script>
    <script src="../Public/Javascript/wildlifeofficer.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
    <title>View Incident Details</title>
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

                <li id="home"><a href="../?lang=2">මුල් පිටුව</a></li>
                <li id="userPageSinhala"><a href="../wildlifeofficer/?lang=2"> &nbsp; පරිශීලක පිටුව </a></li>
                <li id="incidentsSinhala"><a href="../wildlifeofficer/viewIncidents?lang=2"> &emsp; වාර්තා වූ සිදුවීම්</a></li>
                <li id="notifications"><a href="../wildlifeofficer/viewNotification?lang=2">දැනුම්දීම්</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=2">දත්ත පුවරුව</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">භාෂාව</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=2">පරිශීලක පැතිකඩ</a>
                        <a href="../user/index?lang=2">ඉවත් වීම</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>
    <!-- <nav class="links_to_pages">
      <ul>
        <li>BACK</li>
        <li>SPECIAL NOTICES</li>
        <li>DASHBOARD</li>
      </ul>
    </nav> -->

    </div>

    <body>
        <div class="contanier_2">

            <div class="contanier_2-1">

            </div>


            <div class="row_first">
                <div class="col_1_first">
                    <div class="row_in_firstrow">
                        <div class="col_1_first"><img src="../Public/images/user_icon4-01.png" class="image"></div>
                        <div class="col_2_first"> User_ID : W001</div>
                    </div>
                </div>
                <div class="col_2_first">නම : S.Disanayaka </div>

            </div>
            <div class="row">
                <div class="col_1">Wild Animal in the village</div>
                <div class="col_2">වාර්තා අංකය</div>
                <div class="col_2">තත්ත්වය<input type='button' class='button' value='ACCEPT' name='accept' /></div>
            </div>
            <div class="map" id="map">
                <div class="map">
                    <div class="header-map">
                        සිදුවීම් වාර්තා කරන ප්‍රදේශ
                    </div>
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633098856489!5m2!1sen!2slk" width="100%" height="510" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>


            </div>


            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnodzrfhq7KjgE_XJjwTA4oFIgAe8nQNk&callback=loadMap">
            </script>

            <div class="row1">

                <a href="../wildlifeofficer/viewIncidents?lang=2">ආපසු</a>

            </div>


            <div class="last">

            </div>

            </form>

        </div>
        </div>
    </body>

</html>