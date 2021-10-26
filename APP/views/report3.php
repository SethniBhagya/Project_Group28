<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/report_3.css">
    <script src="../Public/javascript/login1.js"></script>
    <script src="../Public/javascript/report3.js"></script>

    <title>Breakdown of Elephants Fences</title>
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
            <li id="home_2"><a href="../">Home</a></li>
                <li id="dashboard_1" ><a href="../user/viewpage?user=villager" >Dashboard</a></li>
                <li id="report_2"><a href="../incident/index?lang=1">Report Incidents</a></li>
                <li id="special_1"><a href="../user/viewSpecialNotice?lang=1">SpecialNotice </a></li> 
                <div class="dropdown-1">
                    <button class="dropbtn-1">Language</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=3">English</a>
                        <a href="?lang=2&report=3">සිංහල</a> 
                        <a href="?lang=3&report=3">தமிழ்</a>
                    </div>
                  </div>
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
      
      if(isset($_POST['Submit'])){
      ?>
         
         <div id="message1" style="padding: 10px; background-color:aliceblue">
         <!-- <h1>Wildlife Care</h1></br></br> -->
         <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
         <h1>Your Report Incident Submit Sucessfully</h1>
         <!-- <h>Your Incident Report Submit Sucessfully</h> -->
         
         <a href="../incident/viewReport?type=1&page=2&lang=1"  class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Report</a>
         </div>
       <?php
       
       }
      //  }
      //ss}
      ?>
       ?> 
        <div id="message" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <h id="errorMessage"></h>
    </div>
    <div class="container1-1">
        <div class="header">
            <b>Breakdown of Elephant Fence</b>
        </div>
        <form class="form-report" action="" method="post">
            <!-- <label for="numberOfelephants"><b>How many Elephants  : </b></label>
            <input type="number" name="noOfelephant" id="number"> <br><br>
            <label for="status"><b>In Your Registered Village : Yes </b></label>
            <input type="radio" name="yes" id="">
            <label for="status"><b>No</b></label>
            <input type="radio" name="No" id=""><br> -->
            <lable for="place"><b>Enter the Place name <b></lable>
            <input type="text" name="place" class="text" id="place" ><br><br>  
            <div class="photo">
            <label for="addPhoto"><b>Add Photo : </b></label>
            <input type="file" name="Photo" class="file"> </div>
            <div class="location">
                <label class="label-1">Where is the location</label>
                <button onclick="return getLocation()">Click Me Track location</button>
            </div>
            <div class="map" id="">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;"></textarea>

              <!-- <p id="demo"></p> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              

            </div>
            <div class="report">
                <input type="submit" value="Report" name="Submit" onclick="return validation()">
            </div>
        </form>
    </div>
    <?php $latitude  = "<script>document.write(lat)</script>" ; 
          $longitude = "<script>document.write(long)</script>"; ?>
    <!-- <a  class="back">Back</a> -->
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