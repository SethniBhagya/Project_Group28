<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <link rel="stylesheet" href="../Public/css/veterinarianViewIncidentsIndetail.css">
    <script src="../Public/Javascript/login.js"></script>
    <script src="../Public/Javascript/viewReport.js"></script>
    <script src="../Public/Javascript/wildlifeofficer.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
    <title>View Incident Details</title>
    <script>
        function mapLocation() {
            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var city = new google.maps.LatLng(<?php echo $data[0][$_GET['index']]['lat'] ?>, <?php echo $data[0][$_GET['index']]['lon'] ?>);
                var mapOptions = {
                    zoom: 15,
                    center: city
                };

                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                directionsDisplay.setMap(map);
                google.maps.event.addDomListener(document.getElementById('Btn'), 'click', calcRoute);
            }

            function calcRoute() {

                const form = document.getElementById('myForm');
                const lat = form.elements['lat'];
                const lon = form.elements['ln'];

                // getting the element's value
                let lattitude = lat.value;
                let lontitude = lon.value;

                var start = new google.maps.LatLng(lattitude, lontitude);
                //var end = new google.maps.LatLng(38.334818, -181.884886);
                var end = new google.maps.LatLng(<?php echo $data[0][$_GET['index']]['lat'] ?>, <?php echo $data[0][$_GET['index']]['lon'] ?>);

                var startMarker = new google.maps.Marker({
                    position: start,
                    map: map,
                    draggable: true
                });
                var endMarker = new google.maps.Marker({
                    position: end,
                    map: map,
                    draggable: true
                });



                var bounds = new google.maps.LatLngBounds();
                bounds.extend(start);
                bounds.extend(end);
                map.fitBounds(bounds);
                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };
                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(map);
                    } else {
                        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                    }
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        }
    </script>
    <script>
        var x = document.getElementById("demo ");

        function getLocation() {

            if (navigator.geolocation) {

                navigator.geolocation.watchPosition(showPosition);
            } else {

                x.innerHTML = "Geolocation is not supported by this browser. ";
            }
        }

        function showPosition(position) {

            let lat = position.coords.latitude;
            let lng = position.coords.longitude;
            const form = document.getElementById('myForm');
            const lt = form.elements['lat'];
            const lon = form.elements['ln'];
            const btn = form.elements['Btn'];

            lt.value = lat;
            lon.value = lng;
            btn.click();





        }
    </script>

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
                <li id="home"><a href="../?lang=1">HOME</a></li>
                <li id="userPage"><a href="../veterinarian?lang=1">USER PAGE</a></li>
                <li id="incidents"><a href="../veterinarian/viewIncidents?lang=1">INCIDENTS</a></li>
                <li id="notifications"><a href="../veterinarian/viewNotification?lang=1">NOTIFICATIONS</a></li>
                <li id="dashboard"><a href="../veterinarian/viewDashboard?lang=1">DASHBOARD</a></li>
                <li>
                    <div class="dropdown-1" style="  padding-left:  300px ">
                        <button class="dropbtn-1">Language</button>
                        <div class="dropdown-content-1">
                            <?php
                            echo "
                <a href='?lang=1&index=" . $_GET['index'] . "&name=" . $_GET['name'] . "'>English</a>
                <a href='?lang=2&index=" . $_GET['index'] . "&name=" . $_GET['name'] .  "'>සිංහල</a>
                <a href='?lang=3&index=" . $_GET['index'] . "&name=" . $_GET['name'] .  "'>தமிழ்</a> "
                            ?>
                        </div>
                    </div>
                </li>
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

    <body>
        <div class="contanier_2">


            <div class="contanier_2-1">
                <?php

                if (isset($_POST['send'])) {
                ?>

                    <div id="message1" style="padding: 10px; background-color:aliceblue">


                        <h1>You Accept the Duty</h1>


                        <a href="../veterinarian/viewIncidents?lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">OK</a>
                    </div>
                <?php

                }
                //  }
                //ss}
                ?>

            </div>


            <div class="row_first">
                <div class="col_1_first">
                    <div class="row_in_firstrow">
                        <div class="col_1_first"><img src="../Public/images/user_icon4-01.png" class="image"></div>

                        <div class="col_2_first"> <br>User_ID : W001</div>
                    </div>
                </div>
                <div class="col_2_first">Accepted Wildlifeofficer :<br> <?php echo $_GET['name'] ?> </div>
            </div>
            <div class="row">

                <div class="col_1"><?php echo $data[0][$_GET['index']]['description']  ?></div>
                <div class="col_2">Report_Number - <?php echo $data[0][$_GET['index']]['incidentID']  ?></div>
                <div class="col_2">Date - <?php echo $data[0][$_GET['index']]['date']  ?>
                </div>
            </div>
            <div class="row_last">
                <!-- <div class="col_2_last"><button type='submit' class='backButton' id='view' onclick=''>
                        <a href='../veterinarian/viewIncidents'>BACK</a>

                </div> -->


                <!-- <div class="save_button">
                    <?php
                    // if ($data[0][$_GET['index']]['vetStatus'] == 'pending') {

                    //     echo "<form method='POST' action='../veterinarian/trigerRequest?lang=1'><input type='text' style='display:none' name='acc' value=" . $data[0][$_GET['index']]['incidentID'] . "><button class='buttonAccept' id='acceptId' value='ACCEPT' name='accept'/>ACCEPT</button></form>";
                    // } else {
                    //     echo "<form method='POST' action='../veterinarian/trigerRequest?lang=1'><input type='text' style='display:none'  name='can' value=" . $data[0][$_GET['index']]['incidentID'] . "><button class='buttonCancel' id='cancelId' value='CANCEl' name='cancel'/>CANCEL</button></form>";
                    // }


                    ?>



                </div> -->



                <input type="button" id="submitBtn" onclick="getLocation()" value="Track current Location" />

            </div>


            <div class="map" id="map">
                <div class="map">

                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126452.02111388237!2d80.94313801331407!3d7.934107447297657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb44ba3b16ce27%3A0xc34997a2b3032b7c!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1633098856489!5m2!1sen!2slk" width="100%" height="510" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>


            </div>
            <div class="last">

            </div>



        </div>

    </body>

</html>