<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/reportView-page.css">
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
            <?php session_start();
                      $villagerNic = $_SESSION['NIC'];
                  ?>
            <ul>
            <li id="home_2" style="right:750px"  ><a href="../"  ">முகப்பு பக்கம்</a></li>
                <li id="dashboard_1" style="right:600px"  ><a href="../user/viewpage?lang=3" >டாஷ்போர்டு</a></li>
                <li id="report_2" style="   right:380px" ><a  href="../incident/index?lang=3">சம்பவங்கள் அறிக்கை</a></li>
                <li id="special_1"style="right:210px"  ><a href="../user/viewSpecialNotice?lang=3">சிறப்பு அறிவிப்பு</a></li> 
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
                    <a href="../user/editprofile?lang=3">View Profile</a> 
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
            அறிக்கை அட்டவணையைப் பார்க்கவும்
            </h3>
        </div>
        <div class="navigatereport">
             
        <a href="?type=1&page=1&lang=3" class="allreport" style="   padding-left:50px ; padding-right:50px  " style=" background-color: rgb(168, 175, 168);"  >அனைத்து அறிக்கை பார்வை</a>
            
             
            <a href="?type=2&page=1&lang=3"style=" padding-left:50px ; padding-right:50px;  background-color: rgb(168, 175, 168);  " class="myreportaccept" >எனது அறிக்கையை ஏற்றுக்கொள்</a>
         
             <a href="?type=3&page=1&lang=3" style=" padding-left:50px ; padding-right:50px " class="myreportpending" >அறிக்கை நிலுவையில் உள்ளது</a>
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
                    <th>எண்</th>
                    <th>வனவிலங்கு அதிகாரி பெயர்</th>
                    
                    <th>இடம்</th>
                    <th>நேரம்</th>
                    <th>அறிக்கை வகை</th>
                    <th>நடவடிக்கை</th>
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
                   <td id="view"><a href="../incident/viewReportpage?lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/view.png" class="view" ></a></td>
                    
                </tr>
                <?php } }?>

            </table> 
                <?php } else{   ?>
           <?php $data = $this->data1 ?>
            <table class="table">
                <tr class="header-table">
                <th>தேதி</th>
                    <th>அறிக்கை எண்</th>
                    <th>எண்</th>
                    <th>  பெயர்</th>
                    
                    <th>இடம்</th>
                    <th>நேரம்</th>
                    <th>அறிக்கை வகை</th>
                    <th>நடவடிக்கை</th>
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
                   <td id="view"><a href="../incident/viewReportpage?lang=1&reportNo=<?php echo $row['incidentID'] ?>"><img src="../Public/images/view.png" class="view" ></a></td>       </tr>
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