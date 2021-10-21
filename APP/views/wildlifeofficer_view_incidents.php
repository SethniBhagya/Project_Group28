<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficer_header.css" />
  <link rel="stylesheet" href="../Public/css/wildlifeofficer_view_incidents.css" />
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
        <li class="dropdown">
          <span class="dot">
            <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn" /></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="../wildlifeofficer/viewProfile">View Profile</a>
            <a href="../user/index">Logout</a>
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
          <Form action="../wildlifeofficer/filterUsingReportCatagory" method="POST">
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
            <input type="text" class="searchTerm" placeholder="Search here report number" id="myInput" onkeyup="myFunction()" />
            <button type="submit" class="searchButton">
              <i class="fa fa-search">search</i>
              <button type="submit" class="searchButton" id="view" onclick="">
                <i class="fa fa-search"><a href="../wildlifeofficer/viewIncidentDetails">view</a></i>
              </button>
            </button>
          </div>
        </div>
      </div>



      <div class="subcontainer_3-3" style="overflow-x: auto">
        <table id="myTable">
          <tr class="firstRow">
            <th>Date</th>
            <th>Report Number</th>
            <th>Accepted Wildlifeofficer</th>

            <th>Report Type</th>
            <th>Place</th>
            <th>Action</th>
            <td></td>
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
            echo " <tr>
            <td>" . $row['date'] . "</td>
            <td> 1</td>
            
            <td>Saman Perera</td>
            <td>" . $row['reporttype'] . "</td>
            <td>" . $row['Place'] . "</td>
            <td><input type='button'class='button' value='ACCEPT' name='accept'/></td>
            <td><input type='button'class='button' value='VIEW' name='accept'/></td>
          </tr>";
          }
          ?>
          <!-- <td><button type="submit" class="searchButton" id="view" onclick="">
              <i class="fa fa-search"><a href="../wildlifeofficer/viewIncidentDetails">view</a></i>
            </button></td> -->



        </table>
      </div>
      <div class="subcontainer_3-1">

        <a href="../wildlifeofficer/">BACK</a>

      </div>

    </div>
    <div><?php print_r($data) ?></div>

</body>

</html>