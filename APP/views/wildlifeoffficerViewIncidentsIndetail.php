<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
  <link rel="stylesheet" href="../Public/css/wildlifeoffficerViewIncidentsIndetail.css">
  <script src="../Public/Javascript/login.js"></script>
  <script src="../Public/Javascript/viewReport.js"></script>
  <script src="../Public/Javascript/wildlifeofficer.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
  <title>View Incident Details</title>
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
        <li id="home"><a href="../">HOME</a></li>
        <li id="dashboard"><a href="../wildlifeofficer/viewDashboard">DASHBOARD</a></li>
        <li>
          <div class="dropdown-1" style="  padding-left:  300px ">
            <button class="dropbtn-1">Language</button>
            <div class="dropdown-content-1">
              <a href=" ">English</a>
              <a href=" ">සිංහල</a>
              <a href=" ">தமிழ்</a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="">View Profile</a>
            <a href="">Logout</a>
          </div>
        </li>
      </ul>
    </nav>

  </header>


  </div>

  <body>
    <div class="contanier_2">

      <div class="contanier_2-1">

      </div>


      <div class="row_first">
        <div class="col_1_first">
          <div class="row_in_firstrow">
            <div class="col_1_first"><img src="../Public/images/user_icon4-01.png" class="image"></div>
            <div class="col_2_first"> <br>User_ID : W001</div>
          </div>
        </div>
        <div class="col_2_first">Name : S.Disanayaka </div>



      </div>
      <div class="row">
        <div class="col_1"><?php echo $data[2]['description']  ?></div>
        <div class="col_2">Report_Number - <?php echo $data[2]['incidentID']  ?></div>
        <div class="col_2">Date - <?php echo $data[2]['date']  ?>
        </div>
      </div>
      <div class="row_last">
        <div class="col_2_last"><button type='submit' class='backButton' id='view' onclick=''>
            <a href='../wildlifeofficer/viewIncidents'>BACK</a>

        </div>
        <div class="col_2_last"><?php
                                if ($data[0]['status'] == 'pending') {
                                  $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none' name='acc' value=" . $data[2]['incidentID'] . "><button class='buttonAccept' id='acceptId' value='ACCEPT' name='accept'/>ACCEPT</button></form>";
                                } else {
                                  $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none'  name='can' value=" . $data[2]['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel'/>CANCEL</button></form>";
                                }
                                echo "$stat"; ?>
        </div>
        <div class="col_2_last">
          <?php
          if ($data[0]['status'] == 'pending') {
            $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none' name='acc' value=" . $data[0]['incidentID'] . "><button class='buttonSend' id='acceptId' value='ACCEPT' name='accept'/>SEND</button></form>";
          } else {
            $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none'  name='can' value=" . $data[0]['incidentID'] . "><button class='buttonSent' id='cancelId' value='CANCEl' name='cancel'/>SENT</button></form>";
          }
          echo "$stat"; ?> </div>

      </div>


      <div class="map" id="map">
        <div class="map">

          <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633098856489!5m2!1sen!2slk" width="100%" height="510" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>


      </div>
      <div class="last">

      </div>




    </div>

  </body>

</html>