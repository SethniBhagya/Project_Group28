<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/alert.css">
  <link rel="stylesheet" href="../Public/css/villagerProfi.css">
  <script src="../Public/Javascript/login1.js"></script>
  <title> Profile</title>
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
        <li id="special_1"><a href="../villager/viewSpecialNotice?lang=1">SpecialNotice </a></li>
        <div class="dropdown-1">
          <button class="dropbtn-1" style="margin-top:  -50px;">Language</button>
          <div class="dropdown-content-1">
            <a href="?lang=1&report=1">English</a>
            <a href="?lang=2&report=1">සිංහල</a>
            <a href="?lang=3&report=1">தமிழ்</a>
          </div>
        </div>
        <span class="dot" style="margin-right:10px;  margin-top:  10px;"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
        <div id="myDropdown" class="dropdown-content">
          <a href="../villager/editprofile">View Profile</a>
          <a href="../user/logout">Logout</a>

        </div>
        </li>
      </ul>
    </nav>

  </header>
  <?php  
    if (isset($this->status)) {
         if($this->status  =="notview"){ 
    ?>

        <div id="messagealert" style="padding: 10px;  ">

            <img src="../Public/images/alertIcon.png" style="width:100px;  height:100px"><br>
             <h1><b>Alert Message   </b></h1>
             <P> ☆ Wildlife Elelphants Come In to Register Village  </P> 
             <P> ☆ Please Go to Safe Place in Your Area</P> 
            <form action="?lang=1&report=1" method="post"> 
             <input type="submit" value="Ok" name="submitAlert"   id="submit">
            </form>
        </div>
    <?php

    }}

    ?>
  <body>
    <div class="container-1">
      <div class="contanier_2-1">
        <div class="view_profile">
          <h3 style="color: white; "><a href="../villager/viewProfile?lang=1">Profile</a></h3>
        </div>
        <div class="edit_profile">
          <h3><a style="color: white;" href="../villager/editprofile?lang=1">Edit Profile</a></h3>
        </div>
      </div>
      <div class="sub-container-1">
        <img src="../Public/images/user_icon4-01.png" id="user_icon1" class="user_btn"><br>
        <h id="namevillger"><?php print($this->fName)?> <?php print($this->lName) ?></h>
        <div class="sub-container-1-1">
        <table class="table">
                <tr class="header-table">
                    <th>Last Incident Date</th>
                    <th>Last Incident Type</th>
                    <th>Last Incident Status</th>
                  
                </tr>
                <tr>
                  
                    <td><?php echo $this->datagetlastincidentdate ?> </td>
                    <td><?php echo $this->datagetlastincidentid ?> </td>
                    <td><?php echo $this->datagetlastincidentstatus ?> </td>
                    
                </tr>   
    </table>
        </div>
      </div>
      <div class="sub-container-2">
        <h id="chart" ><b>Summary Of Your Last 30 days Incident Report</b></h>
        <style>
          .html {
            width: <?php print($this->getVillagerWildElephantArrivalIncident)."%" ?> ; 
            background-color: #04AA6D;
          }
    
          .css {
            width: <?php print($this->getVillagerWildAnimalsDangerIncident)."%" ?>;
            background-color: #2196F3;
          }

          .js {
            width: <?php print($this->getVillagerCropDamagesIncident)."%" ?>;
            background-color: #f44336;
          }

          .php {
            width: <?php print($this->getVillagerOthersIncident)."%" ?>;
            background-color: #808080;
          }
        </style>
        <p>Wild Elephants Arrival  </p>
        <div class="container">
          <div class="skills html"><?php echo $this->getVillagerWildElephantArrivalIncident ?>%</div>
        </div>
        <p>Wild Animals Danger</p>
        <div class="container">
          <div class="skills css"><?php echo $this->getVillagerWildAnimalsDangerIncident ?>%</div>
        </div>
    
        <p>Crop Damages</p>
        <div class="container">
          <div class="skills js"><?php echo $this->getVillagerCropDamagesIncident ?>%</div>
        </div>

        <p>Others</p>
        <div class="container">
          <div class="skills php"><?php echo $this->getVillagerOthersIncident ?>%</div>
        </div>
      </div>
    </div>
      <div class="sub-container-2-2">
      <table class="table">
                <tr class="header-table">
                    <th>Wildlife Officer Accept</th>
                    <th>GramaNilagari Accept</th>
                    <th>Pending Incident Report </th>
                  
                </tr>
                <tr>
                
                    <td><?php echo $this->getVillagerIncidentacceptwildlifeOfficer ?> </td>
                    <td><?php echo $this->getVillagerIncidentacceptGramaseweka ?>  </td>
                    <td><?php echo $this->getVillagerIncidentpending ?>  </td>
                    
                </tr>   
      </table>
 
     </div>
    </div>
        </div>
  </body>

</html>