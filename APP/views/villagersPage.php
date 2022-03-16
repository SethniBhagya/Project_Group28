<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/alert.css">
    <link rel="stylesheet" href="../Public/css/villagerPage.css">
    <script src="../Public/Javascript/login1.js"></script>
    <title>Main Menu</title>
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
                 <li id="dashboard_1" style=" background-color: rgb(168, 175, 168); color:black;"><a href="../user/viewpage?lang=1">Main Menu</a></li>
                <li id="report_2"><a a href="../incident/index?lang=1">Report Incidents</a></li>
<<<<<<< HEAD

                <li id="special_1"><a href="../villager/viewSpecialNotice?lang=1">SpecialNotice </a></li>

          
=======
<<<<<<< HEAD

=======
>>>>>>> 670367b61c7a244c7953d5e2eb23ba9d4b08b548
 
                <li id="special_1"><a href="../villager/viewSpecialNotice?lang=1">SpecialNotice </a></li> 
 
                <li id="special_1"><a href="">SpecialNotice </a></li>
 
<<<<<<< HEAD



=======
>>>>>>> 670367b61c7a244c7953d5e2eb23ba9d4b08b548
>>>>>>> 13976e7baeef459d45eb6872e11c549fd324edc3
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">Language</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1">English</a>
                        <a href="?lang=2">සිංහල</a>
                        <a href="?lang=3">தமிழ்</a>
                    </div>
                </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
<<<<<<< HEAD
                        <a href="../user/editprofile?lang=1">View Profile</a>
=======
<<<<<<< HEAD

                    <a href="../user/editprofile?lang=1">View Profile</a>

=======
                    <a href="../user/editprofile?lang=1">View Profile</a>
>>>>>>> 670367b61c7a244c7953d5e2eb23ba9d4b08b548
>>>>>>> 13976e7baeef459d45eb6872e11c549fd324edc3
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
    <?php
    $result = $this->data;
    foreach ($result as $row) {
        $fname = $row['Fname'];
    } ?>
     <?php  
    if (isset($_GET['status'])) {
         if($_GET['status']  ==1){ 
    ?>

        <div id="message1" style="padding: 10px;  ">

            <img src="../Public/images/confirm.jpg" style="width:100px;  height:100px"><br>
            <button onclick="return getLocation()" class="login-btn"style=" border-radius: 10px; padding: 10px 10px; background-color:grey;  color: white;">Click Me Track location</button><br>
            <h1>Confirm Your Emergency Incident Report </h1>
            <form action="?lang=1" method="post"> 
            <textarea class="text" id="lat" name="latitude" rows="2" style="display: none;" ></textarea>
            <textarea class="text" id="lang" name="longitude" rows="2" style="display: none;" ></textarea>
            <input type="submit" value="Confirm" name="Submit"   onclick="return validation()">

   
             <a href="../user/viewpage?lang=1" id="close" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">Cancel</a>    </div>
             </form>
    <?php

    }}

    ?>
    <script>
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
            console.log(lat);
        }
         
    </script>
    <div class="name">
        <span class="dot2"><img src="../Public/images/user_icon.png" id="user-icon2"></span><label id="name"><b><b>Hello <?php echo " " . $fname; ?></b> </b></label>
    </div>

    <div class="main-view">
        <a href="../user/viewpage?lang=1&&status=1">
            <button class="report" >
                <h1> Emergency </br> Incident Report</h1>
                <div class="line"><img src="../Public/images/emergency.png"></div>

            </button>
        </a>
        <a href="../villager/viewNotification?lang=1">
            <button class="specialNotice">
                <div class="notification"><span class="dot-1"><img src="../Public/images/bell.png" alt="1" srcset=" "></span>
                </div>
                <h1> Notifications</h1>
                <div class="line"><img src="../Public/images/notifi.png"></div>
            </button>
        </a>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 670367b61c7a244c7953d5e2eb23ba9d4b08b548
 
>>>>>>> 13976e7baeef459d45eb6872e11c549fd324edc3
        <a href="../dashboard/index?lang=1">
            <button class="dashboard" ">
               <h1>Dashboard <div class=" line"><img src="../Public/images/dashIcon.png">
    </div>
    </h1>
    </button>
    </a>
    <a href="../incident/viewReport?type=1&page=1&lang=1">
        <button class="view" ">
                <h1>View Reported<div class=" line"><img src="../Public/images/list.png"></div>
            </h1>
        </button>
    </a>
 
<<<<<<< HEAD

    </div>
=======
     </div>
<<<<<<< HEAD

      <a href="../dashboard/index?lang=1">
            <button class="dashboard" ">
                <h1>Statistical</br> Analyze Board<div class=" line"><img src="../Public/images/dashIcon.png">
    </div>
    </h1>
    </button>
    </a>
    <a href="../incident/viewReport?type=1&page=1&lang=1">
        <button class="view" ">
                <h1>View Reported<div class=" line"><img src="../Public/images/list.png"></div>
            </h1>
        </button>
    </a>


    </div>
    =======

   <!--  <a href="../dashboard/index?lang=1">
        <button class="dashboard" ">
                <h1>Statistical</br> Analyze Board<div class=" line"><img src="../Public/images/dashIcon.png">
            </div>
            </h1>
        </button>
    </a>
    <a href="../incident/viewReport?type=1&page=1&lang=1">
        <button class="view" ">
                <h1>View Reported<div class=" line"><img src="../Public/images/list.png"></div>
            </h1>
        </button>
    </a>


    </div>
    >>>>>>> 408284e2034116f17d4471317d61da03bd43b558
>>>>>>> 0a4ebcbb4765b7d265a0b6b68b476db5a65d64ff -->
=======
>>>>>>> 670367b61c7a244c7953d5e2eb23ba9d4b08b548
>>>>>>> 13976e7baeef459d45eb6872e11c549fd324edc3
    <!-- <a class="View-Report" href="../incident/viewReport?type=1&page=1">
        <h2>View Reported Incidents</h2>
    </a> -->
</body>

</html>