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
      <li id="home_2" style="right:750px"  ><a href="../?lang=3" >முகப்பு பக்கம்</a></li>

                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?lang=3" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="../villager/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1&report=1">English</a>
                        <a href="?lang=2&report=1">සිංහල</a> 
                        <a href="?lang=3&report=1">தமிழ்</a>
                    </div>
                  </div> 
               </div> -->
          <span class="dot"  style="margin-right:10px;  margin-top:  10px;"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
          <div id="myDropdown" class="dropdown-content">
                   <a href="../villager/editprofile?lang=3">View Profile</a> 
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
          <h3 style="color: white; " ><a href=" ">சுயவிவரம்</a></h3>
        </div>
        <div class="edit_profile">
          <h3 ><a style="color: white;"  href="#">சுயவிவரத்தைத் திருத்து</a></h3>
        </div>
      </div>
      <form class="form2" action=""   method="post">
   	
     <table id="form1">
      <tr>
        <th>
            <label for="fname" style="font-weight: 100;">முதல் பெயர்</label>
        </th> 
        <th>  
          <input type="text" class="text" id="fname" name="fname"  value="<?php $fname ?>"/>
        </th>
      </tr> 
      <tr>
        <th>
          <label for="lname" style="font-weight: 100;"  >கடைசி பெயர்</label>
        </th> 
        <th>
          <input type="text" class="text" id="lname" name="lname" value="<?php echo $lname ?>"/>
        </th>
      </tr>
       
   
      <tr>
        <th>
          <label for="dob" style="font-weight: 100;"  >பிறந்த தேதி</label>
        </th>
      
        <th>
          <input class="text" type="date" id="dob" name="dob" value="<?php echo   $birthDay ?>"/>
        </th>
      </tr>
      
       
      <tr>
        <th> 
          <label for="address" style="font-weight: 100;">முகவரி</label>
        </th>  
        <th>
          <textarea class="text" id="address" name="address" rows="2" ><?php echo   $address ?></textarea>
        </th>
      </tr>
      <tr>
        <th>
          <label for="province" style="font-weight: 100;">மாகாணம்</label>
        </th>
         <th>
          <select class="text" name="province" id="province" >
            <option value="">இங்கே தேர்வு செய்யவும்e</option>
            <option value="central province">மத்திய மாகாணம்</option>
            <option value="eastern province">கிழக்கு மாகாணம்</option>
            <option value="northern province">வட மாகாணம்</option>
            <option value="southern  province">Southern Province</option>
            <option value="western province">தென் மாகாணம்</option>
            <option value="north western province">வடமேல் மாகாணம்</option>
            <option value="north central province">வட மத்திய மாகாணம்</option>
            <option value="uva province">ஊவா மாகாணம்</option>
            <option value="sabaragamuwa province">சப்ரகமுவா மாகாணம் </option>
          </select>
        </th>
      </tr>
      <tr>
        <th>
          <label for="district" style="font-weight: 100;" >மாவட்டம்</label>
        </th>
      <!-- <tr> -->
        <th>
          <select class="text" name="district" id="district">
            <option value="">இங்கே தேர்வு செய்யவும்</option>
            <option value="Gampaha">கம்பஹா மாவட்டம்</option>
            <option value="Colombo">கொழும்பு</option>
            <option value="Kalutara">களுத்துறை</option>
            <option value="Anuradhapura">அனுராதபுரம் மாவட்டம்</option>
            <option value="Polonnaruwa">பொலன்னறுவை</option>
            <option value="Jaffna">யாழ்</option>
            <option value="Kilinochchi">கிளிநொச்சி</option>
            <option value="Mannar">மன்னார்</option>
            <option value="Mullaitivu">முல்லைத்தீவு மாவட்டம்</option>
            <option value="Vavuniya">வவுனியா</option>
            <option value="Puttalam">புத்தளம்</option>
            <option value="Kurunegala">குருநாகல்</option>
            <option value="Matale">மாத்தளை</option>
            <option value="Kandy">கண்டி</option>
            <option value="Nuwara Eliya">நுவரெலியா மாவட்டம்</option>
            <option value="Kegalle">கேகாலை</option>
            <option value="Ratnapura">இரத்தினபுரி</option>
            <option value="Trincomalee">திருகோணமலை</option>
            <option value="Batticaloa">மட்டக்களப்பு</option>
            <option value="Ampara">அம்பாறை</option>
            <option value="Badulla">பதுளை</option>
            <option value="Monaragala">மொனராகலை</option>
            <option value="Hambantota">ஹம்பாந்தோட்டை</option>
            <option value="Matara">மாத்தறை</option>
            <option value="Galle">காலி</option>
          </select>
        </th>
      </tr>
      <tr> 
        <th>
          <label  for="gndivision" style="font-weight: 100;" >கிராம அலுவலர் பிரிவு</label>
        </th>
      <!-- </tr> -->
      <!-- <tr> -->
        <th><select class="text" name="gndivision" id="district" style="font-weight: 100;">
          <option value="" >இங்கே தேர்வு செய்யவும்</option>
          <?php
             
            foreach ($division  as $row){ ?>
            <option value="<?php echo $row['name'];?>" ><?php echo $row['name']; ?></option>       
          <?php }?>  </select>
              </th>
      </tr>
       
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >மின்னஞ்சல்</label>
        </th>
       
        <th><input class="text" type="email" id="email" name="email" value="<?php echo   $email ?>"  /></th>
      </tr>
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >தொலைபேசி எண்</label>
        </th>
      <!-- </tr>
      <tr> -->
        <th><input class="text" type="tp" id="tp" name="tp" value="0<?php echo   $mobileNumber ?>" /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >பழைய கடவுச்சொல்</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder="பழைய கடவுச்சொல்லை உள்ளிடவும்"  /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >புதிய கடவுச்சொல்</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder="உங்கள் சுயவிவரத்திற்கு புதிய கடவுச்சொல்லை உள்ளிடவும்"/></th>
      </tr>
      <tr>
      <tr>
        <th>
          <label for="cpassword" style="font-weight: 100;" >கடவுச்சொல்லை உறுதிப்படுத்தவும்</label>
        </th>
      <!-- <tr> -->
        <th><input class="text" type="password" id="cpassword" name="cpassword" placeholder="கடவுச்சொல்லை மீண்டும் செய்யவும்" /></th>
      </tr>
      <!-- <tr>
        <td></td>
      </tr> -->
       </table>
       <div class="sumbit2">
          <input
            type="submit" name="submit" onclick="return validation()"
            value="புதுப்பி"/>
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