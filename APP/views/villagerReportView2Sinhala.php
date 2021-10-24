<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/reportView-page.css">
    <script src="../Public/Javascript/login.js"></script>
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
            <?php session_start();
                      $villagerNic = $_SESSION['NIC'];
                  ?>
            <ul>
            <li id="home_2"><a href="../">මුල් පිටුව</a></li>
                <li id="dashboard_1"   ><a href="../user/viewpage?user=villager" >මුල් පුවරුව</a></li>
                <li id="report_2" style=" padding-right:20px ; right:345px  "><a href="../incident/index?lang=2"> වර්තා කිරීම</a></li>
                <li id="special_1"><a href="../user/viewSpecialNotice?lang=2">විශේෂ දැන්වීම</a></li> 
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">භාෂාව</button>
                    <div class="dropdown-content-1">
                        <a href="?type=2&page=1&lang=1">English</a>
                        <a href="?type=2&page=1&lang=2">සිංහල</a> 
                        <a href="?type=2&page=1&lang=3">தமிழ்</a>
                    </div>
                  </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                    <a href="../user/editprofile">View Profile</a>
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
            වාර්තා වාර්තා සිදුවීම් වගුව බලන්න
            </h3>
        </div>
        <div class="navigatereport">
              
        <a href="?type=1&page=1&lang=2" class="allreport">සියලුම වාර්තා බලන්න</a>
            
             
            <a href="?type=2&page=1&lang=2" class="myreportaccept" style=" background-color: rgb(168, 175, 168);" >තහවුරු වාර්තා</a>
         
             <a href="?type=3&page=1&lang=2" class="myreportpending"  style="padding-left:50px; padding-right:50px" > තවම තහවුරු නොවන වර්තා</a>
          </div>
          <div class="subcontainer_3-3">
            <!-- <div class="search-container"> -->
                <form action="" class="search-container" method="POST" >
                    <lable id="text-search-bar">වාර්තා අංකය</lable>
                    <input type="text" placeholder="Search" name="incidentId">
                    <input type="submit" value="සෙවීම" class="search-btn" name="submit"> 
                </form> 

            <?php if(isset($_POST['submit'])) {   ?>
                <?php $data = $this->data1 ?>
            <table class="table">
                <tr class="header-table">
                    <th>දිනය</th>
                    <th>වාර්තා අංකය</th>
                    <th>අංකය</th>
                    <th> නිලධාරියාගේ නම</th>
                    
                    <th>ස්ථානය</th>
                    <th>කාලය</th>
                    <th>වාර්තා වර්ගය</th>
                    <th>නැරඹීම</th>
                </tr>
                <tr> 
                    <?php foreach($this->dataAll as $row){ 
                        if(($row['villager_NIC']==$villagerNic) && ($row['status'] == 'success') &&  $row['incidentID']== $_POST['incidentId']) {?>
                    <td id="date"><?php echo $row['date']; ?> </td>
                    <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                    <td id="Place"><?php echo "11111"?></td>
                    <td id="time_in"> <?php echo "Namal Silva" ?></td>
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
                <th>දිනය</th>
                    <th>වාර්තා අංකය</th>
                    <th>අංකය</th>
                    <th> නිලධාරියාගේ නම</th>
                    
                    <th>ස්ථානය</th>
                    <th>කාලය</th>
                    <th>වාර්තා වර්ගය</th>
                    <th>නැරඹීම</th>
                </tr>
                <tr> 
                  
                    <?php foreach($data as $row){ 
                        if(($row['villager_NIC']==$villagerNic) && ($row['status'] == 'success') ) {?>
                    <td id="date"><?php echo $row['date']; ?> </td>
                    <td id="incidentID"><?php echo $row['incidentID'] ?></td>
                    <td id="Place"><?php echo "11111"?></td>
                    <td id="time_in"> <?php echo "Namal Silva" ?></td>
                    <td id="Place"><?php echo $row['Place'] ?></td>
                    <td id="time_in"> <?php echo $row['time_in'] ?></td>
                    <td id="reporttype"><?php echo $row['reporttype'] ?></td> 
                   <!-- // $userArray = array('John Doe', 'john@example.com'); -->
                   <td id="view"><a href="../incident/viewReportpage?lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/view.png" class="view" ></a></td>                    
                </tr>
                <?php } }?>

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