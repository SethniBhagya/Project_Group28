<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/header.css">
  <link rel="stylesheet" href="../Public/css/editProfile.css">
  <script src="../Public/Javascript/login1.js"></script>
  <!-- <script src="../Public/Javascript/viewReport.js"></script> -->
 
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
      <li id="home_2"><a href="../?lang=2">මුල් පිටුව</a></li>
                <li id="dashboard_1"   ><a href="../user/viewpage?lang=2" >මුල් පුවරුව</a></li>
                <li id="report_2" style=" padding-right:20px ; right:345px  "><a href="../incident/index?lang=2"> වර්තා කිරීම</a></li>
                <li id="special_1"><a href="../user/viewSpecialNotice?lang=2">විශේෂ දැන්වීම</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">භාෂාව</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=4">English</a>
                        <a href="?lang=2&report=4">සිංහල</a> 
                        <a href="?lang=3&report=4">தமிழ்</a>
                    </div>
                  </div>
                <div class="dropdown-1">
                    <button class="dropbtn-1" style="margin-top:  -50px;">Language</button>
                    <div class="dropdown-content-1">
                      <a href="?lang=1&report=1">English</a>
                        <a href="?lang=2&report=1">සිංහල</a> 
                        <a href="?lang=3&report=1">தமிழ்</a>
                    </div>
                  </div>
          <span class="dot"  style="margin-right:10px;  margin-top:  10px;"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
          <div id="myDropdown" class="dropdown-content">
          <a href="../user/editprofile?lang=2">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    
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
        <?php  $result = $this->userData;
          // print_r($result);
          foreach ( $result as $row){
              $fname = $row['Fname'];
              $lname = $row['Lname'];
              $birthDay = $row['BOD'];
              $address =  $row['Address'];
              $mobileNumber =  $row['mobileNo'];
              $email = $row['email'];
          } ?>

        <!-- ?> -->
      </div>
      <div class="contanier_2-1">
        <div class="view_profile">
          <h3 style="color: white; " ><a href=" ">පැතිකඩ</a></h3>
        </div>
        <div class="edit_profile">
          <h3 ><a style="color: white;"  href="#">පැතිකඩ සංස්කරණය කරන්න</a></h3>
        </div>
      </div>
      <form class="form2" action=""   method="post">
   	
     <table id="form1">
      <tr>
        <th>
            <label for="fname" style="font-weight: 100;">මුල් නම</label>
        </th> 
        <th>  
          <input type="text" class="text" id="fname" name="fname"  value="<?php echo  $fname ?>"/>
        </th>
      </tr> 
      <tr>
        <th>
          <label for="lname" style="font-weight: 100;"  >අවසන් නම</label>
        </th> 
        <th>
          <input type="text" class="text" id="lname" name="lname" value="<?php echo $lname ?>"/>
        </th>
      </tr>
       
   
      <tr>
        <th>
          <label for="dob" style="font-weight: 100;"  >උපන්දිනය</label>
        </th>
      
        <th>
          <input class="text" type="date" id="dob" name="dob" value="<?php echo   $birthDay ?>"/>
        </th>
      </tr>
      
       
      <tr>
        <th> 
          <label for="address" style="font-weight: 100;">ලිපිනය</label>
        </th>  
        <th>
          <textarea class="text" id="address" name="address" rows="2" ><?php echo   $address ?></textarea>
        </th>
      </tr>
      <tr>
        <th>
          <label for="province" style="font-weight: 100;">පළාත</label>
        </th>
         <th>
         <select class="text" name="province" id="province">
            <option value="">මෙතැනින් තෝරන්න</option>
            <option value="central province">මධ්‍යම පළාත</option>
            <option value="eastern province">නැගෙනහිර පළාත</option>
            <option value="northern province">උතුරු පළාත</option>
            <option value="southern  province">දකුණු පළාත</option>
            <option value="western province">බස්නාහිර පළාත</option>
            <option value="north western province">
            වයඹ පළාත
            </option>
            <option value="north central province">
            උතුරු මැද පළාත
            </option>
            <option value="uva province">Uva Province</option>
            <option value="sabaragamuwa province">
            සබරගමුව පළාත
            </option>
          </select>
        </th>
      </tr>
      <tr>
        <th>
          <label for="district" style="font-weight: 100;" >District</label>
        </th>
      <!-- <tr> -->
        <th>
        <select class="text" name="district" id="district">
            <option value="">  මෙතැනින් තෝරන්න</option>
            <option value="Gampaha">ගම්පහ දිස්ත්‍රික්කය</option>
            <option value="Colombo">කොළඹ</option>
            <option value="Kalutara">කළුතර</option>
            <option value="Anuradhapura">අනුරාධපුර දිස්ත්‍රික්කය</option>
            <option value="Polonnaruwa">පොළොන්නරුව</option>
            <option value="Jaffna">යාපනය</option>
            <option value="Kilinochchi">කිලිනොච්චි</option>
            <option value="Mannar">මන්නාරම</option>
            <option value="Mullaitivu">මුලතිව් දිස්ත්රික්කය</option>
            <option value="Vavuniya">වවුනියාව</option>
            <option value="Puttalam">පුත්තලම</option>
            <option value="Kurunegala">කුරුණෑගල</option>
            <option value="Matale">මාතලේ</option>
            <option value="Kandy">මහනුවර</option>
            <option value="Nuwara Eliya">නුවරඑළිය දිස්ත්‍රික්කය</option>
            <option value="Kegalle">කෑගල්ල</option>
            <option value="Ratnapura">රත්නපුරය</option>
            <option value="Trincomalee">ත්රිකුණාමලය</option>
            <option value="Batticaloa">මඩකලපුව</option>
            <option value="Ampara">අම්පාර</option>
            <option value="Badulla">බදුල්ල</option>
            <option value="Monaragala">මොනරාගල</option>
            <option value="Hambantota">හම්බන්තොට</option>
            <option value="Matara">මාතර</option>
            <option value="Galle">ගාල්ල</option>
          </select>
        </th>
      </tr>
      <tr> 
        <th>
          <label  for="gndivision" style="font-weight: 100;" >ග්‍රාම නිලධාරී වසම</label>
        </th>
      <!-- </tr> -->
      <!-- <tr> -->
        <th><select class="text" name="gndivision" id="district" style="font-weight: 100;">
          <option value="" >මෙතැනින් තෝරන්න</option>
          <?php
             
            foreach ($division  as $row){ ?>
            <option value="<?php echo $row['name'];?>" ><?php echo $row['name']; ?></option>       
          <?php }?>  </select>
              </th>
      </tr>
       
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >විද්යුත් තැපෑල</label>
        </th>
       
        <th><input class="text" type="email" id="email" name="email" value="<?php echo   $email ?>"  /></th>
      </tr>
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >දුරකථන අංකය</label>
        </th>
      <!-- </tr>
      <tr> -->
        <th><input class="text" type="tp" id="tp" name="tp" value="0<?php echo   $mobileNumber ?>" /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >පැරණි මුරපදය</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder=" පැරණි මුරපදයක් ටයිප් කරන්න"  /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >නව මුරපදය</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder="ඔබේ පැතිකඩ සඳහා නව මුරපදයක් ඇතුළත් කරන්න"/></th>
      </tr>
      <tr>
      <tr>
        <th>
          <label for="cpassword" style="font-weight: 100;" >මුරපදය තහවුරු කරන්න</label>
        </th>
      <!-- <tr> -->
        <th><input class="text" type="password" id="cpassword" name="cpassword" placeholder=" මුරපදය නැවත ලියන්න" /></th>
      </tr>
      <!-- <tr>
        <td></td>
      </tr> -->
       </table>
       <div class="sumbit2">
          <input
            type="submit" name="submit" onclick="return validation()"
            value="යාවත්කාලීන කරන්නs"/>
       </div>  
       <!-- <div class="sumbit2">
          <input
            type="submit" name="submit" onclick="return validation()"
            value="Update"/>
       </div>     -->
      </form>    
    </div>
    </div>
  </body>

</html>