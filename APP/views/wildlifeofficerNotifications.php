<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION['NIC'])) {
    header("Location:http://localhost/WildlifeCare/user/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype'] == 'Wildlife Officer') {
    } else {
        header("Location:http://localhost/WildlifeCare/user/mustLogout");
    }
} else {
    header("Location:http://localhost/WildlifeCare/user/mustLogout");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerHeader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/wildlifeofficerNotifications.css">

    <script src="../Public/Javascript/login.js"></script>

    <title>Notifications</title>
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
                    <span class="dot"> <img onclick="myFunction_3()" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../wildlifeofficer/viewProfile?lang=1">View Profile</a>
                        <a href="../user/logout?lang=1">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-1">
        <h1>Notifications</h1>
        <?php foreach ($data as $row) {
            echo "<div class='container-2'><h2>"
                . $row['district'] . "-" . $row['gn_division'] . "-" . $row['village'] .
                "</h2>
                <h3 style='float:right'>Date:" . $row['date'] . "Time:" . $row['time'] . "</h3>
                <div class='container-sub-1'>
                <p> Alert! <br>
                <p>" . $row['description'] . "</p>
                <br>
                </p>
            </div>
                </div>";
        } ?>
    </div>
</body>

</html>