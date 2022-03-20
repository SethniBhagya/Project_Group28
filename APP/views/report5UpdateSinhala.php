<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/header.css">
  <link rel="stylesheet" href="../Public/css/report_5_update.css">
  <script src="../Public/javascript/report5.js"></script>
  <script src="../Public/javascript/login1.js"></script>

  <title>අනෙක් වන සතුන් ගමේ ඉන්නවා</title>
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
        <li id="home_2"><a href="../?lang=2">මුල් පිටුව</a></li>
        <li id="dashboard_1"><a href="../user/viewpage?lang=2">මුල් පුවරුව</a></li>
        <li id="report_2" style=" padding-right:20px ; right:345px  "><a href="../incident/index?lang=2"> වර්තා කිරීම</a></li>
        <li id="special_1"><a href="../user/viewSpecialNotice?lang=2">විශේෂ දැන්වීම</a></li>
        <div class="dropdown-1" style="  padding-left:  300px ">
          <button class="dropbtn-1">භාෂාව</button>
          <div class="dropdown-content-1">
            <a href="?lang=1&&reportNo=<?php echo $_GET['reportNo'] ?>">English</a>
            <a href="?lang=2&&reportNo=<?php echo $_GET['reportNo'] ?>">සිංහල</a>
            <a href="?lang=3&&reportNo=<?php echo $_GET['reportNo'] ?>">தமிழ்</a>
          </div>
        </div>
        <li class="dropdown">
          <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="../villager/editprofile?lang=2">පැතිකඩ බලන්න</a>
            <a href="../user/logout">පිටවීම</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container1-1">
    <div class="header">
      <b>වන සතුන් අනතුරේ </b>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
    ?>
      <div class="message1Div">
        <div id="message1" style="padding: 10px; background-color:aliceblue">

          <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
          <h1>ඔබගේ වාර්තාවේ සිදුවීම් යාවත්කාලීන කිරීම සාර්ථකයි</h1>
          <p style="color: darkred;">

            ☆ කරුණාකර ඔබ සිදුවීම් වාර්තා කාලය යාවත්කාලීන කරන විට සහ දත්ත ස්වයංක්‍රීයව යාවත්කාලීන වන බවට වග බලා ගන්න
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
      $description = $row['description'];
    }
    foreach ($this->dataReport5 as $row) {

      $animal = $row['animal'];
      $noOfanimal = $row['no_of_animals'];
      $status = $row['vet_support'];
    }


    ?>
    <div id="message" style="display: none;">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <h id="errorMessage"></h>
    </diV>
    <form class="form-report" action="" method="post">
      <div class="form-rp">
        <label><b>සත්ව තෝරන්න :</b></label>
        <select class="text" name="animal" id="animal">
        <option value="Alligator">අලිගේටර්සිංහයා </option>
                    <option value="Antelope">ඇන්ටිලොප්</option>
                    <option value="Baboon">බබූන්</option>
                    <option value="Bear">වලහා</option>
                    <option value="Bee">මී මැස්සන්</option>
                    <option value="Camel">ඔටුවන්</option>
                    <option value="Deer">මුවා</option>
                    <option value="Dolphin">ඩොල්ෆින්</option>
                    <option value="Elephant">අලියා</option>
                    <option value="Fox">නරියා</option>
                    <option value="Giraffe">ජිරාෆ්</option>
                    <option value="Goat">එළුවා</option>
                    <option value="Hamster">හැම්ස්ටර්</option>
                    <option value="Heron">හෙරොන්</option>
                    <option value="Human">මානව</option>
                    <option value="Kangaroo">කැන්ගරු</option>
                    <option value="Leopard">දිවියා</option>
                    <option value="Lion">සිංහයා</option>
                    <option value="Monkey">වඳුරා</option>
                    <option value="Pig">ඌරු</option>
                    <option value="Rabbit">හාවා</option>
                    <option value="Snake">සර්පයා</option>
                    <option value="Tiger">කොටියා</option>
                    <option value="Wolf">වුල්ෆ්</option>
                    <option value="Other">වෙනත්</option>
             </select><br>
        <label for="numberOfelephants"><b>සතුන් කීයක් සිටීද? : </b></label>
        <input type="number" name="noOfanimals" id="number" value="<?php echo $noOfanimal ?>"> <br><br>
        <lable for="place"><b>ඔබ සිටින ස්ථානයේ නම <b></lable>
        <input type="text" name="place" id="place" class="text" value="<?php echo $place ?>"><br><br>
        <label for="status"><b>පශු වෛද්ය සහාය: අවශ්යයි </b></label>
        <input type="radio" name="support" value="yes" <?php if ($status == "yes") {
                                                          echo "checked";
                                                        } ?> id="">
        <label for="status"><b>අවශ්ය නැහැ</b></label>
        <input type="radio" name="support" id="" value="no" <?php if ($status == "no") {
                                                              echo "checked";
                                                            } ?>><br><br>
        <label for="status"><b>කෙටි විස්තරය </b></label><br>
        <textarea class="text" id="discription" name="discription" rows="2"><?php echo $description ?></textarea>
        <div class="photo">
          <label for="addPhoto"><b>ඡායාරූපය එකතු කරන්න : </b></label>
          <input type="file" name="Photo" class="file">
        </div>
      </div>
      <div class="location">
        <label class="label-1">සිතියමේ ස්ථානය සලකුණු කරන්න</label>
        <button onclick="return getLocation()">ස්ථානය ක්ලික් කර ලකුණු කරන්න</button>
      </div>
      <div class="map" id="">
        <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;"></textarea>
        <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;"></textarea>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- <p id="demo"></p> -->


      </div>
      <div class="report">
        <input type="submit" value="Report" name="Submit" onclick="return validation()">
      </div>
    </form>
  </div>
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