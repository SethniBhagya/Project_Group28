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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficerViewIncidents.css" />
  <script src="../Public/Javascript/login.js"></script>
  <script src="../Public/Javascript/viewReport.js"></script>
  <script src="../Public/javascript/wildlifeofficer.js"></script>
  <script src="../Public/javascript/admin.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
  <title>Report View</title>
</head>

<body>
  <header id="main">
    <img src="../Public/images/icon.png" alt="icon" id="icon" />
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
              $count = 0;
              echo "
                                <a href='?lang=1&index=" . $count . "'>English</a>
                                <a href='?lang=2&index=" . $count .  "'>සිංහල</a>
                                <a href='?lang=3&index=" . $count . "'>தமிழ்</a> "
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

  <!-- <div class="links_to_pages">
      <ul>
        <li>BACK</li>
        <li>SPECIAL NOTICES</li>
        <li>DASHBOARD</li>
      </ul>
    </div> -->

  <div class="container_3">
    <div class="row1" id="back">

      <div class="subcontainer_3-1">
        <h3 id="table-name">அறிக்கை விவரங்கள்</h3>
      </div>
      <div class="subcontainer_3-2">

        <div class="report_catagory">
          <Form action="../wildlifeofficer/filterUsingReportCatagory" method="POST">
            <select name="report_catagory" id="filter" onchange="filterFunction()">
              <option class="group-1">கேட்டோகரியைத் தேர்ந்தெடுக்கவும்</option>

              <option class="group-1">1.யானைகள் கிராமத்தில் உள்ளன</option>
              <option class="group-2">
                2.மற்ற காட்டு விலங்குகள் கிராமத்தில் உள்ளன
              </option>
              <option class="group-3">3.யானை வேலிகள் உடைப்பு</option>
              <option class="group-3">4.காட்டு விலங்கு ஆபத்தில் உள்ளது</option>
              <option class="group-3">5.பயிர் சேதங்கள்</option>
              <option class="group-3">6.சட்டத்திற்குப் புறம்பான விஷயங்கள் நடக்கின்றன</option>
            </select>
          </Form>
        </div>




        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="அறிக்கை எண்ணை இங்கே தேடுங்கள்" id="myInput" onkeyup="myFunction()" />
            <button type="submit" class="searchButton">
              <i class="fa fa-search">search</i>

            </button>
          </div>
        </div>
      </div>



      <div class="subcontainer_3-3" style="overflow-x: auto">
        <table id="myTable">
          <tr class="firstRow">
            <th>அறிவிக்கப்பட்ட தேதி</th>
            <th>அறிக்கை எண்</th>
            <th>வனவிலங்கு அதிகாரி</th>

            <th>அறிக்கை வகை</th>
            <th>இடம்</th>

            <th></th>
            <th>சம்பவத்தின் நிலை</th>
            <td></td>
          </tr>
          <?php

          // $count = 0;
          foreach ($data[0] as $row) {
            // switch ($data['reporttype']) {
            //   case 'Other Wild Animals in The Village':
            //     $row['reporttype'] = 2;
            //     break;
            //   case 'Breakdown of Elephant Fences':
            //     $row['reporttype'] = 3;
            //     break;
            //   case 'Crop Damages':
            //     $row['reporttype'] = 5;
            //     break;
            //   case 'Wild Animal is in Danger':
            //     $row['reporttype'] = 4;
            //     break;
            //   case 'Illegal Happing':
            //     $row['reporttype'] = 6;
            //     break;
            //   case 'Elephants are in The Village':
            //     $row['reporttype'] = 1;
            //     break;
            // }
            $d = "";
            $yes = 0;
            foreach ($data[1] as $r) {
              if ($r['incidentID'] == $row['incidentID']) {
                $d = $r['Fname'] . " " . $r['Lname'];
                $_SESSION['nme'] = $d;
                $yes = 1;
              }
            }
            if ($row['status'] == 'pending') {
              $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest?lang=1'><input type='text' style='display:none' name='acc' value=" . $row['incidentID'] . "><button class='buttonAccept' id='acceptId' value='ACCEPT' name='accept'/>ACCEPT</button></form>";
            } else {
              if ($yes == 1) {
                $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest?lang=1'><input type='text' style='display:none'  name='can' value=" . $row['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel'/>CANCEL</button></form>";
              } else {
                $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest?lang=1'><input type='text' style='display:none'  name='can' value=" . $row['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel' disabled />CANCEL</button></form>";
              }
            }
            // $select = '';
            // if ($row['incidentStatus'] == 'Pending') {
            //   echo 'selected';
            // }
            // if ($row['incidentStatus'] == 'Succsses') {
            //   echo 'selected';
            // }
            // if ($row['incidentStatus'] == 'Unsuccsses') {
            //   echo 'selected';
            // }
            if ($yes == 1) {
              echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['incidentID'] . "</td>
      
            <td>" . $d . "</td>
            <td>" . $row['reporttype'] . "</td>
            <td>" . $row['Place'] . "</td>
            <td>" . $stat . "</td>
            
            <td><button type='submit' class='viewButton' id='view' onclick='' >
              <a href='../wildlifeofficer/viewIncidentDetails?name=" . $d . "&lang=1&index=" . $count . "'>VIEW</a>
            </button></td>
            
            <td><Form action='../wildlifeofficer/setIncidentStatus?lang=1&index=" . $count . "' method='POST' name='incidentStatus'>
           
           
            <select name='incidentStatus' id='incidentStatus' onchange='location = this.value;'>
           

            <option class='group-1' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=Pending'>Pending</option>

            <option class='group-1' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=Success'>Success</option>
            <option class='group-2' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=UnSuccess'>
                Unscusses
              </option>
              <option class='group-2' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=UnSuccess' selected>
              {$row['incidentStatus']}
              </option>
            </select>
            
          </Form></td>
            
            </tr>
          ";
            } else {
              echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['incidentID'] . "</td>
      
            <td>" . $d . "</td>
            <td>" . $row['reporttype'] . "</td>
            <td>" . $row['Place'] . "</td>
            <td>" . $stat . "</td>
            
            <td><button type='submit' class='viewButton' id='view' onclick='' >
              <a href='../wildlifeofficer/viewIncidentDetails?name=" . $d . "&lang=1&index=" . $count . "'>VIEW</a>
            </button></td>
            
            <td><Form action='../wildlifeofficer/setIncidentStatus?lang=1&index=" . $count . "' method='POST' name='incidentStatus'>
           
           
            <select name='incidentStatus' id='incidentStatus' onchange='location = this.value;' disabled>
           

            <option class='group-1' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=Pending'>Pending</option>

            <option class='group-1' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=Success'>Success</option>
            <option class='group-2' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=UnSuccess'>
                Unscusses
              </option>
              <option class='group-2' value='../wildlifeofficer/setIncidentStatus?lang=1&index={$row['incidentID']}&status=UnSuccess' selected>
              {$row['incidentStatus']}
              </option>
            </select>
            
          </Form></td>
            
            </tr>
          ";
            }

            $count += 1;
          }


          ?>
        </table>

      </div>
      <div class="subcontainer_3-1">

        <!-- <a href="../wildlifeofficer/?lang=1">BACK</a> -->

      </div>
      <div></div>

    </div>

</body>

</html>