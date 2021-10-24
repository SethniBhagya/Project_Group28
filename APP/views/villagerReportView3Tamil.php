<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/reportViewpage.css">
    <script src="../Public/Javascript/login.js"></script>
    <script src="../Public/Javascript/viewReport.js"></script>
    <script src="../Public/javascript/villagerMyreportview.js "></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
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
            <?php session_start();
                      $villagerNic = $_SESSION['NIC'];
                  ?>
            <ul>
            <li id="home_2" style="right:750px"  ><a href="../"  ">முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?user=villager" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="">சிறப்பு அறிவிப்பு</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">மொழி</button>
                    <div class="dropdown-content-1">
                        <a href="?type=2&page=1&lang=1">English</a>
                        <a href="?type=2&page=1&lang=2">සිංහල</a> 
                        <a href="?type=2&page=1&lang=3">தமிழ்</a>
                    </div>
                  </div>
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

    <div class="container_3">
        <div class="subcontainer_3-1">
            <h3 id="table-name">
            அறிக்கை அட்டவணையைப் பார்க்கவும்
            </h3>
        </div>
        <div class="navigatereport">
             
        <a href="?type=1&page=1&lang=3" class="allreport" style="   padding-left:50px ; padding-right:50px  " style=" background-color: rgb(168, 175, 168);"  >அனைத்து அறிக்கை பார்வை</a>
            
             
            <a href="?type=2&page=1&lang=3"style=" padding-left:50px ; padding-right:50px  " class="myreportaccept" >எனது அறிக்கையை ஏற்றுக்கொள்</a>
         
             <a href="?type=2&page=1&lang=3" style=" padding-left:50px ; padding-right:50px;  background-color: rgb(168, 175, 168); " class="myreportpending" >அறிக்கை நிலுவையில் உள்ளது</a>
          </div>
        <div class="subcontainer_3-3">
            <!-- <div class="search-container"> -->
            <form action="" class="search-container" method="POST" >
                    <lable id="text-search-bar"> அறிக்கை எண்</lable>
                    <input type="text" placeholder="தேடு" name="incidentId">
                    <input type="submit" value="தேடு" class="search-btn" name="submit"> 
                </form> 

            <?php if(isset($_POST['submit'])) {   ?>
                <?php $data = $this->data1 ?>
            <table class="table">
                <tr class="header-table">
                <th>தேதி</th>
                    <th>அறிக்கை எண்</th>
                    <th>இடம்</th>
                    <th>நேரம்</th>
                    <th>அறிக்கை வகை</th>
                    <th>நடவடிக்கை</th>
                </tr>
                <tr>< 
                    <?php foreach($data as $row){ 
                        if(($row['villager_NIC']==$villagerNic) && ($row['status'] == 'pending') &&  $row['incidentID']== $_POST['incidentId']) {?>
                    <td id="date"><?php echo $row['date']; ?> </td>
                    <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                    <td id="Place"><?php echo $row['Place'] ?></td>
                    <td id="time_in"> <?php echo $row['time_in'] ?></td>
                    <td id="reporttype"><?php echo $row['reporttype'] ?></td> 
                   <!-- // $userArray = array('John Doe', 'john@example.com'); -->
                   <script>
                      var incidentID = document.getElementById('incidentID') 
                       //console.log(document.getElementById('incidentID') )
                      </script>
                  <td id="view"><a    ><img src="../Public/images/edit.png" class="view" style="width: 20px; height:20px" ></a> 
                  <a    ><img src="../Public/images/remove.png" class="view" style="width: 20px; height:20px; padding-left:2px" ></a>
                    <a onclick="openView()" href="aaa"><img src="../Public/images/view.png" style="padding-top:3px" class="view" ></a></td>
                    
                </tr>
                <?php } }?>

            </table> 
                <?php } else{   ?>
           <?php $data = $this->data1 ?>
            <table class="table">
                <tr class="header-table">
                <th>தேதி</th>
                    <th>அறிக்கை எண்</th>
                    <th>இடம்</th>
                    <th>நேரம்</th>
                    <th>அறிக்கை வகை</th>
                    <th>நடவடிக்கை</th>
                </tr>
                <tr> 
                    <?php foreach($data as $row){ 
                        if(($row['villager_NIC']==$villagerNic) && ($row['status'] == 'pending') ) {?>
                    <td id="date"><?php echo $row['date']; ?> </td>
                    <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                    <td id="Place"><?php echo $row['Place'] ?></td>
                    <td id="time_in"> <?php echo $row['time_in'] ?></td>
                    <td id="reporttype"><?php echo $row['reporttype'] ?></td> 
                   <!-- // $userArray = array('John Doe', 'john@example.com'); -->
                   <script>
                      var incidentID = document.getElementById('incidentID') 
                       //console.log(document.getElementById('incidentID') )
                      </script>
                  <td id="view"><a    ><img src="../Public/images/edit.png" class="view" style="width: 20px; height:20px" ></a> 
                  <a    ><img src="../Public/images/remove.png" class="view" style="width: 20px; height:20px; padding-left:2px" ></a>
                    <a onclick="openView()" href="aaa"><img src="../Public/images/view.png" style="padding-top:3px" class="view" ></a></td>
                    
                </tr>
                <?php } }?>

            </table>
             <?php } ?>
        </div>
        <!-- </form> -->
    <!-- </div> -->
  <div class="subcontainer_3-4">
            <li id="previous"><a href="?type=3&page=1">Previous</a>
            <li id="last"><a href="?type=3&page=<?php echo $this->lastpage ?>">last</a></li>
        </div>
         
    </div>
    <div id="myview" class="view-1">
     <span onclick="closeView()" class="close"> <button style="background-color: none;">&times</button> </span> 
        <div class="subcontainer_3-5">
            <div class="subcontainer_3-6">
                <h3      class="id"> </h3>
            </div></br>
            <table>
                <tr>
                    <th>Date</th>
                    <th>2021/08/03</th>
                </tr>
                <tr>
                    <th>Accept Wilflife Ofiicer Number</th>
                    <th>000000000V</th>
                </tr>
                <tr>
                    <th>Accept Wilflife Ofiicer Name</th>
                    <th> J D K Silva</th>
                </tr>
                <tr>
                    <th>Report Type</th>
                    <th>Crop Damages</th>
                </tr>
                
            </table>
            <div id="map">
                
            </div>
            
        </div>
    </div>
</body>
<script src="../Public/javascript/villagerMyreportview.js "></script>
</html>