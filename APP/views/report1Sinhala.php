<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/javascript/report1.js"></script>
    <link rel="stylesheet" href="../Public/css/report_1.css">


    <script src="../Public/javascript/login1.js"></script>
    <title>අලි ඇතා ඇතා ඇතුලේ</title>
    <title>අලි ඉන්නේ ගමේ</title>
</head>
<body>
    <header id="main">
 
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../villager/editprofile?lang=2">පැතිකඩ බලන්න</a>
                        <a href="../user/logout">පිටවීම</a>
                    </div>
                </li>
             <?php   if (isset($_POST['Submit'])) {
    ?>
           <div id="message1" style="padding: 10px; background-color:aliceblue">
           <!-- <h1>Wildlife Care</h1></br></br> -->
           <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
           <h1>Your Report Incident Submit Sucessfully</h1>
           <!-- <h>Your Incident Report Submit Sucessfully</h> -->
           
            <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
           <h1>ඔබගේ වාර්තාවේ සිදුවීම සාර්ථකයි </h1>
           <a href="../incident/viewReport?type=1&page=2&lang=1"  class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Report</a>
           </div>
         <?php
         
         }
      
        ?>
        <form class="form-report" action="" method="post">
            <label for="numberOfelephants"><b>ගමේ සිටින අලි සංඛ්‍යාව : </b></label>
            <input type="number" name="noOfelephant" id="number"> <br><br>
            <lable for="place"><b>ඔබ සිටින ස්ථානයේ නම <b></lable>
            <input type="text" name="place" class="text" ><br><br>   
            <label for="status"><b>ඔබේ ලියාපදිංචි ගමේ සිදුවීම : ඔව් </b></label>
            <input type="radio" name="Reg" id=" " value="yes">
            <label for="status"><b>නැත</b></label>
            <input type="radio" name="Reg" id="" value="no"><br>
            <div class="photo">
            <label for="addPhoto"><b>ඡායාරූපය එකතු කරන්න </b></label>
            <input type="file" name="Photo" class="file"> </div>
            <div class="location">
                <label class="label-1">සිතියමේ ස්ථානය සලකුණු කරන්න</label>
                <button onclick="return getLocation()">ස්ථානය ක්ලික් කර ලකුණු කරන්න</button>
            </div>
            <div class="map" id="">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;" ></textarea>
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