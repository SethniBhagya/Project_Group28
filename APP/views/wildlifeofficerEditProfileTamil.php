<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['NIC'])) {
    header("Location:http://localhost/WildlifeCare/user/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype'] == 'Wildlife Officer') {
    } else {
    }
} else {
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerEditProfile.css">
    <script src="../Public/Javascript/login.js"></script>
    <script src="../Public/javascript/admin.js"></script>
    <!-- <script src="../Public/Javascript/viewReport.js"></script> -->
    <script src="../Public/javascript/wildlifeofficer.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
    <title>Edit Profile</title>
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
                <li id="homeTamil"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
                <li id="userPageSinhala"><a href="../wildlifeofficer/?lang=3"> &nbsp;பயனர் பக்கம் </a></li>
                <li id="incidentsTamil"><a href="../wildlifeofficer/viewIncidents?lang=3"> &emsp; சம்பவங்கள்</a></li>
                <li id="notificationsTamil"><a href="../wildlifeofficer/viewNotification?lang=3">அறிவிப்புகள்</a></li>
                <li id="dashboardTamil"><a href="../wildlifeofficer/viewDashboard?lang=3">தரவு பலகை</a></li>
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
                        <a href="../user/logout?lang=3">வெளியேறு</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>


    <body>
        <?php

        if (isset($_POST['save'])) {
        ?>

            <div id="message1" style="padding: 10px; background-color:aliceblue">


                <h2><img src="../Public/images/success-mesaage.png" style="width:25px;  height:25px">Your Profile Details Updated Sucessfully </h2><a href="../wildlifeofficer/viewProfile?lang=3" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">View Profile</a>
            </div>
        <?php

        }

        ?>
        <div id="note">
            <b> </b>
        </div>
        <div id="message" style="display: none;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h id="errorMessage"></h>
        </div>
        <div class="contanier_2">

            <div class="contanier_2-1">
                <div class="view_profile">
                    <h3><a href="../wildlifeofficer/viewProfile?lang=3">சுயவிவரம்</a></h3>
                </div>
                <div class="edit_profile">
                    <h3><a href="#">சுயவிவரத்தைத் திருத்து</a></h3>
                </div>
            </div>
            <form method="POST" action="../wildlifeofficer/updateProfile?lang=3">

                <div class="row firstName">
                    <div class="col_1">முதல் பெயர்</div>
                    <div class="col_2"><input type="text" class="text" id="fname" name="fname" required value="<?php echo $data[0]["Fname"] ?>" /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>
                <div class="row lastName">
                    <div class="col_1">கடைசி பெயர்</div>
                    <div class="col_2"><input type="text" class="text" id="lname" name="lname" required value="<?php echo $data[0]["Lname"] ?>" /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>

                <div class="row">

                </div>
                <div class="row address">
                    <div class="col_1">வீட்டு முகவரி</div>
                    <div class="col_2"><textarea class="text" id="address" name="address" rows="2" required><?php echo $data[0]["Address"]  ?>
        </textarea><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>
                <div class="row mobNum">
                    <div class="col_1">தொலைபேசி எண்</div>
                    <div class="col_2">
                        <input class="text" type="text" id="mobileNo" name="mobileNo" value="<?php echo $data[0]["mobileNo"] ?>" required />
                        <img src="../Public/images/edit.png" class="edit_icon">
                    </div>
                </div>
                <div class="row Email">
                    <div class="col_1">மின்னஞ்சல்</div>
                    <div class="col_2">
                        <input class="text" type="email" id="email" name="email" value="<?php echo $data[0]['email'] ?>" />
                        <img src="../Public/images/edit.png" class="edit_icon">
                    </div>
                </div>
                <div class="row Address">
                    <div class="col_1">அலுவலக முகவரி</div>
                    <div class="col_2"><input class="text" type="text" id="off_add" name="office_address" value="<?php echo $data[1]['address'] ?>" required /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>

                <div class="row">
                    <div class="cancel_button">

                        <input name="cancel" type="submit" onclick="" value="CANCEL" />
                    </div>

                    <div class="save_button">

                        <input name="save" type="submit" onclick="return submitRequestForm()" value="SAVE" />
                    </div>


                </div>

                <div class="last">

                </div>

            </form>

        </div>
        </div>
        <script src="../Public/Javascript/updateUser.js"></script>
    </body>

</html>