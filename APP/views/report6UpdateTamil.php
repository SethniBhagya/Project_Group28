<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/javascript/report6.js"></script>
    <link rel="stylesheet" href="../Public/css/report-3.css">
    <script src="../Public/javascript/login1.js"></script>

    <title>காட்டில் சட்டவிரோதமான செயல் நடக்கிறது</title>
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
                <li id="home_2" style="right:750px"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"><a href="../user/viewpage?lang=3">டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px"><a href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1" style="right:210px"><a href="../user/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li>
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&&reportNo=<?php echo $_GET['reportNo'] ?>">English</a>
                        <a href="?lang=2&&reportNo=<?php echo $_GET['reportNo'] ?>">සිංහල</a>
                        <a href="?lang=3&&reportNo=<?php echo $_GET['reportNo'] ?>">தமிழ்</a>
                    </div>
                </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../villager/editprofile?lang=3">சுயவிவரம் காண</a>
                        <a href="../user/logout">வெளியேறு</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container1-1">
        <div class="header">
            <b>காட்டில் சட்டவிரோதமான செயல் நடக்கிறது<br><br>அறிக்கை எண் :<?php echo "  " . $_GET['reportNo']; ?></b>
        </div>
        <?php
        if (isset($_POST['Submit'])) {
        ?>

            <div class="message1Div">
                <div id="message1" style="padding: 10px; background-color:aliceblue">

                    <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
                    <h1>உங்கள் அறிக்கை நிகழ்வு புதுப்பிக்கப்பட்டது</h1>
                    <p style="color: darkred;">

                        ☆ சம்பவ அறிக்கையின் நேரத்தையும் தரவுகளையும் நீங்கள் புதுப்பிக்கும்போது தானாகவே புதுப்பிக்கப்படுவதை உறுதிசெய்யவும்
                    </p>
                    <a href="../incident/viewReport?type=3&page=1&lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Report</a>
                </div>
            </div>
        <?php

        }
        ?>
        <?php

        foreach ($this->dataReport as $row) {


            $place = $row['Place'];
            $image = $row['image'];
        }


        ?>
        <div id="message" style="display: none;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h id="errorMessage"></h>
        </diV>
        <form class="form-report" action="" method="post">
            <div class="form-rp">

                <lable for="place"><b>இடப் பெயரை   <b></lable>
                <input type="text" name="place" class="text" id="place" value="<?php echo $place ?>"><br><br>
                <div class="photo">
                    <label for="addPhoto"><b>புகைப்படம் சேர்க்க : </b></label>
                    <input type="file" name="Photo" class="file">
                </div>
            </div>
            <div class="location">
                <label class="label-1">இடம் எங்கே</label>
                <button onclick="return getLocation()">என்னைக் கண்காணிக்கும் இடத்தைக்  </button>
            </div>
            <div class="map" id="">
                <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;"></textarea>
                <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;"></textarea>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
            <div class="report">
                <input type="submit" value="Report" name="Submit" onclick="return validation()">
            </div>
        </form>
    </div> 
    <?php $latitude  = "<script>document.write(lat)</script>";
    $longitude = "<script>document.write(long)</script>"; ?>

    <script>
        var x = document.getElementById("lat");
        var y = document.getElementById("lang");
        var lat;
        var long;

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
                return false;
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
                y.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            lat = position.coords.latitude;
            long = position.coords.longitude;
            x.innerHTML = long;
            y.innerHTML = lat;
        }
    </script>
</body>

</html>