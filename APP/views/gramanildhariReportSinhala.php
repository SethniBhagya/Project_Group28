<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/gramanildhariReport.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/alert.css">
    <link rel="stylesheet" href="../Public/css/notification.css">
    <link rel="stylesheet" href="../Public/css/popupNotification.css">
    <script src="../Public/Javascript/login1.js"></script>
    <title>Report Page</title>
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
            <li id="home_2"><a href="../?lang=2">මුල් පිටුව</a></li>
                <li id="dashboard_1"    ><a href="../user/viewpage?lang=2"  >මුල් පුවරුව</a></li>
                <li id="report_2" style="   padding-right:20px ; right:345px;background-color: rgb(168, 175, 168); color:black;  "><a href="../incident/index?lang=2"> වර්තා කිරීම</a></li>
                <li id="special_1"><a href="../villager/viewSpecialNotice?lang=2">විශේෂ දැන්වීම</a></li> 
                    
                <div class="dropdown-1" style="  padding-left:  300px ">
                    <button class="dropbtn-1">භාෂාව</button>
                    <div class="dropdown-content-1">
                        <a href="?lang=1">English</a>
                        <a href="?lang=2">සිංහල</a>
                        <a href="?lang=3">தமிழ்</a>
                    </div>
                </div>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../user/editprofile?lang=1">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>  
  <?php
  if (isset($this->status) && isset($this->notification)) {
      if ($this->status  == "notview"&&$this->notification > 0) {
  ?>

          <div id="messagealert">
              <form action="?lang=1&report=1" method="post" style="display: inline-block;">
                  <img src="../Public/images/alertIcon.png" id="alert">
                  <h3>වනජීවී අලි ඔබගේ ලියාපදිංචි ගම්මානයට පැමිණේ &nbsp&nbsp
                      <input type="submit" value="Ok" name="submitAlert" id="submit1">
                  </h3>
              </form>
          </div>
   
      <div id="notificationmessage">

          <!-- <img src="../Public/images/alertIcon.png" style="width:1000px;  height:100000px"><br> -->
     
              <form action="../gramaniladari/viewNotification?lang=1&notification=true" method="post" style="display: inline-block;">
                  <img src="../Public/images/bell1.png" id="right">&nbsp&nbsp
                  <h3>ඔබට නව දැනුම්දීමක් ඇත (<?php echo $this->notification ?>) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <input type="submit" value="View" name="submitAlert" id="submit">
                  </h3>
              </form>
      </div>
      <?php

if (isset($_POST['Submit'])) {
?>

  <div id="popupmessage"  >
      <form action="?lang=1&report=1" method="post" style="display: inline-block;">
      <img src="../Public/images/success-mesaage.png"  id="alert" >&nbsp&nbsp
          <h3>ඔබගේ සිදුවීම වාර්තා කිරීම සාර්ථකයි &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           </h3>
      </form>

  </div> 

  <?php }  ?>
  <?php

  } else if ($this->status  == "notview")  {
       
  ?>

      <div id="messagealert1">
          <form action="?lang=1&report=1" method="post" style="display: inline-block;">
              <img src="../Public/images/alertIcon.png" id="alert">
              <h3>වනජීවී අලි ඔබගේ ලියාපදිංචි ගම්මානයට පැමිණේ &nbsp&nbsp
                  <input type="submit" value="Ok" name="submitAlert" id="submit1">
              </h3>
          </form>
      </div>
      <?php

if (isset($_POST['Submit'])) {
?>

  <div id="popupmessagelast"  >
      <form action="?lang=1&report=1" method="post" style="display: inline-block;">
      <img src="../Public/images/success-mesaage.png"  id="alert" >&nbsp&nbsp
          <h3>ඔබගේ සිදුවීම වාර්තා කිරීම සාර්ථකයි &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           </h3>
      </form>

  </div>  
<?php

}

?>
  <?php }
      
   elseif ($this->notification > 0) {  ?>

      <div id="notificationmessage">

          <!-- <img src="../Public/images/alertIcon.png" style="width:1000px;  height:100000px"><br> -->

          <form action="../gramaniladari/viewNotification?lang=1&notification=true" method="post" style="display: inline-block;">
              <img src="../Public/images/bell1.png" id="bell">&nbsp&nbsp
              <h3>ඔබට නව දැනුම්දීමක් ඇත (<?php echo $this->notification ?>) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <input type="submit" value="නරඹන්න " name="submitAlert" id="submit">
              </h3>
          </form>
      </div>
      <?php if (isset($_POST['Submit'])) {
?>

  <div id="popupmessagelast"  >
      <form action="?lang=1&report=1" method="post" style="display: inline-block;">
      <img src="../Public/images/success-mesaage.png"  id="alert" >&nbsp&nbsp
          <h3>ඔබගේ සිදුවීම වාර්තා කිරීම සාර්ථකයි   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           </h3>
      </form>

  </div>  
<?php

}

?>
<?php }else{
  
 ?>        <?php if (isset($_POST['Submit'])) {
  ?>
  
      <div id="popupmessagefirst"  >
          <form action="?lang=1&report=1" method="post" style="display: inline-block;">
          <img src="../Public/images/success-mesaage.png"  id="alert" >&nbsp&nbsp
              <h3>ඔබගේ සිදුවීම වාර්තා කිරීම සාර්ථකයි &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               </h3>
          </form>
   
      </div>  
  <?php
  
  }
   
  ?> <?php }}
  ?>
    <div class="report-name" style="display:none">
        <h1> </h1>
    </div>
    <div class="container-1">
        
        <button  class="report-1-1" ><a index="rep" class="report-1" href="./setIncident?lang=1&report=1"> <span class="dot1"><img class="report2" src="../Public/images/report-1.png"></span></br>
            <h1> අලි ඉන්නේ ගමේ </h1></a>
        </button>
        <button class="report-2-2" href="" ><a index="rep"class="report-2" href="./setIncident?lang=1&report=2"><span class="dot2"><img class="report2" src="../Public/images/report-2.png"></span>
           <h1>අනෙකුත් වන සතුන් ද ගම්මානයේ සිටිති</h1></a>
        </button>
        <button class="report-3-3" href="" ><a index="rep" class="report-3" href="./setIncident?lang=1&report=3"><span class="dot3"><img class="report3" src="../Public/images/report-3.png"></span>
           <h1>අලි වැට කැඩීම</h1></a>
        </button>
    </div>

    <div class="container-2">
       
        <button class="report-5-5" href="" ><a class="report-5" href="./setincident?lang=1&report=5"><span class="dot5"><img class="report5" src="../Public/images/report-5.png"></span>
           <h1>වන සතා අනතුරේ</h1></a>
        </button>
        <button class="report-6-6" href="" ><a class="report-6" href="./setIncident?lang=1&report=6"><span class="dot5"><img class="report5" src="../Public/images/illegal.png"></span>
           <h1>වනාන්තරයේ නීති විරෝධී දේ සිදු වේ</h1></a>
        </button>
    </div>


</body>
</html>