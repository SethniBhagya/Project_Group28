<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Public/css/style_reg.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/login.js"></script>
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

              <li id="home"><a href="##">HOME</a></li>
              <li id="report"><a href="##">REPORT</a></li>
              <li id="register"><a href="">REGISTER</a></li>
              <li id="login"><a id=login_text href="####">LOGIN</a></li>
              <li class="dropdown">
                  <button onclick="myFunction_2()" class="dropbtn">Language <i class="down"></i></button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="">English</a>
                    <a href="">සිංහල</a>
                    <a href="">சிங்களம்</a>
                  </div>
              </li>
          </ul>
  </header>
  


  <div class="contanier2">
    <div class="register_header">
          <h3>Registration</h3>
      </div>

      <?php 
        function check(){
         if(isset($_POST['submit'])) {
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            if( $password===$cpassword){
              return true ;}
              else{
                return false ;
              }
            }   
         }
       ?>

    <form class="form2" action="<?php if(check()){ echo "confirmMail";}else { echo ""; } ?>" method="post">
   	
     <table id="form1">
      <tr>
        <td >
          <label for="fname">First Name</label>
        </td>
      </tr>
      <tr><td ><input type="text" class="text" id="fname" name="fname" placeholder="  Type your first name" required /></td></tr>
      <tr>
        <td>
          <label for="lname">Last Name</label>
        </td>
      </tr>
      <tr>
        <td><input type="text" class="text" id="lname" name="lname" placeholder="  Type your last name" required /></td>
      </tr>
      <tr>
        <td><label for="gender">Gender</label></td>
        </tr>
        
        <tr>
        
        <td>
          <input type="radio" id="male" name="male" value="Male" required />
          <label for="male">Male</label>
          <input type="radio" id="female" name="femala" value="Female" />
          <label for="female">Female</label><br />
        </td>
      
      </tr>
   
      <tr>
        <td>
          <label for="dob">Date of Birth</label>
        </td>
        <tr>
          <td>
          <input class="text" type="date" id="dob" name="dob" required />
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
          <textarea class="text" id="address" name="address" rows="2" required >  Type here your address
              </textarea>
        </td>
      </tr>
      <tr>
        <td>
          <label for="province">Province</label>
        </td>
        
        </tr>
        <tr>

        <td>
          <select class="text" name="province" id="province" required>
            <option value="">  Choose here</option>
            <option value="central province">Central Province</option>
            <option value="eastern province">Eastern Province</option>
            <option value="northern province">Northern Province</option>
            <option value="southern  province">Southern Province</option>
            <option value="western province">Western Province</option>
            <option value="north western province">
              North Western Province
            </option>
            <option value="north central province">
              North Central Province
            </option>
            <option value="uva province">Uva Province</option>
            <option value="sabaragamuwa province">
              Sabaragamuwa Province
            </option>
          </select>
        </td>
        <tr>
        <td>
          <label for="district">District</label>
        </td>
      </tr>
       
        <tr>
        <td>
          <select class="text" name="district" id="district" required>
            <option value="">  Choose here</option>
            <option value="Gampaha">Gampaha District</option>
            <option value="Colombo">Colombo</option>
            <option value="Kalutara">Kalutara</option>
            <option value="Anuradhapura">Anuradhapura District</option>
            <option value="Polonnaruwa">Polonnaruwa</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Mannar">Mannar</option>
            <option value="Mullaitivu">Mullaitivu District</option>
            <option value="Vavuniya">Vavuniya</option>
            <option value="Puttalam">Puttalam</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Matale">Matale</option>
            <option value="Kandy">Kandy</option>
            <option value="Nuwara Eliya">Nuwara Eliya District</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Ratnapura">Ratnapura</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Batticaloa">Batticaloa</option>
            <option value="Ampara">Ampara</option>
            <option value="Badulla">Badulla</option>
            <option value="Monaragala">Monaragala</option>
            <option value="Hambantota">Hambantota</option>
            <option value="Matara">Matara</option>
            <option value="Galle">Galle</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label  for="gndivision">Gramaniladari Division</label>
        </td>
      </tr>
      <tr>
        <td><input class="text" type="text" id="gndivision" name="gndivision" placeholder="  Type your gramaniladhari division" required /></td>
      </tr>
      <tr>
        <td>
          <label for="nic">NIC</label>
        </td>
        </tr>
        <tr>
        <td><input class="text" type="text" id="nic" name="nic" placeholder="  Type your NIC" required /></td>
      </tr>
      <tr>
        <td>
          <label for="email">Email</label>
        </td>
      </tr>
      <tr>
        <td><input class="text" type="email" id="email" name="email" placeholder="  Type your email" /></td>
      </tr>
      <tr>
        <td>
          <label for="email">Telephone Number</label>
        </td>
      </tr>
      <tr>
        <td><input class="text" type="tp" id="tp" name="tp" placeholder="  Type your telephone number"  required /></td>
      </tr>
      <tr>
        <td>
          <label for="password">Password</label>
        </td>
      </tr>
        <td><input class="text" type="password" id="password" name="password" placeholder="  Type a password for your profile"  required /></td>
      </tr>
      <tr>
      <tr>
        <td>
          <label for="cpassword">Confirm Password</label>
        </td>
      </tr>
      <tr>
        <td><input class="text" type="password" id="cpassword" name="cpassword" placeholder="  Reype the password" required /></td>
      </tr>
      <tr>
        <td></td>
      </tr>
       </table>
        <div class="sumbit2">
          <input
            type="submit" name="submit"
            onclick=""
            value="Next"/>
   </div>
   <div class="last">
         
   </div>

    </form>
  
</div>
</div>  
  </body>
</html>
