<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerDashboard.css">
    <script src="../Public/Javascript/login.js"></script>
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
    <div class="header-name">
        <h>ලංකාවේ මුළු එකතුව </h>
        <h style="float:right">අවසන් වරට වෙනස් කළේ 30/09/2021</h>
    </div>
    <!-- <div class="header-name"><h><pre  style="font-size: larger;font-style: normal; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Total in Sri Lanka                                                                                                                                                               LastModified 30/09/2021</pre></h> </div> -->

    <div class="main-update-col-1">
        <div class="last-week">
            ගිය සතිය <div class="last-week-number">
                <h1 data-target="10" class="count">0</h1>
                <p> සිදුවීම් </p>
            </div>
        </div>
        <div class="last-Month">
            පසුගිය මාසය <div class="last-month-number">
                <h1 data-target="10" class="count">0</h1>
                <p> සිදුවීම්</p>
            </div>
        </div>
        <div class="last-hour">
            <p> පසුගිය</p>
            <h2>24 පැය</h2>
            <div class="last-hour-number">
                <h1 data-target="10" class="count">0 </h1>
                <p>සිදුවීම්</p>
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
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->
            </div>
        </div>
        <div class="detail">
            කාලය -මාස 3 යි <br>
            අවසාන වෙනස් කිරීම 02/09/2021
        </div>
        <div class="date">
            <h2>අද</h2>
            <h3>
                <?php date_default_timezone_set('Asia/Kolkata');
                echo date('d F, Y') ?>
            </h3>
            <h2>
                කාලය
            </h2>
            <h3>
                <?php date_default_timezone_set('Asia/Kolkata');
                echo date('G:i:s'); ?>
            </h3>

        </div>
        <!-- <h>Today</h> -->
    </div>
    <div class="district-name">
        <h2>පොළොන්නරුව දිස්ත්‍රික්කය</h2>
    </div>
    <div class="district-report">
        <div class="users-1">
            වනජීවී නිලධාරින් <h1 data-target="20" class="count">0</h1>
        </div>
        <div class="users-2">
            ග්‍රාමනිලදාරින් <h1 data-target="23" class="count">0</h1>
        </div>
        <div class="users-3">
            පශු වෛද්යවරුන් <h1 data-target="10" class="count">0</h1>
        </div>
        <div class="users-4">
            ගම්වාසීන් <h1 data-target="10" class="count">0</h1>
        </div>
        <!-- <div class="report-type">
             <div for="" class="name">Wild Elephants Arrival <h1  data-target="90"  class="count">0</h1>  </div>  
             <div for="" class="name">Wild Animals Arrival <h1  data-target="80"  class="count">0</h1> </div>  
             <div for="" class="name">Elephants fence <h1  data-target="60"  class="count">0</h1>    </div> 
             <div for="" class="name">Crop Damages <h1  data-target="30"  class="count">0</h1> </div> 
             <div for="" class="name">Other  <h1  data-target="50"  class="count">0</h1></div><br>
         </div>
         <div class="user-type">
             <div for="" class="name">Regional Wildlife Officer <h1  data-target="10"  class="count">0</h1></div> 
             <div for="" class="name">Wildlife Officers <h1  data-target="30"  class="count">0</h1></div> 
             <div for="" class="name">Gramaniladari <h1  data-target="50"  class="count">0</h1></div> 
             <div for="" class="name">Vertinarian <h1  data-target="10"  class="count">0 </h1> </div> 
             <div for=""class="name">Vilager <h1  data-target="160"  class="count">0</h1></div>
         </div> -->
        <div class="report-1">
            වන අලි පැමිණීම <h1 data-target="20" class="count">0</h1>
        </div>
        <div class="report-2">
            අලි වැට වාර්තාව <h1 data-target="20" class="count">0</h1>
        </div>
        <div class="report-3">
            වන සතුන් පැමිණීම <h1 data-target="20" class="count">0</h1>
        </div>
        <div class="report-4">
            වගා හානි වාර්තාව <h1 data-target="20" class="count">0</h1>
        </div>
        <div class="report-5">
            වනාන්තරයේ සිදු වන නීති විරෝධී දේ<h1 data-target="20" class="count">0</h1>
        </div>

        <div class="report-6">
            අලි වැට වාර්තාව බිඳවැටීම <h1 data-target="16" class="count">0</h1>
        </div>
        <div class="update-col">
            පොළොන්නරුව දිස්ත්රික් සිදුවීම් වාර්තා ප්රතිශතය <h1 data-target="90" class="count">0 </h1>
            <h2>%</h2>
        </div>
    </div>


    <div class="main-update-col-3">
        <div class="last-week-1">
            ගිය සතිය <div class="last-week-number-1">
                <h1 data-target="11" class="count">0</h1>
                <p> incidents </p>
            </div>
        </div>
        <div class="last-Month-1">
            පසුගිය මාසය <div class="last-month-number-1">
                <h1 data-target="20" class="count">0</h1>
                <p> incidents</p>
            </div>
        </div>
        <div class="last-hour-1">
            <p> පසුගිය</p>
            <h2>24 පැය</h2>
            <div class="last-hour-number-1">
                <h1 data-target="12" class="count">0</h1>
                <p>Incidents</p>
            </div>
            <h1></h1>
        </div>
    </div>
    <div class="map">
        <div class="header-map">
            සිදුවීම් වාර්තා කරන ප්‍රදේශ
        </div>
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633098856489!5m2!1sen!2slk" width="100%" height="510" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="province-report">
        <div class="linechart">
            <h3>පොළොන්නරුවේ සිදුවීම් වාර්තා කරන්න </h3>
            <div class="mychart">
                <canvas id="myChart"></canvas>
                <script>
                    let myChart1 = document.getElementById("myChart").getContext('2d');
                </script>
                <!-- <script src="../Javascript/dashboard.js"></script> -->
            </div>
        </div>
        <div class="chart2">
            <h3>සිදුවීම් පළාත වාර්තාව </h3>
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
        <h3>අවසන් පැය වාර්තාවේ යාවත්කාලීන </h3>
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
        <h3>පසුගිය මාසයේ වාර්තාවේ යාවත්කාලීන</h3>
        <div class="chart4">
            <div class="mychart-1">
                <canvas id="myChart3"></canvas>
                <script>
                    let myChart4 = document.getElementById("myChart3").getContext('2d');
                </script>

                <script src="../Public/javascript/dashboardSinhala.js"></script>

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