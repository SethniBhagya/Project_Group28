<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/reportView-page.css">
    <script src="../Public/Javascript/login1.js"></script>
    <!-- <script src="../Public/Javascript/viewReport.js"></script> -->
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
            <ul>
            <li id="home_2"><a href="../">Home</a></li>
                <li id="dashboard_1"   ><a href="../user/viewpage?lang=1" >Dashboard</a></li>
                <li id="report_2"  ><a href="">Report Incidents</a></li>
                <li id="special_1"><a href="../user/viewSpecialNotice?lang=1">SpecialNotice </a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button style="margin-top:  -50px;" class="dropbtn-1" >Language</button>
                    <div class="dropdown-content-1" >
                        <a href="?type=1&page=1&lang=1">English</a>
                        <a href="?type=1&page=1&lang=2">සිංහල</a> 
                        <a href="?type=1&page=1&lang=3">தமிழ்</a>
                    </div>
                  </div> 
                    <span class="dot" style="position:inherit; margin-right:10px;  margin-top:  10px;"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile?lang=1">View Profile</a>
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
            View Report Table
            </h3>
        </div>
        <div class="navigatereport">
             
                <a href="?type=1&page=1&lang=1" class="allreport"  style=" background-color: rgb(168, 175, 168);" >All Report View</a>
            
             
                <a href="?type=2&lang=1&page=1" class="myreportaccept" >My Report Accept</a>
             
                 <a href="?type=3&page=1&lang=1" class="myreportpending" >My Report Pending</a>
          </div>
        <div class="subcontainer_3-3">
            <!-- <div class="search-container"> -->
                <form action="" class="search-container"  method="POST">
                    <lable id="text-search-bar"><b>Date</b></lable>
                    <input class="text" type="date" id="date" name="date"/>
                    <lable id="text-search-bar" style="margin-left:10px"><b>Report Type</b></lable>
                    <select   class="text" name="reportType"  >
                    <option style="padding-right:0px" value="">  Choose here</option> 
                    <option value="Crop Damages"> Crop damages</option> 
                    <option value="Other Wild Animals are in The Village">Other Wild Animals are in The Village</option> 
                    <option value="Wild Elephant are in The Village">Wild Elephant are in The Village </option> 
                    <option value="Breakdown of Elephant Fence">Breakdown of Elephant Fence</option> 
                    <option value="Wild Animal Danger">Wild Animal Danger</option> 
                    <option value="Illegal Thing happening the Forest">Illegal Thing happening the Forest</option> 
                    
                    <input style="margin-left: 10px;" value="Search" type="submit" class="search-btn"  name="submit"> 
                </form>
                <?php if(isset($_POST['submit'])) {   ?>
                <?php $data = $this->dataAll ?>
                <?php $_POST['reportType'] ?>
               <table class="table">
                <tr class="header-table">
                    <th>Date</th>
                    <th>Time</th>
                    <th>Place</th>
                    <!-- <th>City</th> -->
                    <!-- <th>Time</th> -->
                    <th>Report Type</th>
                    <th>View</th>
                </tr>
                <tr>
                    <?php foreach($data as $row){ 
                        if( $row['date']===$_POST['date'] ||  $row['reporttype'] ===  $_POST['reportType'] ) { ?>
                    <td><?php echo $row['date']; ?> </td>
            
                    <td><?php echo $row['time_in'] ?></td>
                    <td><?php echo $row['Place'] ?></td>
                    <td><?php echo $row['reporttype'] ?></td>
                    <td id="view"><a href="../incident/viewReportpage?lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/view.png" class="view" ></a></td>                    
                </tr>
                <?php }  } ?>


            </table>
            <?php } else{  ?>
                <?php $data = $this->data1 ?>
                <table class="table">
                <tr class="header-table">
                    <th>Date</th>
                    <th>Time</th>
                    <th>Place</th>
                    <!-- <th>City</th> -->
                    <!-- <th>Time</th> -->
                    <th>Report Type</th>
                    <th>View</th>
                </tr>
                <tr>
                    <?php foreach($data as $row){ ?>
                       
                    <td><?php echo $row['date']; ?> </td>
            
                    <td><?php echo $row['time_in'] ?></td>
                    <td><?php echo $row['Place'] ?></td>
                    <td><?php echo $row['reporttype'] ?></td>
                    <td id="view"><a href="../incident/viewReportpage?lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/view.png" class="view" ></a></td>
                    
                </tr>
                <?php if(isset($_GET['status'])) { ?>
                <div id="myview" class="view-1"   >
                <span onclick="closeView()" class="close">&times;</span>
                <div class="subcontainer_3-5">
                 <div class="subcontainer_3-6">
                  <h3 style="color: white;">View Report Incidents in Other Place </h3>
               


                 </div> 
                 
                 <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="50%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>     -->
                  
                    <div id="map" style="top: 10px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633233322587!5m2!1sen!2slk" width="50%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
                    <div id="detail">
                    <h><b>Date : <?php echo $row['date']; ?> </b></h></br><br> 
                    <h><b>Time : <?php echo $row['time_in'] ?></b> </h><br></br> 
                    <h><b>Place : <?php echo $row['Place'] ?></b> </h><br></br> 
                    <h><b>Report Type : <?php echo $row['reporttype'] ?></b> </h> 
                  </div>
                    </div>

            
                </div>
             </div>  
             <?php } ?>
                <?php } ?>

            </table>
            <?php } ?>
        </div>
        
    <!-- </div> -->
  <div class="subcontainer_3-4">
             <a  id="first"  href="?type=1&lang=1&page=1">First</a>
            <?php if($_GET['page']<=1) {?>
                  <a>Previous</a>
            <?php }else{?> 
             <a id="previous" href="?type=1&lang=1&page=<?php echo $_GET['page']-1 ?>">Previous</a> <?php } ?>
            <?php if($_GET['page']==$this->lastpage) {?>
                 <li id="next"><a>Next</a>
            <?php }else{?> 
             <a id="next" href="?type=1&lang=1&page=<?php echo $_GET['page']+1 ?>">Next</a> <?php } ?>
             <a id="last" href="?type=1&lang=1&page=<?php echo $this->lastpage ?>">Last</a></li>
        </div>
         
    </div>
 
</body>

</html>