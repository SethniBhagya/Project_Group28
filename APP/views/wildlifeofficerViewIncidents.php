<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficerViewIncidents.css" />
  <script src="../Public/Javascript/login.js"></script>
  <script src="../Public/Javascript/viewReport.js"></script>
  <script src="../Public/javascript/wildlifeofficer.js"></script>
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
        <li id="home"><a href="../">HOME</a></li>
        <li id="dashboard"><a href="../wildlifeofficer/viewDashboard">DASHBOARD</a></li>
        <li>
          <div class="dropdown-1" style="  padding-left:  300px ">
            <button class="dropbtn-1">Language</button>
            <div class="dropdown-content-1">
              <a href="?lang=1">English</a>
              <a href="?lang=2">සිංහල</a>
              <a href="?lang=3">தமிழ்</a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <span class="dot">
            <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn" /></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="../wildlifeofficer/viewProfile?lang=1">View Profile</a>
            <a href="../user/index?lang=1">Logout</a>
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
        <h3 id="table-name">View Report Details</h3>
      </div>
      <div class="subcontainer_3-2">

        <div class="report_catagory">
          <Form action="../wildlifeofficer/filterUsingReportCatagory?lang=1" method="POST">
            <select name="report_catagory" id="filter" onchange="filterFunction()">
              <option class="group-1">Select The Report Catogary</option>

              <option class="group-1">1.Elephants are in The Village</option>
              <option class="group-2">
                2.Other Wild Animals are in The Village
              </option>
              <option class="group-3">3.Breakdown of Elephant Fences</option>
              <option class="group-3">4.Wild Animal is in Danger</option>
              <option class="group-3">5.Crop Damages</option>
              <option class="group-3">6.Illegal Things Happening</option>
            </select>
          </Form>
        </div>

        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="Search here Date" id="myInput" onkeyup="myFunction()" />
            <button type="submit" class="searchButton">
              <i class="fa fa-search">search</i>

            </button>
          </div>
        </div>
      </div>



      <div class="subcontainer_3-3" style="overflow-x: auto">
        <table id="myTable">
          <tr class="firstRow">
            <th>Reported Date</th>
            <th>Report Number</th>
            <th>Accepted Wildlifeofficer</th>

            <th>Report Type</th>
            <th>Place</th>
            <th>Action</th>
            <th></th>

          </tr>
          <?php
          foreach ($data as $row) {
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

            if ($row['status'] == 'pending') {
              $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest?lang=1'><input type='text' style='display:none' name='acc' value=" . $row['incidentID'] . "><button class='buttonAccept' id='acceptId' value='ACCEPT' name='accept'/>ACCEPT</button></form>";
            } else {
              $stat = "<form method='POST' action='../wildlifeofficer/trigerRequest?lang=1'><input type='text' style='display:none'  name='can' value=" . $row['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel'/>CANCEL</button></form>";
            }
            echo "<tr>
            <td>" . $row['date'] . "</td>
            <td>" . $row['incidentID'] . "</td>
            
            <td>Saman Perera</td>
            <td>" . $row['reporttype'] . "</td>
            <td>" . $row['Place'] . "</td>
            <td>" . $stat . "</td>
            <td><button type='submit' class='viewButton' id='view' onclick='' >
              <a href='../wildlifeofficer/viewIncidentDetails?lang=1'>VIEW</a>
            </button></td>
            
            </tr>
          ";
          }
          ?>
        </table>
      </div>
      <div class="subcontainer_3-1">

        <a href="../wildlifeofficer/?lang=1">BACK</a>

      </div>

    </div>


</body>

</html>