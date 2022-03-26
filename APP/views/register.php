<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../Public/css/header.css">
  <link rel="stylesheet" href="Public/css/home.css">
  <link rel="stylesheet" href="../Public/css/villagerRegiste.css">
  <script src="../Public/javascript/login2.js"></script>
  <script src="../Public/javascript/villagerRegister1.js"></script>
  <title>Registration Form</title>
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

        <ul class="nav-menu">
          <!-- <li id="lan"></li> -->

          <li id="home" style="padding: 15px 25px"><a href="../">Home</a></li>
          <li id="report" style="padding: 15px 30px"><a href="../incident/index?lang=1">Report Incidents</a></li>
          <li id="register" style="padding: 15px 40px; background-color:rgba(255, 255, 255, 0.36); "><a href="../villager/register?lang=1">Register</a></li>
          <li id="login" style="padding: 15px 30px"> <a id=login_text href="../user/index?lang=1">Login</a></li>

          <li class="dropdown">
            <button onclick="myFunction_2()" class="dropbtn">Language <i class="down"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="?lang=1">English</a>
              <a href="?lang=2">සිංහල</a>
              <a href="?lang=3">தமிழ்</a>
            </div>
          </li>
        </ul>
  </header>
  <h id="errorMessage"></h>
  <div id="message" style="display: none;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <!-- <h id="errorMessage"></h> -->
  </div>


  <?php
  $division = $this->division;
  //  print_r($division);
  ?>
  <?php
  $result = $this->data;
  //  print_r($result);
  //  print_r($this->division);
  $status = false;
  if (isset($_POST['submit'])) {
    foreach ($result as $row) {
      if ($_POST['nic'] ==   $row['NIC']) {
        $status = true;
  ?>

        <div id="message1" style="padding: 10px; background-color:aliceblue">
          <!-- <h1>Wildlife Care</h1></br></br> -->
          <img src="../Public/images/error-icon.png" style="width:90px;  height:90px">
          <h1>Your National ID Card is already Register </h1>
          <!-- <h>Your Incident Report Submit Sucessfully</h> -->

          <a href="../user/index?lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">login</a>
        </div>
  <?php


      }
    }
  } ?>
  <?php
  if (isset($_POST['submit'])) {

    if ($status ==  false) {
  ?>
      <div id="message1" style="padding: 10px; background-color:aliceblue">

        <img src="../Public/images/success-mesaage.png" style="width:90px;  height:90px">
        <h1>Thank You Registration Wildlife Care Management system</h1>
        <a href="../user/index?lang=1" class="login-btn" style=" border-radius: 10px; padding: 10px 10px; background-color:#056412;  color: white;">login</a>
      </div>
  <?php }
  }  ?>

  <div class="contanier2">
    <div class="register_header">
      <h3>Registration</h3>

    </div>


    <form class="form2" action="" method="post">

      <table id="form1">
        <tr>
          <td>
            <label for="fname">First Name</label>
          </td>
        </tr>
        <tr>
          <td><input type="text" class="text" id="fname" name="fname" placeholder="  Type your first name" /></td>
        </tr>
        <tr>
          <td>
            <label for="lname">Last Name</label>
          </td>
        </tr>
        <tr>
          <td><input type="text" class="text" id="lname" name="lname" placeholder="  Type your last name" /></td>
        </tr>
        <tr>
          <td><label for="gender">Gender</label></td>
        </tr>

        <tr>

          <td>
            <input type="radio" id="male" name="gender" value="M" />
            <label for="male">Male</label>
            <input type="radio" id="female " name="gender" value="F" />
            <label for="female">Female</label><br />
          </td>

        </tr>

        <tr>
          <td>
            <label for="dob">Date of Birth</label>
          </td>
        <tr>
          <td>
            <input class="text" type="date" id="dob" name="dob" />
          </td>
        </tr>

        </tr>
        <tr>
          <td>
            <label for="address">Address</label>
          </td>
        </tr>
        <tr>
          <td>
            <textarea class="text" id="address" name="address" rows="2">  Type here your address
              </textarea>
          </td>
        </tr>

        <tr>
          <td><label for="province">Province</label> </td>
        </tr>
        <tr>
          <td>
            <script>
              function populateDistrict(s1, s2) {
                var s1 = document.getElementById(s1);
                var s2 = document.getElementById(s2);

                s2.innerHTML = "";
                if (s1.value == "Central") {
                  var optionArray = ["Kandy|Kandy", "Matale|Matale", "Nuwara Eliya|Nuwara Eliya"]
                } else if (s1.value == "Eastern") {
                  var optionArray = ["Ampara|Ampara", "Batticaloa|Batticaloa", "Trincomalee|Trincomalee"]
                } else if (s1.value == "Northern") {
                  var optionArray = ["Jaffna|Jaffna", "Kilinochchi|Kilinochchi", "Mannar|Mannar", "Mullaitivu|Mullaitivu"]
                } else if (s1.value == "Southern") {
                  var optionArray = ["Galle|Galle", "Matara|Matara", "Hambantota|Hambantota"]
                } else if (s1.value == "NorthWestern") {
                  var optionArray = ["Kurunegala|Kurunegala", "Puttalam|Puttalam"]
                } else if (s1.value == "Western") {
                  var optionArray = ["Colombo|Colombo", "Gampaha|Gampaha", "Kalutha ra|Kaluthara"]
                } else if (s1.value == "NorthCentral") {
                  var optionArray = ["Anuradhapura|Anuradhapura", "Polonnaruwa|Polonnaruwa"]
                } else if (s1.value == "Uva") {
                  var optionArray = ["Badulla|Badulla", "Moneragala|Moneragala"]
                } else if (s1.value == "Sabaragamuwa") {
                  var optionArray = ["Ratnapura|Ratnapura", "Kegalle|Kegalle"]
                } else {
                  var optionArray = ["|Choose here"]
                }

                for (var option in optionArray) {
                  var pair = optionArray[option].split("|");
                  var newOption = document.createElement("option");
                  newOption.value = pair[0];
                  newOption.innerHTML = pair[1];
                  s2.options.add(newOption);
                }
              }
            </script>
            <select class="text" name="province" id="province" onclick="populateDistrict(this.id,'district')">
              <option value=""> Choose here</option>
              <option value="Central">Central Province</option>
              <option value="Eastern">Eastern Province</option>
              <option value="Northern">Northern Province</option>
              <option value="Southern">Southern Province</option>
              <option value="Western">Western Province</option>
              <option value="NorthWestern"> North Western Province </option>
              <option value="NorthCentral"> North Central Province </option>
              <option value="Uva">Uva Province</option>
              <option value="Sabaragamuwa"> Sabaragamuwa Province </option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="district">District</label> </td>
        </tr>
        <tr>
          <td>
            <script>
              function populateGnd(s1, s2) {
                var s1 = document.getElementById(s1);
                var s2 = document.getElementById(s2);

                s2.innerHTML = "";
                if (s1.value == "Kandy") {
                  var optionArray = []
                } else if (s1.value == "Matale") {
                  var optionArray = []
                } else if (s1.value == "Nuwara Eliya") {
                  var optionArray = []
                } else if (s1.value == "Ampara") {
                  var optionArray = []
                } else if (s1.value == "Batticaloa") {
                  var optionArray = []
                } else if (s1.value == "Trincomalee") {
                  var optionArray = []
                } else if (s1.value == "Jaffna") {
                  var optionArray = []
                } else if (s1.value == "Kilinochchi") {
                  var optionArray = []
                } else if (s1.value == "Mannar") {
                  var optionArray = []
                } else if (s1.value == "Mullaitivu") {
                  var optionArray = []
                } else if (s1.value == "Galle") {
                  var optionArray = []
                } else if (s1.value == "Matara") {
                  var optionArray = ["Deniyaya|Deniyaya"]
                } else if (s1.value == "Hambantota") {
                  var optionArray = ["Thissamaharama|Thissamaharama", "Sooriyawewa|Sooriyawewa", "Lunugamwehera|Lunugamwehera", "Hambanthota|Hambanthota", "Weeraketiya|Weeraketiya", "Angunukolapelassa|Angunukolapelassa", "Katuwana|Katuwana", "Hingurakgoda|Hingurakgoda"]
                } else if (s1.value == "Kurunegala") {
                  var optionArray = []
                } else if (s1.value == "Puttalam") {
                  var optionArray = []
                } else if (s1.value == "Colombo") {
                  var optionArray = []
                } else if (s1.value == "Gampaha") {
                  var optionArray = []
                } else if (s1.value == "Kaluthara") {
                  var optionArray = []
                } else if (s1.value == "Anuradhapura") {
                  var optionArray = ["Padaviya|Padaviya", "Galenbindunuwawa|Galenbindunuwawa", "Kekirawa|Kekirawa", "Kabethigollawa|Kabethigollawa", "Medawachchiya|Medawachchiya", "Kahatagasdigiliya|Kahatagasdigiliya", "Horowpathana|Horowpathana"]
                } else if (s1.value == "Polonnaruwa") {
                  var optionArray = ["Elahera|Elahera", "Dimbulagala|Dimbulagala", "Welikanda|Welikanda", "Thamankaduwa|Thamankaduwa", "Hingurakgoda|Hingurakgoda", "Medirigiriya|Medirigiriya", "Lankapura|Lankapura"]
                } else if (s1.value == "Badulla") {
                  var optionArray = []
                } else if (s1.value == "Moneragala") {
                  var optionArray = []
                } else if (s1.value == "Kegalle") {
                  var optionArray = []
                } else if (s1.value == "Ratnapura") {
                  var optionArray = []
                } else {
                  var optionArray = ["|Choose here"]
                }

                for (var option in optionArray) {
                  var pair = optionArray[option].split("|");
                  var newOption = document.createElement("option");
                  newOption.value = pair[0];
                  newOption.innerHTML = pair[1];
                  s2.options.add(newOption);
                }
              }
            </script>
            <select class="text" name="district" id="district" onclick="populateGnd(this.id,'gndivision')">
              <option value=""> Choose here</option>

            </select>
          </td>
        </tr>
        <tr>
          <td><label for="gndivision">Gramaniladari Division</label> </td>
        </tr>
        <tr>
          <td><select class="text" name="gndivision" id="gndivision">
              <option value="">Choose here</option>
              <!-- <?php
                    //Get list data of gramaseweka name
                    foreach ($division  as $row) { ?>
                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
              <?php } ?> -->
        </tr>
        <tr>
          <td><label for="nic">NIC</label> </td>
        </tr>
        <tr>
          <td><input class="text" type="text" id="nic" name="nic" placeholder="  Type your NIC" /></td>
        </tr>
        <tr>
          <td><label for="email">Email</label> </td>
        </tr>
        <tr>
          <td><input class="text" type="email" id="email" name="email" placeholder="  Type your email" /></td>
        </tr>
        <tr>
          <td><label for="email">Telephone Number</label> </td>
        </tr>
        <tr>
          <td><input class="text" type="tp" id="tp" name="tp" placeholder="  Type your telephone number" /></td>
        </tr>
        <tr>
          <td><label for="password">Password</label> </td>
        <tr>
          <td><input type="password" class="text" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="  Enter Your  password" required>
            <div id="message_1">
              <p>
                <h id="letter1" class="invalid">A <b>lowercase</b> letter </h>
                <h id="capital" class="invalid">A <b>capital (uppercase)</b> letter</h>
                <h id="number" class="invalid">A <b>number</b></h>
                <h id="length" class="invalid">Minimum <b>8 characters</b></h>
              </p>
            </div>
          </td>
        </tr>
        <td><label for="password">Retype Password</label> </td>
        <tr>
          <td><input class="text" type="password" id="cpassword" name="cpassword" placeholder="  Retype the password" /></td>
        </tr>
        <div id="message_2">
          <h id="letter">Password and Confirm Password are Not Match</h>
        </div>
        <tr>
          <td></td>
        </tr>
      </table>
      <div class="sumbit2">
        <input type="submit" name="submit" onclick="return validation( )" value="Register" />
      </div>
      <div class="last">
      </div>
    </form>
  </div>
  </div>


  <script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter1");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var confirmpsw = document.getElementById("cpassword");

    // Villager clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message_1").style.display = "block";
    }

    //Villager clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message_1").style.display = "none";
    }

    //Villager starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>
</body>

</html>