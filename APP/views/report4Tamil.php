<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/report_4.css">
    <script src="../Public/javascript/login1.js"></script>
    <title>பயிர் சேதங்கள்</title> 
  
</head>

<body>
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
            </div>

            <ul>
            <li id="home_2" style="right:750px"  ><a href="../?lang=3" >முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?lang=3" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3" >சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="../user/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li> 
                <li id="home_2" style="right:750px"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"><a href="../user/viewpage?lang=3">டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px"><a href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1" style="right:210px"><a href="../user/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li>
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=4">English</a>
                        <a href="?lang=2&report=4">සිංහල</a> 
                        <a href="?lang=2&report=4">සිංහල</a>
                        <a href="?lang=3&report=4">தமிழ்</a>
                    </div>
                  </div>
                </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile?lang=3">சுயவிவரம் காண</a> 
                    <a href="../user/logout">வெளியேறு</a>
                        <a href="../villager/editprofile?lang=3">சுயவிவரம் காண</a>
                        <a href="../user/logout">வெளியேறு</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header> 
    </header>

    <div class="container1-1">
        <div class="header">
            <b> பயிர் சேதங்கள்</b>
        </div>
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
           }  ?> 
 
        <div id="message" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <h id="errorMessage"></h>
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h id="errorMessage"></h>
        </diV>
        <form class="form-report" action="" method="post">
        <label><b>எந்த விலங்கு சேதத்தை ஏற்படுத்தியது :</b></label>
        <select class="text" name="animal" id="">
            <option value="">  இங்கே தேர்வு செய்யவும்</option>
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
            <lable for="place"><b>இடத்தின் பெயரை உள்ளிடவும்e <b></lable>
            <input type="text" name="place" class="text" ><br><br>  
            <label><b>எந்த விலங்கு சேதத்தை ஏற்படுத்தியது :</b></label>
            <select class="text" name="animal" id="">
                <option value=""> இங்கே தேர்வு செய்யவும்</option>
                <option value="Alligator">முதலை சிங்கம் </option>
                <option value="Antelope">மான் விலங்கு</option>
                <option value="Baboon">பபூன்</option>
                <option value="Bear">தாங்க</option>
                <option value="Bee">தேனீ</option>
                <option value="Camel">ஒட்டகம்</option>
                <option value="Deer">மான்</option>
                <option value="Dolphin">டால்பின்</option>
                <option value="Elephant">யானை</option>
                <option value="Fox">நரி</option>
                <option value="Giraffe">ஒட்டகச்சிவிங்கி</option>
                <option value="Goat">வெள்ளாடு</option>
                <option value="Hamster">வெள்ளெலி</option>
                <option value="Heron">ஹெரான்</option>
                <option value="Human">மனிதன்</option>
                <option value="Kangaroo">கங்காரு</option>
                <option value="Leopard">சிறுத்தை</option>
                <option value="Lion">சிங்கம்</option>
                <option value="Monkey">குரங்கு</option>
                <option value="Pig">பன்றி</option>
                <option value="Rabbit">முயல்</option>
                <option value="Snake">பாம்பு</option>
                <option value="Tiger">புலி</option>
                <option value="Wolf">ஓநாய்</option>
                <option value="Other">மற்றவை</option>
            </select><br>
            <lable for="place"><b>இடத்தின் பெயரை உள்ளிடவும் <b></lable>
            <input type="text" name="place" class="text"><br><br>
            <label for="Cultivated Crop"><b>பயிரிடப்பட்ட பயிர் : </b></label>
            <input type="text" name="cultivatedCrop" id=""> <br><br>
            <label for="Culktivatedland"><b>பயிரிடப்பட்ட நிலத்தை நீட்டிக்கவும்: </b></label>
            <input type="text" name="cultivatedLand" id=""> <br><br>
            <label for="Damagedland"><b>சேதமடைந்த நிலத்தை நீட்டிக்கவும்: </b></label>
            <input type="text" name="damageLand" id=""> <br><br>
       

            <!-- <textarea class="text" id="discription" name="latitude" rows="2"></textarea> -->
            <div class="photo">
            <label for="addPhoto"><b>புகைப்படம் சேர்க்க : </b></label>
            <input type="file" name="Photo" class="file"> </div>
                <label for="addPhoto"><b>புகைப்படம் சேர்க்க : </b></label>
                <input type="file" name="Photo" class="file">
            </div>
            <div class="location" style="height: auto;">
                <label class="label-1">இடம் எங்கே</label>
                <button onclick="return getLocation()">என்னைத் தடமறியும் இடத்தைக் கிளிக் செய்யவும்</button>
            </div>
            <div class="map" id="">
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2"style="display:none;" ></textarea>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!-- <p id="demo"></p> -->
              
                <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;"></textarea>
                <textarea class="text" id="lang" name="longitude" rows="2" style="display:none;"></textarea>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <!-- <p id="demo"></p> -->


            </div>
            <div class="report">
@ -129,31 +132,32 @@
            </div>
        </form>
    </div>
    <?php $latitude  = "<script>document.write(lat)</script>" ; 
          $longitude = "<script>document.write(long)</script>"; ?>
    <?php $latitude  = "<script>document.write(lat)</script>";
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
    </script>
</body>

</html>