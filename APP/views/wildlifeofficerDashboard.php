<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerDashboard.css">
    <script src="../Public/Javascript/login.js"></script>
    <script src="../Public/javascript/admin.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- <script src="../Javascript/dashboard.js"></script> -->
    <title>Dashboard</title>
</head>

<body style="background-image: none; background-color: white;">
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
            <div href="javascript:void(0);" class="icon" onclick="myFunction_1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li id="home"><a href="../?lang=1">HOME</a></li>
                <li id="userPage"><a href="../wildlifeofficer/?lang=1">USER PAGE</a></li>
                <li id="incidents"><a href="../wildlifeofficer/viewIncidents?lang=1">INCIDENTS</a></li>
                <li id="notifications"><a href="../wildlifeofficer/viewNotification?lang=1">NOTIFICATIONS</a></li>
                <li id="dashboard"><a href="../wildlifeofficer/viewDashboard?lang=1">DASHBOARD</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">Language</button>
                        <div class="dropdown-content-1">
                            <a href="?lang=1">English</a>
                            <a href="?lang=2">සිංහල</a>
                            <a href="?lang=3">தமிழ்</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=1">View Profile</a>
                        <a href="../user/logout?lang=1">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- <div class="header-name"><h><pre  style="font-size: larger;font-style: normal; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Total in Sri Lanka                                                                                                                                                               LastModified 30/09/2021</pre></h> </div> -->
    <div class="first">
        Time Duration -3 Month<br>
        <?php echo date("d/m/Y") ?><br>

    </div>
    <div class="main-update-col-1">
        <div class="last-week">
            Last Week <div class="last-week-number">
                <h1 data-target="10" class="count"> <?php echo $data['lastWeekData']  ?></h1>
                <p> incidents </p>
            </div>
        </div>
        <div class="last-Month">
            Last Month <div class="last-month-number">
                <h1 data-target="10" class="count"><?php echo $data['lastMonthData'] ?></h1>
                <p> incidents</p>
            </div>
        </div>
        <div class="last-hour">
            <p>Last</p>
            <h2>24 hours</h2>
            <div class="last-hour-number">
                <h1 data-target=<?php echo $data['last24HoursData'] ?> class="count"><?php echo $data['last24HoursData']  ?> </h1>
                <p>Incidents</p>
            </div>
            <h1></h1>
        </div>
    </div>
    <div class="main-update-col-2">
        <div class="linechartmain">
            <!-- <h3>Report Incidents Polonnaruwa </h3> -->
            <div class="mychartmain">
                <canvas id="myChartmain"></canvas>
                <script>
                    let myChartmain = document.getElementById("myChartmain").getContext('2d');
                    let dataMain = [<?php echo $data['lastMonthWildElephantArrival'] ?>, <?php echo $data['lastMonthWildAnimalArrival']  ?>, <?php echo $data['lastMonthElephantFence']  ?>, <?php echo $data['lastMonthcropDamages'] ?>, <?php echo $data['lastMonthOthers']  ?>];
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->
            </div>
        </div>
        <div class="detail">
            Time Duration -1 Month <br>
            Last Modification <?php echo date("d/m/Y") ?>
        </div>
        <div class="date">
            <h2>Today</h2>
            <h3>
                <?php date_default_timezone_set('Asia/Kolkata');
                echo date('d F, Y') ?>
            </h3>
            <h2>
                Time
            </h2>
            <h3>
                <?php date_default_timezone_set('Asia/Kolkata');
                echo date('G:i:s'); ?>
            </h3>

        </div>
        <!-- <h>Today</h> -->
    </div>
    <div class="district-name">
        <h2>Polonnaruwa District</h2>
    </div>
    <div class="district-report">
        <div class="users-1">
            Wildlife Officers <h1 data-target="" class="count"><?php echo $data['villager'] ?></h1>
        </div>
        <div class="users-2">
            Grama Niladharis <h1 data-target="<?php echo $data['gramaNiladhari'] ?>" class="count"><?php
                                                                                                    echo $data['gramaNiladhari'] ?></h1>
        </div>
        <div class="users-3">
            Veterinarians <h1 data-target="10" class="count">0</h1>
        </div>
        <div class="users-4">
            Villagers <h1 data-target="<?php echo $data['villager'] ?>" class="count"><?php echo $data['villager'] ?></h1>
        </div>
        <div class="report-1">
            Wild Elephants Arrival <h1 data-target="<?php echo $data['lastMonthWildElephantArrivalDistrict']  ?>" class="count"><?php echo $data['lastMonthWildElephantArrivalDistrict']  ?></h1>
        </div>
        <div class="report-2">
            Wild Animals Danger <h1 data-target="<?php echo $data['lastMonthWildAnimalDangerDistrict'] ?>" class="count"><?php echo $data['lastMonthWildAnimalDangerDistrict'] ?></h1>
        </div>
        <div class="report-3">
            Wild Animals Arrival <h1 data-target="<?php echo $data['villager'] ?>" class="count"><?php echo $data['lastMonthWildAnimalArrivalDistrict']  ?></h1>
        </div>
        <div class="report-4">
            Crop Damages <h1 data-target="<?php echo $data['lastMonthcropDamagesDistrict']  ?>" class="count"><?php echo $data['lastMonthcropDamagesDistrict']  ?></h1>
        </div>
        <div class="report-5">
            Illegal Thing happening in the Forest<h1 data-target="<?php echo $data['lastMonthIllegalThingDistrict']  ?>" class="count"><?php echo $data['lastMonthIllegalThingDistrict'] ?></h1>
        </div>

        <div class="report-6">
            Breakdown of Elephant Fence <h1 data-target="<?php echo $data['lastMonthElephantFenceDistrict'] ?>" class="count"><?php echo $data['lastMonthElephantFenceDistrict']  ?></h1>
        </div>
        <div class="update-col">
            <?php echo $data['districtName'] ?> District Incidents report Percentage<h1 data-target=" " class="count"><?php echo $data['districtIncidentPercentage'] . "%" ?></h1>
        </div>
    </div>


    <div class="main-update-col-3">
        <div class="last-week-1">
            Last Week <div class="last-week-number-1">
                <h1 data-target="11" class="count">0</h1>
                <p> incidents </p>
            </div>
        </div>
        <div class="last-Month-1">
            Last Month <div class="last-month-number-1">
                <h1 data-target="20" class="count">0</h1>
                <p> incidents</p>
            </div>
        </div>
        <div class="last-hour-1">
            <p>Last</p>
            <h2>24 hours</h2>
            <div class="last-hour-number-1">
                <h1 data-target="12" class="count">0</h1>
                <p>Incidents</p>
            </div>
            <h1></h1>
        </div>
    </div>
    <div class="map">
        <div class="header-map">
            Incidents Report Areas
        </div>
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633098856489!5m2!1sen!2slk" width="100%" height="510" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="province-report">
        <div class="linechart">
            <h3>Report Incidents Polonnaruwa </h3>
            <div class="mychart">
                <canvas id="myChart"></canvas>
                <script>
                    let myChart1 = document.getElementById("myChart").getContext('2d');
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->
            </div>
        </div>
        <div class="chart2">
            <h3>Province of Incidents Reports </h3>
            <div class="mychart">
                <canvas id="myChart1"></canvas>
                <script>
                    let myChart2 = document.getElementById("myChart1").getContext('2d');
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->
            </div>
        </div>
    </div>
    </div>
    <div class="time-update">
        <h3>Update In last-hour Report</h3>
        <div class="chart3">
            <div class="mychart-1">
                <canvas id="myChart2"></canvas>
                <script>
                    let myChart3 = document.getElementById("myChart2").getContext('2d');
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->

            </div>
        </div>
    </div>
    <div class="monthly-update">
        <h3>Update In last-Month Report</h3>
        <div class="chart4">
            <div class="mychart-1">
                <canvas id="myChart3"></canvas>
                <script>
                    let myChart4 = document.getElementById("myChart3").getContext('2d');
                </script>

                <script src="../Public/javascript/dashboard.js"></script>

            </div>
        </div>

    </div>


    <div>

    </div>
    <script>
        const counters = document.querySelectorAll(".count");
        const speed = 10;

        counters.forEach((counter) => {
            const updateCount = () => {
                const target = parseInt(+counter.getAttribute("data-target"));
                const count = parseInt(+counter.innerText);
                const increment = Math.trunc(target / speed);
                console.log(increment);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 1);
                } else {
                    count.innerText = target;
                }
            };
            updateCount();
        });
    </script>
</body>

</html>