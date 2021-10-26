<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/adminHeader.css">
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

      <ul class="nav-menu">
        <!-- <li><h6>BACK</h6></li>
            <li><h6>DASHBOARD</h6></li>
            <li><h6>SPECIAL NOTICES</h6></li> -->
        <li id="home" class="nav-menu-item"><a href="../">Home</a></li>
        <li id="dashboard" class="nav-menu-item"><a href="../admin/dashboard">Dashboard</a></li>
        
          </div>
        </li>
        <li class="dropdown">
          <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="../wildlifeofficer/viewProfile">View Profile</a>
            <a href="">Logout</a>
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

      

      
      <div>

        <img src="../Public/images/user_icon4-01.png" class="image">
        <div class="row1"><p>Sasindu Sahan Sankalpa</p></div>
      </div>
      <div class="row">
        <div class="col_1">First Name</div>
        <div class="col_2"><p>Sasindu Sahan</p></div>
      </div>
      <div class="row">
        <div class="col_1">Last Name</div>
        <div class="col_2"><p>Sankalpa</p></div>
      </div>
      <div class="row">
        <div class="col_1">NIC</div>
        <div class="col_2"><p>9912376V</p></div>
      </div>
      <div class="row">
        <div class="col_1">Gender</div>
        <div class="col_2"><p>Male</div>
      </div>
      <div class="row">
        <div class="col_1">Date of Birth</div>
        <div class="col_2"><p>12/12/1999</p></div>
      </div>
      <div class="row">
        <div class="col_1">Home Address</div>
        <div class="col_2"><p>No23, Anuradhapura</p></div>
      </div>
      <div class="row">
        <div class="col_1">Email</div>
        <div class="col_2"><p>sasindusahan@gmail.com</p></div>
      </div>
      <div class="row">
        <div class="col_1">Office Address</div>
        <div class="col_2"><p>No23, Anuradhapura</p></div>
      </div>
      <div class="row">
        <div class="col_1">Telephone Number</div>
        <div class="col_2"><p>0770610851</p></div>
      </div>
      <div class="row1">

        <a href="../admin/viewUser"><button>BACK</button></a>

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