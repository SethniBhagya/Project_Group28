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

                <li id="home"><a href="../?lang=2">මුල් පිටුව</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=2">දත්ත පුවරුව</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">භාෂාව</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=2">පරිශීලක පැතිකඩ</a>
                        <a href="../user/index?lang=2">ඉවත් වීම</a>
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
                <h3 id="table-name">වාර්තාවේ විස්තර බලන්න</h3>
            </div>
            <div class="subcontainer_3-2">

                <div class="report_catagory">
                    <Form action="../wildlifeofficer/filterUsingReportCatagory?lang=2" method="POST">
                        <select name="report_catagory" id="filter" onchange="filterFunction()">
                            <option class="group-1">වාර්තාව තෝරන්න</option>

                            <option class="group-1">1.අලි ගම් වලට පැමිණ ඇත</option>
                            <option class="group-2">
                                2.අනෙකුත් වන සතුන් ගම් වලට පැමිණ ඇත
                            </option>
                            <option class="group-3">3.අලි වැට කැඩීම</option>
                            <option class="group-3">4.වන සතුන්ට අනතුරක්</option>
                            <option class="group-3">5.බෝග හානි</option>
                            <option class="group-3">6.නීති විරෝධී දේ සිදුවෙමින් පවතී</option>
                        </select>
                    </Form>
                </div>




                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="වාර්තා අංකය මෙතැනින් සොයන්න" id="myInput" onkeyup="myFunction()" />
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search">සොයන්න</i>

                        </button>
                    </div>
                </div>
            </div>



            <div class="subcontainer_3-3" style="overflow-x: auto">
                <table id="myTable">
                    <tr class="firstRow">
                        <th>වාර්තා කළ දිනය</th>
                        <th>වාර්තා අංකය</th>
                        <th>වනජීවී නිලධාරියාගේ නම</th>

                        <th>වාර්තා වර්ගය</th>
                        <th>ස්ථානය</th>
                        <th>ක්රියාව</th>
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
            <td>" . $row['incidentID'] . "</td>
            
            <td>Saman Perera</td>
            <td>" . $row['reporttype'] . "</td>
            <td>" . $row['Place'] . "</td>
            
            <td><input type='button'class='button' value='ACCEPT' name='accept'/></td>
            <td><button type='submit' class='button' id='view' onclick='' >
              <a href='../wildlifeofficer/viewIncidentDetails?lang=2'>VIEW</a>
            </button></td>
            </tr>
          ";
                    }
                    ?>






                </table>
            </div>
            <div class="subcontainer_3-1">

                <a href="../wildlifeofficer/?lang=2">ආපසු</a>

            </div>

        </div>


</body>

</html>