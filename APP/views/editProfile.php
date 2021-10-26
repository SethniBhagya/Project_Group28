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
            <li id="home_2"><a href="../">Home</a></li>
                <li id="dashboard_1"   ><a href="../user/viewpage?user=villager" >Dashboard</a></li>
                <li id="report_2"><a href="../incident/index?lang=1">Report Incidents</a></li>
                <li id="special_1"><a href="../villager/viewSpecialNotice?lang=1">SpecialNotice </a></li> 
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
                       <a href="../user/editprofile">View Profile</a>
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
          <h3 style="color: white; " ><a href=" ">Profile</a></h3>
        </div>
        <div class="edit_profile">
          <h3 ><a style="color: white;"  href="#">Edit Profile</a></h3>
        </div>
      </div>
      <form class="form2" action=""   method="post">
   	
     <table id="form1">
      <tr>
        <th>
            <label for="fname" style="font-weight: 100;">First Name</label>
        </th> 
        <th>  
          <input type="text" class="text" id="fname" name="fname"  value="<?php echo "kaviska" ?>"/>
        </th>
      </tr> 
      <tr>
        <th>
          <label for="lname" style="font-weight: 100;"  >Last Name</label>
        </th> 
        <th>
          <input type="text" class="text" id="lname" name="lname" value="<?php echo $lname ?>"/>
        </th>
      </tr>
       
   
      <tr>
        <th>
          <label for="dob" style="font-weight: 100;"  >Date of Birth</label>
        </th>
      
        <th>
          <input class="text" type="date" id="dob" name="dob" value="<?php echo   $birthDay ?>"/>
        </th>
      </tr>
      
       
      <tr>
        <th> 
          <label for="address" style="font-weight: 100;">Address</label>
        </th>  
        <th>
          <textarea class="text" id="address" name="address" rows="2" ><?php echo   $address ?></textarea>
        </th>
      </tr>
      <tr>
        <th>
          <label for="province" style="font-weight: 100;">Province</label>
        </th>
         <th>
          <select class="text" name="province" id="province" >
            <option value="">  Choose here</option>
            <option value="central province">Central Province</option>
            <option value="eastern province">Eastern Province</option>
            <option value="northern province">Northern Province</option>
            <option value="southern  province">Southern Province</option>
            <option value="western province">Western Province</option>
            <option value="north western province"> North Western Province </option>
            <option value="north central province"> North Central Province </option>
            <option value="uva province">Uva Province</option>
            <option value="sabaragamuwa province"> Sabaragamuwa Province </option>
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
            <option value="">  Choose here</option>
            <option value="Gampaha">Gampaha District</option>
            <option value="Colombo">Colombo</option>
            <option value="Kalutara">Kalutara</option>
            <option value="Anuradhapura">Anuradhapura District</option>
            <option value="Polonnaruwa">Polonnaruwa</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Mannar">Mannar</option>
            <option value="Mullaitivu">Mullaitivu District</option>
            <option value="Vavuniya">Vavuniya</option>
            <option value="Puttalam">Puttalam</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Matale">Matale</option>
            <option value="Kandy">Kandy</option>
            <option value="Nuwara Eliya">Nuwara Eliya District</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Ratnapura">Ratnapura</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Batticaloa">Batticaloa</option>
            <option value="Ampara">Ampara</option>
            <option value="Badulla">Badulla</option>
            <option value="Monaragala">Monaragala</option>
            <option value="Hambantota">Hambantota</option>
            <option value="Matara">Matara</option>
            <option value="Galle">Galle</option>
          </select>
        </th>
      </tr>
      <tr> 
        <th>
          <label  for="gndivision" style="font-weight: 100;" >Gramaniladari Division</label>
        </th>
      <!-- </tr> -->
      <!-- <tr> -->
        <th><select class="text" name="gndivision" id="district" style="font-weight: 100;">
          <option value="" >Choose here</option>
          <?php
             
            foreach ($division  as $row){ ?>
            <option value="<?php echo $row['name'];?>" ><?php echo $row['name']; ?></option>       
          <?php }?>  </select>
              </th>
      </tr>
       
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >Email</label>
        </th>
       
        <th><input class="text" type="email" id="email" name="email" value="<?php echo   $email ?>"  /></th>
      </tr>
      <tr>
        <th>
          <label for="email" style="font-weight: 100;" >Telephone Number</label>
        </th>
      <!-- </tr>
      <tr> -->
        <th><input class="text" type="tp" id="tp" name="tp" value="0<?php echo   $mobileNumber ?>" /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >Old Password</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder=" Type a Old password"  /></th>
      </tr>
      <tr>
        <th>
          <label for="password" style="font-weight: 100;" >New Password</label>
        <!-- </th> -->
       
        <th><input class="text" type="password" id="password" name="password" placeholder="  Type New password for your profile"/></th>
      </tr>
      <tr>
      <tr>
        <th>
          <label for="cpassword" style="font-weight: 100;" >Confirm Password</label>
        </th>
      <!-- <tr> -->
        <th><input class="text" type="password" id="cpassword" name="cpassword" placeholder="  Reype the password" /></th>
      </tr>
      <!-- <tr>
        <td></td>
      </tr> -->
       </table>
       <div class="sumbit2">
          <input
            type="submit" name="submit" onclick="return validation()"
            value="Update"/>
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