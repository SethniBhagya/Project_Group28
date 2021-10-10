<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/admin_register.css">
    <link rel="stylesheet" href="../Public/css/header.css">
    <script src="../Public/Javascript/admin.js"></script>
    <title>User Registration</title>
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
                <li id="home_1"><a href="">HOME</a></li>
                <li id="report_1"><a href="">REPORT</a></li>
                <li class="dropdown">
                    <span class="dot"> <img onclick="myFunction_2(this)" src="../Public/images/user_icon.png" id="user_icon" class="user_btn"></span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

  
    <div class="container">

        <div class="registrationHeader">
            <ul>
                <li><h3>ADD USER</h3></li>
                <li><button id="profile">Go to Profile</button></li>
                
            </ul>
         
    
        </div>

         <div class="userType">
            <label for="userSelect">Select User type</label>
            <select  class="text" id="userSelect" name="userSelect" onchange ="selectForm(this.value)" required  >
                 <option value="c">Choose here</option>
                <option value="gnform">Grama Niladhari</option>
                <option value="woform">Wildlife Officer</option>
                <option value="vetform">Veterinarian</option>
                <option value="vilform">Villager</option>
                <option value="roform">Regional Officer</option>
                
            </select>
           
             

            
            
            
            
        </div>

        <div class="error" style=" margin-top: 2px;
  position: absolute;
  width: 345px;
  font-size: 18px;
  color: #c62828;
 
  text-align: center;
  top: 180px;
  
  /*border: 1px solid #EF9A9A;*/
  left: 37.5%; ">
                 <?php if(!empty($data))  echo $data; ?>
            </div>

             <!--  -->
        <div class="container2">

            <form class="gnform" method="POST" action="../admin/addUser">
                <table>

                    <tr>
                        <td>
                            <label for="gic">GIC Number</label>
                        </td>
                        <td>
                            <input type="text" name="gic" id="gic" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input type="text" name="nic" id="nic" required>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <input type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address" required>
                        </td>
                    </tr>
                    
                    <tr>
                          <td><label for="province">Work Province</label></td>

                          <td>
                               <select class="text" name="province" id="province"  required>
                                     <option value="">  Choose here</option>
                                     <option value="central province">Central Province</option>
                                     <option value="eastern province">Eastern Province</option>
                                     <option value="northern province">Northern Province</option>
                                     <option value="southern  province">Southern Province</option>
                                     <option value="western province">Western Province</option>
                                     <option value="north western province">  North Western Province</option>
                                     <option value="north central province"> North Central Province</option>
                                     <option value="uva province">Uva Province</option>
                                     <option value="sabaragamuwa province"> Sabaragamuwa Province</option>
                               </select>
                           </td>
                    </tr>

                    <tr>
                           <td>
                                 <label for="district"> Work District</label>
                           </td>
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
                                     <option value="Hambanthota">Hambantota</option>
                                     <option value="Matara">Matara</option>
                                     <option value="Galle">Galle</option>
                               </select>
                           </td>
               </tr>

               <tr>
                        <td>
                            <label for="gnd">Work GN Division</label>
                        </td>
                        <td>
                            <input type="text" name="gnd" id="gnd" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>




                </table>
                <button>back</button>
                
                    <button type="submit" name="submit" value="grama niladhari">Submit</button>
                
                 





            </form>


             <form class="vetform" method="POST" action="../admin/addUser">
                <table>

                    <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input type="text" name="nic" id="nic" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="vid">VID Number</label>
                        </td>
                        <td>
                            <input type="text" name="vid" id="vid" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                    

                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <input type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="ofn">Office Number</label>
                        </td>
                        <td>
                            <input type="text" name="ofn" id="ofn" required>
                        </td>
                    </tr>
                    
                    

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>




                </table>
                <button>back</button>
                <button type="submit" name="submit" value="veterinarian">Submit</button>
                





            </form>


             <form class="vilform"  method="POST" action="../admin/addUser">
                <table>

                    <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input type="text" name="nic" id="nic" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <input type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address" required>
                        </td>
                    </tr>
                    
                    <tr>
                          <td><label for="province">Province</label></td>

                          <td>
                               <select class="text" name="province" id="province" required>
                                     <option value="">  Choose here</option>
                                     <option value="central province">Central Province</option>
                                     <option value="eastern province">Eastern Province</option>
                                     <option value="northern province">Northern Province</option>
                                     <option value="southern  province">Southern Province</option>
                                     <option value="western province">Western Province</option>
                                     <option value="north western province">  North Western Province</option>
                                     <option value="north central province"> North Central Province</option>
                                     <option value="uva province">Uva Province</option>
                                     <option value="sabaragamuwa province"> Sabaragamuwa Province</option>
                               </select>
                           </td>
                    </tr>

                    <tr>
                           <td>
                                 <label for="district">District</label>
                           </td>
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
                                     <option value="Hambanthota">Hambanthota</option>
                                     <option value="Matara">Matara</option>
                                     <option value="Galle">Galle</option>
                               </select>
                           </td>
               </tr>

               <tr>
                        <td>
                            <label for="gnd">GN Division</label>
                        </td>
                        <td>
                            <input type="text" name="gnd" id="gnd" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="gnd">Village</label>
                        </td>
                        <td>
                            <input type="text" name="village" id="village" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>




                </table>
                <button>back</button>
                <button type="submit" name="submit" value="villager">Submit</button>
                

          



            </form>

             <form class="woform"  method="POST" action="../admin/addUser">
                <table>

                    <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input type="text" name="nic" id="nic" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="wid">WID</label>
                        </td>
                        <td>
                            <input type="text" name="wid" id="wid" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                    

                    
                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <input type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address" required>
                        </td>
                    </tr>
                    
                    
                   


               <tr>
                        <td>
                            <label for="ofn">Office Number</label>
                        </td>
                        <td>
                            <input type="text" name="ofn" id="ofn" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>




                </table>
                

               <button>back</button>
               <button type="submit"  name="submit" value="wildlife officer">Submit</button>



            </form>



            <form class="roform"  method="POST" action="../admin/addUser">
                <table>


                     <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input type="text" name="nic" id="nic" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="rid">RID</label>
                        </td>
                        <td>
                            <input type="text" name="rid" id="rid" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                   

                    
                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <input type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input type="text" name="address" id="address" required>
                        </td>
                    </tr>
                    
                    

               <tr>
                        <td>
                            <label for="on">Office Number</label>
                        </td>
                        <td>
                            <input type="text" name="on" id="on" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>




                </table>
                



              <button>back</button>
              <button type="submit" name="submit" value="regional officer">Submit</button>

            </form>

            
            

        </div>


        


    </div>

</body>