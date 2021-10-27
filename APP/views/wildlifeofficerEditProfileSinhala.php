<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerEditProfile.css">
    <script src="../Public/Javascript/login.js"></script>
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

                <li id="home"><a href="../">මුල් පිටුව</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard">දත්ත පුවරුව</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">භාෂාව</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=2">පරිශීලක පැතිකඩ</a>
                        <a href="../user/index?lang=2">ඉවත් වීම</a>
                    </div>
                </li>
            </ul>
        </nav>

    </header>
    <!-- <div class="nav_edit">
      <div class="links_to_pages">
        <ul>
          <li>BACK</li>
          <li>SPECIAL NOTICES</li>
          <li>DASHBOARD</li>
        </ul>
      </div>
    </div> -->

    <body>
        <div class="contanier_2">
            <div>
                <?php if (isset($data[0]['message'])) {
                    echo $data[0]['message'];
                }

                ?>
            </div>
            <div class="contanier_2-1">
                <div class="view_profile">
                    <h3><a href="../wildlifeofficer/viewProfile?lang=2">පරිශීලක පැතිකඩ</a></h3>
                </div>
                <div class="edit_profile">
                    <h3><a href="#">පරිශීලක පැතිකඩ යාවත්කාලීන කිරීම</a></h3>
                </div>
            </div>
            <form method="POST" action="../wildlifeofficer/updateProfile?lang=2">

                <div class="row">
                    <div class="col_1">මුල් නම</div>
                    <div class="col_2"><input type="text" class="text" id="fname" name="fname" required value="<?php echo $data[0]["Fname"] ?>" /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>
                <div class="row">
                    <div class="col_1">අවසන් නම</div>
                    <div class="col_2"><input type="text" class="text" id="lname" name="lname" required value="<?php echo $data[0]["Lname"] ?>" /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>
                <!-- <div class="row">
        <div class="col_1">NIC</div>
        <div class="col_2">99v</div>
      </div> -->
                <!-- <div class="row">
        <div class="col_1">Gender</div>
        <div class="col_2">
            <input type="radio" id="male" name="gender" value="Male" required <?php
                                                                                if ($data[0]['gender'] == 'M') { ?>
             checked
           <?php } ?> 
            />
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female"  
            <?php
            if ($data[0]['gender'] == 'F') { ?>
             checked
           <?php } ?> 
             />
            <label for="female">Female</label></div>
      </div> -->
                <div class="row">
                    <div class="col_1">උපන්දිනය</div>
                    <div class="col_2">
                        <input class="text" type="date" id="dob" name="dob" required value="<?php echo $data[0]['BOD'] ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col_1">නිවසේ ලිපිනය</div>
                    <div class="col_2"><textarea class="text" id="address" name="address" rows="2" required><?php echo $data[0]["Address"]  ?>
        </textarea><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>
                <div class="row">
                    <div class="col_1">දුරකථන අංකය</div>
                    <div class="col_2">
                        <input class="text" type="text" id="mobileNo" name="mobileNo" value="<?php echo $data[0]["mobileNo"] ?>" required />
                        <img src="../Public/images/edit.png" class="edit_icon">
                    </div>
                </div>
                <div class="row">
                    <div class="col_1">විද්‍යුත් තැපෑල</div>
                    <div class="col_2">
                        <input class="text" type="email" id="email" name="email" value="<?php echo $data[0]['email'] ?>" />
                        <img src="../Public/images/edit.png" class="edit_icon">
                    </div>
                </div>
                <div class="row">
                    <div class="col_1">කාර්යාල ලිපිනය</div>
                    <div class="col_2"><input class="text" type="text" id="off_add" name="office_address" value="<?php echo $data[1]['address'] ?>" required /><img src="../Public/images/edit.png" class="edit_icon"></div>
                </div>

                <div class="row">
                    <div class="cancel_button">

                        <input name="cancel" type="submit" onclick="" value="CANCEL" />
                    </div>

                    <div class="save_button">

                        <input name="save" type="submit" onclick="" value="SAVE" />
                    </div>


                </div>

                <div class="last">

                </div>

            </form>

        </div>
        </div>
    </body>

</html>