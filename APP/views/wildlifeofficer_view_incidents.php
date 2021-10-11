<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Public/css/header.css" />
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
        <div
          href="javascript:void(0);"
          class="icon"
          onclick="myFunction_1(this)"
        >
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>

        <ul>
          <li id="home_1"><a href="nnn">HOME</a></li>
          <li id="report_1"><a href="nnn">REPORT</a></li>
          <li class="dropdown">
            <span class="dot">
              <img
                onclick="myFunction_3()"
                src="../Public/images/user_icon.png"
                id="user_icon"
                class="user_btn"
            /></span>
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
              <input
                type="text"
                class="searchTerm"
                placeholder="Search here report number"
                id="myInput"
                onkeyup="myFunction()"
              />
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
          <tr>
            <th>Date</th>
            <th>Report Number</th>
            <th>Accept WID</th>
            <th>Wildlife Officer Name</th>
            <th>Report Type</th>
            <th>Place Number</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>02/02/2021</td>
            <td>001</td>
            <td>W123</td>
            <td>Saman Perera</td>
            <td>1</td>
            <td>112</td>
            <td><input type="button" value="ACCEPT" /></td>
            <td><input type="button" value="REPORT" /></td>
          </tr>
          <tr>
            <td>02/02/2021</td>
            <td>002</td>
            <td>W123</td>
            <td>kavi Perera</td>
            <td>5</td>
            <td>112</td>
            <td><input type="button" value="ACCEPT" /></td>
            <td><input type="button" value="REPORT" /></td>
          </tr>
          <tr>
            <td>02/02/2021</td>
            <td>045</td>
            <td>W123</td>
            <td>amal </td>
            <td>3</td>
            <td>112</td>
            <td><input type="button" value="ACCEPT" /></td>
            <td><input type="button" value="REPORT" /></td>
          </tr>
          <tr>
      
     
          </tr>
        </table>
      </div>
      <div class="subcontainer_3-1">
       
       <a href="../wildlifeofficer/">BACK</a>
     
       </div>
    
    </div>
   
  </body>
</html>
