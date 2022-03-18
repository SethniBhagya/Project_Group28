 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../Public/css/header.css">
     <link rel="stylesheet" href="../Public/css/gramanildhariReportViewPag.css">
    <link rel="stylesheet" href="../Public/css/alert.css">
     <script src="../Public/Javascript/login1.js"></script>
     <script src="../Public/Javascript/viewReport.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
     <title>Report View</title>
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
                 <li id="dashboard_1"><a href="../user/viewpage?lang=1">Main Menu</a></li>
                 <li id="report_2"><a href="../incident/index?lang=1">Report Incidents</a></li>
                 <li id="special_1"><a href="../user/viewSpecialNotice?lang=1">SpecialNotice </a></li>
                 <div class="dropdown-1">
                     <button class="dropbtn-1">Language</button>
                     <div class="dropdown-content-1">
                         <a href="?type=2&page=1&lang=1">English</a>
                         <a href="?type=2&page=1&lang=2">සිංහල</a>
                         <a href="?type=2&page=1&lang=3">தமிழ்</a>
                     </div>
                 </div>
                 <li class="dropdown">
                     <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                     <div id="myDropdown" class="dropdown-content">
                         <a href="../villager/editprofile?lang=1">View Profile</a>
                         <a href="../user/logout">Logout</a>
                     </div>
                 </li>
             </ul>
         </nav>
     </header>
     </div>

     <div class="container_3">
         <div class="subcontainer_3-1">
             <h3 id="table-name">
                 Crop Damages
             </h3>
         </div>
         <div class="navigatereport">
             <a href="../gramaniladari/viewCropDamages?status=pending&page=1&lang=1?status=pending&page=1&lang=1" id="cropPending">Crop Damages Pending</a>
             <a href="../gramaniladari/viewCropDamages?status=success&page=1&lang=1?status=pending&page=1&lang=1" id="cropView"> Crop Damages View</a>
             <a href="../gramaniladari/viewVillager?status=pending&page=1&lang=1" id="registerAccept"> New Villager Register Accept</a>
             <a href="../gramaniladari/viewVillager?status=accept&page=1&lang=1" id="registerVillger">Register Villager</a>

         </div>
         <div class="subcontainer_3-3">
             <form action="" class="search-container" method="POST">
                 <lable id="text-search-bar">Report Number</lable>
                 <input type="text" placeholder="Search" name="incidentId">
                 <input type="submit" value="Search" class="search-btn" name="submit">
             </form>

             <?php if (isset($_POST['submit'])) {   ?>

                 <table class="table">
                     <tr class="header-table">
                         <th>Date</th>
                         <th>Report No</th>
                         <th>Message</th>
                         <th>Action</th>
                     </tr>
                     <tr>
                         <?php foreach ($this->cropDamagesReview as $row) {
                                if ($row['incidentID'] == $_POST['incidentId'] && $row['status'] === 'pending') { ?>
                                 <td id="date"><?php echo $row['date']; ?> </td>
                                 <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                                 <td id="Place"><?php echo $row['Place'] ?></td>

                                 <script>
                                     var incidentID = document.getElementById('incidentID')
                                 </script>
                                 <td id="view"><a href="../gramaniladari/viewCropDamagesIncident?status=pending&&lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/action.png" class="view"></a></td>

                                 </td>

                     </tr>
             <?php }
                            } ?>

                 </table>
             <?php } else {   ?>
                 <?php $data = $this->data1 ?>
                 <table class="table">
                     <tr class="header-table">
                         <th>Date</th>
                         <th>Report No</th>
                         <th>Villager NIC</th>
                         <th>Place</th>
                         <th>Action</th>

                     </tr>
                     <tr>
                         <!-- <?php print_r($this->cropDamagesReview) ?> -->
                         <?php foreach ($this->cropDamagesReview as $row) {
                                if ($row['status'] == 'pending') { ?>
                                 <td id="date"><?php echo $row['date']; ?> </td>
                                 <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                                 <td id="Place"><?php echo $row['villager_NIC'] ?></td>
                                 <td id="Place"><?php echo $row['Place'] ?></td>

                                 <script>
                                     var incidentID = document.getElementById('incidentID')
                                 </script>
                                 <td id="view"><a href="../gramaniladari/viewCropDamagesIncident?status=pending&&lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/action.png" class="view"></a></td>

                                 </td>
                     </tr>
             <?php
                                }
                            } ?>

                 </table>
             <?php } ?>
         </div>

         <!-- </div> -->
         <div class="subcontainer_3-4">
             <a id="first" href="?type=1&lang=1&page=1&status=pending ">First</a>
             <?php if ($_GET['page'] <= 1) { ?>
                 <a href="">Previous</a>
             <?php } else { ?>
                 <a id="previous" href="?type=1&lang=1&page=<?php echo $_GET['page'] - 1 ?>&status=pending">Previous</a> <?php } ?>
             <?php if ($_GET['page'] == $this->lastpage) { ?>
                 <li id="next"><a href="">Next</a>
                 <?php } else { ?>
                     <a id="next" href="?type=1&lang=1&page=<?php echo $_GET['page'] + 1 ?>&status=pending">Next</a> <?php } ?>
                 <a id="last" href="?type=1&lang=1&page=<?php echo $this->lastpage ?>&status=pending">Last</a>
                 </li>
         </div>

     </div>

 </body>

 </html>