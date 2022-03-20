<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/report_3.css">
    <link rel="stylesheet" href="../Public/css/report-3.css">
    <script src="../Public/javascript/login1.js"></script>

    <title>காட்டில் சட்டவிரோதமான செயல் நடக்கிறது</title>
</head>
<body>
<header id="main">
<img src="../Public/images/icon.png" alt="icon" id="icon">

          <ul>
            <li id="home_2" style="right:750px"  ><a href="../?lang=3" >முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?lang=3" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
 
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile?lang=3">சுயவிவரம் காண</a> 
                    <a href="../villager/editprofile?lang=3">சுயவிவரம் காண</a> 
                    <a href="../user/logout">வெளியேறு</a>
                    </div>
                </li>
</header>   
<?php
       
       if (isset($_POST['Submit'])) {
       ?>

           <div id="message1" style="padding: 10px; background-color:aliceblue">
            <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
           <h1>Your Report Incident Submit Sucessfully</h1>
              <a href="../incident/viewReport?type=1&page=2&lang=1"  class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Report</a>
           </div>
         <?php
         
         }
       
        ?> 
 
        <div id="message" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <h id="errorMessage"></h>
        </diV>
        <form class="form-report" action="" method="post">
           <lable for="place"><b>இடத்தின் பெயரை உள்ளிடவும் <b></lable>
            <input type="text" name="place" class="text" ><br><br>  
            <div class="photo">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;" ></textarea>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
           </div>
            <div class="report">
                <input type="submit" value="அறிக்கை" name="Submit">
 
    </div>
    <?php $latitude  = "<script>document.write(lat)</script>" ; 
          $longitude = "<script>document.write(long)</script>"; ?>
    <!-- <a href="./" class="back">Back</a> -->
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
            lat = position.coords.latitude;
            long = position.coords.longitude;
            x.innerHTML = long;
            y.innerHTML = lat;
        }
        </script>
</body>
</html>