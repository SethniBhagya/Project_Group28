<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['NIC'])) {
    header("Location:http://localhost/WildlifeCare/user/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype']=='Wildlife Officer') {
       
    }else {
        header("Location:http://localhost/WildlifeCare/user/mustLogout");
    }
}else {
    header("Location:http://localhost/WildlifeCare/user/mustLogout");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerViewProfile.css">
    <script src="../Public/Javascript/login.js"></script>
    <!-- <script src="../Public/Javascript/viewReport.js"></script> -->
    <script src="../Public/javascript/wildlifeofficer.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
    <title>User Profile</title>
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
                <li id="home"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
                <li id="userPageSinhala"><a href="../wildlifeofficer/?lang=3"> &nbsp;பயனர் பக்கம் </a></li>
                <li id="incidentsTamil"><a href="../wildlifeofficer/viewIncidents?lang=3"> &emsp; சம்பவங்கள்</a></li>
                <li id="notifications"><a href="../wildlifeofficer/viewNotification?lang=3">அறிவிப்புகள்</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=3">தரவு பலகை</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">மொழி</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=3">பயனர் சுயவிவரம்</a>
                        <a href="../user/index">வெளியேறு</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>
    <!-- <nav class="links_to_pages">
      <ul>
        <li>BACK</li>
        <li>SPECIAL NOTICES</li>
        <li>DASHBOARD</li>
      </ul>
    </nav> -->

    </div>

    <body>
        <div class="contanier_2">
            <div class="row1">
                <?php if (isset($data[0]['message'])) {
                    echo $data[0]['message'];
                    unset($data[0]['message']);
                }


                ?>
            </div>

            <div class="contanier_2-1">
                <div class="view_profile">
                    <h3><a href="#">சுயவிவரம்</a></h3>
                </div>
                <div class="edit_profile">
                    <h3><a href="../wildlifeofficer/editProfile?lang=3">சுயவிவரத்தைத் திருத்தவும்</a></h3>
                </div>
            </div>
            <div>

                <img src="../Public/images/user_icon4-01.png" class="image">
                <div class="row1"><?php echo $data[0]["Fname"] . " " . $data[0]["Lname"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">முதல் பெயர்</div>
                <div class="col_2"><?php echo $data[0]["Fname"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">கடைசி பெயர்</div>
                <div class="col_2"><?php echo $data[0]["Lname"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">என்ஐசி</div>
                <div class="col_2"><?php echo $data[0]["NIC"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">பாலினம்</div>
                <div class="col_2"><?php
                                    if ($data[0]['gender'] == 'F') {
                                        echo "Female";
                                    } else {
                                        echo "Male";
                                    }
                                    ?></div>
            </div>
            <div class="row">
                <div class="col_1">பிறந்த தேதி</div>
                <div class="col_2"><?php echo $data[0]["BOD"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">வீட்டு முகவரி</div>
                <div class="col_2"><?php echo $data[0]["Address"]  ?></div>
            </div>
            <div class="row">
                <div class="col_1">மின்னஞ்சல்</div>
                <div class="col_2"><?php echo $data[0]["email"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">அலுவலக முகவரி</div>
                <div class="col_2"><?php echo $data[1]["address"] ?></div>
            </div>
            <div class="row">
                <div class="col_1">தொலைபேசி எண்</div>
                <div class="col_2"><?php echo $data[0]["mobileNo"] ?></div>
            </div>
            <div class="row1">

                <a href="../wildlifeofficer/?lang=3">மீண்டும்</a>

            </div>



            <div class="last">

            </div>
            <!-- <div>
   <?php
    print_r($data);
    ?>
 </div>
     -->
            </form>

        </div>
        </div>
    </body>

</html>