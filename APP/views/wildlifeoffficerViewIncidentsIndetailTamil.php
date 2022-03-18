<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['NIC'])) {
  header("Location:http://localhost/WildlifeCare/user/index");
}
if (isset($_SESSION['jobtype'])) {
  if ($_SESSION['jobtype'] == 'Wildlife Officer') {
  } else {
    header("Location:http://localhost/WildlifeCare/user/mustLogout");
  }
} else {
  header("Location:http://localhost/WildlifeCare/user/mustLogout");
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
  <link rel="stylesheet" href="../Public/css/wildlifeoffficerViewIncidentsIndetail.css">
  <script src="../Public/Javascript/login.js"></script>
  <script src="../Public/Javascript/viewReport.js"></script>
  <script src="../Public/Javascript/wildlifeofficer.js"></script>
  <script src="../Public/javascript/admin.js"></script>
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
        <li id="home"><a href="../?lang=3">முகப்பு பக்கம்</a></li>
        <li id="userPageSinhala"><a href="../wildlifeofficer/?lang=3"> &nbsp;பயனர் பக்கம் </a></li>
        <li id="incidentsTamil"><a href="../wildlifeofficer/viewIncidents?lang=3"> &emsp; சம்பவங்கள்</a></li>
        <li id="notifications"><a href="../wildlifeofficer/viewNotification?lang=3">அறிவிப்புகள்</a></li>
        <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=3">தரவு பலகை</a></li>
        <li>
          <div class="dropdown-1" style="  padding-left:  300px ">
            <button class="dropbtn-1">மொழி</button>
            <div class="dropdown-content-1">
              <?php
              echo "
                                <a href='?lang=1&index=" . $_GET['index'] . "&name=" . $_GET['name'] . "'>English</a>
                                <a href='?lang=2&index=" . $_GET['index'] . "&name=" . $_GET['name'] .  "'>සිංහල</a>
                                <a href='?lang=3&index=" . $_GET['index'] . "&name=" . $_GET['name'] .  "'>தமிழ்</a> "
              ?>
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


  </div>

  <div class="contanier_2">
    <div class="contanier_2-1">
      <?php if (isset($_POST['send'])) { ?>
        <div id="message1" style="padding: 10px; background-color:aliceblue">
          <h1>உங்கள் செய்தி கால்நடை மருத்துவருக்கு அனுப்பப்பட்டது</h1>
          <a href="../wildlifeofficer/viewIncidents?lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">சரி</a>
        </div>
      <?php } ?>
    </div>
    <div class="row_first">
      <div class="col_1_first">
        <div class="row_in_firstrow">
          <div class="col_1_first"><img src="../Public/images/user_icon4-01.png" class="image"></div>
          <div class="col_2_first"> <br>பயனர்_ஐடி : W001</div>
        </div>
      </div>
      <div class="col_2_first"><b>ஏற்றுக்கொள்ளப்பட்ட வனவிலங்கு அதிகாரி :</b><br> <?php echo $_GET['name'] ?>
      </div>
    </div>
    <div class="row">


      <div class="col_1"><?php echo $data[0][$_GET['index']]['description']  ?></div>
      <div class="col_2">அறிக்கை_எண் - <?php echo $data[0][$_GET['index']]['incidentID']  ?></div>
      <div class="col_2">தேதி - <?php echo $data[0][$_GET['index']]['date']  ?>
      </div>
    </div>
    <div class="row_last">
      <!-- <div class="col_2_last"><button type='submit' class='backButton' id='view' onclick=''>
            <a href='../wildlifeofficer/viewIncidents?lang=1'>BACK</a>
        </div> -->

      <div class="col__last"><?php
                              if ($data[0][$_GET['index']]['status'] == 'pending') {
                                $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none' name='acc' value=" . $data[0][$_GET['index']]['incidentID'] . "><button class='buttonAccept' id='acceptId' value='ACCEPT' name='accept'/>ACCEPT</button></form>";
                              } else {
                                $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest'><input type='text' style='display:none'  name='can' value=" . $data[0][$_GET['index']]['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel'/>CANCEL</button></form>";
                              }
                              ?>
        <br>
        <div style="text-align: left;">சம்பவத்தை கால்நடை மருத்துவருக்கு அனுப்பவும்?</div>
      </div>

      <?php
      if ($data[0][$_GET['index']]['sendToVetStatus'] == 'notvisible') {
        echo "<form method='POST' action= echo '../wildlifeofficer/sendToVet?id={$data[0][$_GET['index']]['incidentID']}&lang=1' >

        <div class='save_button'>
          <input name='send' class='buttonAccept' type='submit' onclick='' value='SEND' />
        </div>

      </form>";
      } else {
        echo "ஏற்கனவே அனுப்பப்பட்டது";
      }
      ?>

      <input type="button" id="submitBtn" onclick="getLocation()" value="Track current Location" />




      <form id="myForm">


        <input type='text' name='lat' id='lat' style="display: none;">
        <input type='text ' name='ln' id='ln' style="display: none;">
        <input type="button" id="Btn" value="route" style="display: none; " />



      </form>

    </div>
    <div class="map" id="map-canvas" style="height: 400px;">

    </div>
    <div class="last">
    </div>
  </div>
  <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCSrUrvFB7-sGbuP_VZG5ADl9tZswY7XN8&callback=mapLocation&v=weekly' async></script>


</body>

</html>