<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/report-1.css">
    <script src="../Public/javascript/login.js"></script>
    <title>Elephant are in The Elephant</title>
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
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="">சிறப்பு அறிவிப்பு</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=1">English</a>
                        <a href="?lang=2&report=1">සිංහල</a> 
                        <a href="?lang=3&report=1">தமிழ்</a>
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

    <div class="container1-1">
        <div class="header">
            <b>யானைகள் கிராமத்தில் உள்ளனe</b>
        </div>
        <form class="form-report" action="" method="post">
            <label for="numberOfelephants"><b>எத்தனை யானைகள் : </b></label>
            <input type="number" name="noOfelephant" id="number"> <br><br>
            <lable for="place"><b>இடத்தின் பெயரை உள்ளிடவும் <b></lable>
            <input type="text" name="place" class="text" ><br><br>   
            <label for="status"><b>உங்கள் பதிவு செய்யப்பட்ட கிராமத்தில்: ஆம்</b> </b></label>
            <input type="radio" name="Reg" id=" " value="yes">
            <label for="status"><b>இல்லை</b></label>
            <input type="radio" name="Reg" id="" value="no"><br>
            <div class="photo">
            <label for="addPhoto"><b>புகைப்படம் சேர்க்க : </b></label>
            <input type="file" name="Photo" class="file"> </div>
            <div class="location" style="height:auto">
                <label class="label-1">வரைபடத்தில் இருப்பிடத்தைக் குறிக்கவும்</label>
                <button style="width:20%" onclick="return getLocation()">என்னைத் தடமறியும் இடத்தைக் கிளிக் செய்யவும்</button>
            </div>
            <div class="map" id="">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;" ></textarea>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!-- <p id="demo"></p> -->
              

            </div>
            <div class="report">
                <input type="submit" value="அறிக்கை" name="Submit">
            </div>
        </form>
    </div>
    <?php $latitude  = "<script>document.write(lat)</script>" ; 
          $longitude = "<script>document.write(long)</script>"; ?>
    <a href="./" class="back">Back</a>
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
          x.innerHTML = long ;
          y.innerHTML = lat ;
        }
        </script>
</body>
</html>