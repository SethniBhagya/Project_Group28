<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/report4.css">
    <title>Other Wild Animals are in the Village</title>
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
            <li id="home_2"><a href="../">මුල් පිටුව</a></li>
                <li id="dashboard_1"   ><a href="../user/viewpage?user=villager" >මුල් පුවරුව</a></li>
                <li id="report_2" style=" padding-right:20px ; right:345px  "><a href="../incident/index?lang=2"> වර්තා කිරීම</a></li>
                <li id="special_1"><a href="">විශේෂ දැන්වීම</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">භාෂාව</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=5">English</a>
                        <a href="?lang=2&report=5">සිංහල</a> 
                        <a href="?lang=3&report=5">தமிழ்</a>
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
            <b>වන සතුන් අනතුරේ </b>
        </div>
        <form class="form-report" action="" method="post">
        <label><b> සත්ව තෝරන්න :</b></label>
        <select class="text" name="animal" id="">
            <option value="">  Choose here</option>
            <option value="Alligator">AlligatorLion </option>
            <option value="Antelope">Antelope</option>
            <option value="Baboon">Baboon</option>
            <option value="Bear">Bear</option>
            <option value="Bee">Bee</option>
            <option value="Camel">Camel</option>
            <option value="Deer">Deer</option>
            <option value="Dolphin">Dolphin</option>
            <option value="Elephant">Elephant</option>
            <option value="Fox">Fox</option>
            <option value="Giraffe">Giraffe</option>
            <option value="Goat">Goat</option>
            <option value="Hamster">Hamster</option>
            <option value="Heron">Heron</option>
            <option value="Human">Human</option>
            <option value="Kangaroo">Kangaroo</option>
            <option value="Leopard">Leopard</option>
            <option value="Lion">Lion</option>
            <option value="Monkey">Monkey</option>
            <option value="Pig">Pig</option>
            <option value="Rabbit">Rabbit</option>
            <option value="Snake">Snake</option>
            <option value="Tiger">Tiger</option>
            <option value="Wolf">Wolf</option>
            <option value="Other">Other</option>
        </select><br>
            <label for="numberOfelephants"><b>සතුන් කීයක් සිටීද?   : </b></label>
            <input type="number" name="noOfanimals" id="number"> <br><br>
            <lable for="place"><b>ඔබ සිටින ස්ථානයේ නම <b></lable>
            <input type="text" name="place" class="text" ><br><br>  
            <label for="status"><b>Verterinary Support : Need </b></label>
            <input type="radio" name="support" value ="yes" id="">
            <label for="status"><b>No Need</b></label>
            <input type="radio" name="support" id="" value="no"><br>
            <label for="status"><b>කෙටි විස්තරය </b></label>
            <textarea class="text" id="discription" name="discription" rows="2"></textarea>
            <div class="photo">
            <label for="addPhoto"><b>ඡායාරූපය එකතු කරන්න : </b></label>
            <input type="file" name="Photo" class="file"> </div>
            <div class="location">
                <label class="label-1">සිතියමේ ස්ථානය සලකුණු කරන්න</label>
                <button onclick="return getLocation()">ස්ථානය ක්ලික් කර ලකුණු කරන්න</button>
            </div>
            <div class="map" id="">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;"></textarea>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!-- <p id="demo"></p> -->
              

            </div>
            <div class="report">
                <input type="submit" value="වාර්තාව" name="Submit">
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