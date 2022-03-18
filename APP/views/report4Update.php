<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/report_4Update.css">  
    <link rel="stylesheet" href="../Public/css/alert.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/1.js"></script>
    <title>Report Page</title>
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
                <li id="dashboard_1"><a href="../user/viewpage?lang=1">Main Menu</a></li>
                <li id="report_2" style=" background-color: rgb(168, 175, 168);"><a href="">Report Incidents</a></li>
                <li id="special_1"><a href="../user/viewSpecialNotice?lang=1">SpecialNotice </a></li>
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">Language</button>
                    <div class="dropdown-content-1">
                        <a href="../incident/index?lang=1">English</a>
                        <a href="../incident/index?lang=2">සිංහල</a>
                        <a href="../incident/index?lang=3">தமிழ்</a>
                    </div>
                </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../villager/editprofile?lang=1">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <?php  
    if (isset($this->status)) {
         if($this->status  =="notview"){ 
    ?>

        <div id="messagealert" style="padding: 10px;  ">

            <img src="../Public/images/alertIcon.png" style="width:100px;  height:100px"><br>
             <h1><b>Alert Message   </b></h1>
             <P> ☆ Wildlife Elelphants Come In to Register Village  </P> 
             <P> ☆ Please Go to Safe Place in Your Area</P> 
            <form action="?lang=1&report=1" method="post"> 
             <input type="submit" value="Ok" name="submitAlert"   id="submit">
            </form>
        </div>
    <?php

    }}

    ?>
    <?php ?>
    <div id="myview" class="view-1">
         <div class="subcontainer_3-5">
            <div class="subcontainer_3-6">

            <?php
            foreach ($this->dataReport as $row) {


                $place = $row['Place'];
                $image = $row['image'];
                $description = $row['description'];
            }
            foreach ($this->dataReport4 as $row) {
    
                $animal = $row['animal_cause_to_damage'];
                $cultivatedCrop = $row['cultivated_crop'];
                $cultivatedlandExtent = $row['cultivated_land_extent'];
                $damagedlandExtent = $row['damaged_land_extent'];
            }
    
      ?>
                <h3 style="color: white;"> <b>Crop Damages  <br><br>Report Number :<?php echo "  " . $_GET['reportNo']; ?> </b></h3>
                </div>
 
   <?php

if (isset($_POST['Submit'])) {
?>
 <div class="message1Div">
   <div id="message1" style="padding: 10px; background-color:aliceblue">

     <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
     <h1>Your Report Incident Update Sucessfully</h1>
     <p style="color: darkred;">
       <!-- Import ! <br> -->
       ☆ Please make sure when You Update the Incident Report Time and Data are automatically Updated
     </p>
     <a href="../incident/viewReport?type=3&page=1&lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Report</a>
   </div>
 </div>
<?php

}

?>
  
              <div id="map" style="top: 10px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="50%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div id="detail">
                <form class=" " action="" method="post">
                    <table class="table">
                        <tr class="header-table" style="text-align: left;">
                        <th>Animal caused to damage</th>
                                <td> <select class="text-1" name="animal" id="animal">
                                        <option value="<?php echo $animal ?>"><?php echo $animal ?></option>
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
                                </td>
                            </tr>    </tr>
                        <tr class="header-table" style="text-align: left;">
                            <th>Name of the Place </th>
                            <td><input type="text" name="place" id="place" class="text" value="<?php echo $place ?>"> </td>
                        </tr>
                        <tr class="header-table" style="text-align: left;">              
                            <th>Cultivated Crop </th>
                            <td><input type="text" name="cultivatedCrop" id="place" value="<?php echo $cultivatedCrop ?>">   </td>
                        </tr>
                        <tr class="header-table" style="text-align: left;">
                            <th>Extend Cultivated land </th>
                            <td><input type="text" name="cultivatedLand" id="place" value="<?php echo $cultivatedlandExtent ?>">  </td>
                        </tr>
                        <tr class="header-table" style="text-align: left;">
                            <th>Extend Damaged land</th>
                            <td><input type="text" name="damageLand" id="place" value="<?php echo $damagedlandExtent ?>"> </td>
                        </tr>
                     
                        <tr class="header-table" style="text-align: left;">
                            <th>Add Photo </th>
                            <td> <input type="file" name="Photo" id="file" class="file" value="<?php $image ?>"></td>
                        </tr>
                        <tr class="header-table" style="text-align: left;">
                            <th>Track The location </th>
                            <td>  <button onclick="return getLocation()" id="track">Click Me</button> 
                           </td>
                        </tr>
                        <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;"></textarea>
                       <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;"></textarea>
     
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
                        
                    </table>
                </div>
                <div id="message">
                    <form action="" method="POST">
                         
                        <input type="submit" value="Update " name="Submit" onclick="return validation()">   
                        </div>
                       
                    </form>

                    <a id="back" href="../incident/viewReport?type=3&page=1&lang=1" style="color: white;">Back</a>




                </div>


            </div>
        </div>
</body>

</html>