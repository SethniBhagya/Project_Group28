
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/admin_register.css">
    <link rel="stylesheet" href="../Public/css/adminHeader.css">
    <script src="../Public/Javascript/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
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

            <ul class="nav-menu">
                <li id="home" class="nav-menu-item"><a href="">Home</a></li>
                <li id="dashboard" class="nav-menu-item"><a href="../admin/dashboard">Dashboard</a></li>
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
                <li><button id="profile" onclick="location.href='../admin/viewUser'">Back</button></li>
                <form>
    
</form>
                
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

        <div id="notification">
            <?php
              if(!empty($_GET["error"]))
                echo "<h2 id=\"error\"> Unsuccessfull!!".$_GET["error"]."</h2>";
              else if(!empty($_GET["success"]))
                echo "<h2 id=\"success\">".$_GET["success"]."</h2>";
            ?>
              
        </div>

       

       
        <div class="container2">


            <form class="gnform" method="POST" action="../admin/addUser?error=&success=">
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
                        <td>
                            <label for="gndgrama">Work GN Division</label>
                        </td>
                        <td>
                            <select  name="gnd" id="gndgrama" required>
                                     
                         
                            </select>
                        </td>
                    </tr>




                    <tr>
                           <td>
                                 <label for="districtgrama"> Work District</label>
                           </td>
                           <td>
                                <select class="text" name="district" id="districtgrama"  onchange ="selectGN1(this.value)" required>
                                     
                         
                               </select>
                           </td>
               </tr>
                    
                    <tr>
                          <td><label for="province">Work Province</label></td>

                          <td>
                               <select class="text" name="province" id="province"   onchange ="selectDistrict1(this.value)"  required>
                                  <option>Select Province</option>
                                   <?php $rows=$data["province"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["Name"]." >".$row["Name"]."</option>";}?> 
                               </select>

                            
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
                <button onclick="location.href='../admin/addUser'" >back</button>
                
                    <button type="submit" name="submit" value="grama niladhari">Submit</button>
                
                 





            </form>


             <form class="vetform" method="POST" action="../admin/addUser?error=&success=">
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
                            <select class="text" name="ofn" id="ofn" required>
                                <option>Select Office Number</option>
                                <?php $rows=$data["office"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["officeNo"]." >".$row["officeNo"]."</option>";}?> 
                            </select>
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
                <button onclick="location.href='../admin/addUser'">back</button>
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
                        <td>
                            <label for="villagevil">Village</label>
                        </td>
                        <td>
                            <select class="text" name="village" id="villagevil"    required>
                                
                                  
                               </select>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <label for="gndvil">GN Division</label>

                        </td>

                        <td>
                            <select  name="gnd" id="gndvi" onchange ="selectVil(this.value)" required>
                                     
                         
                            </select>
                            
                        </td>
                        
                             


                        
                    </tr>

                    <tr>

                        <td>
                                 <label for="districtvil">District</label>
                           </td>
                         <td>
                                <select class="text" name="district" id="districtvil"  onchange ="selectGN(this.value)" required>
                                     
                         
                               </select>
                           </td>


                        
                    </tr>
                    
                    <tr>
                       
                            <td><label for="province">Province</label></td>

                          <td>
                               <select class="text" name="province" id="province"   onchange ="selectDistrict(this.value)"  required>
                                  <option>Select Province</option>
                                   <?php $rows=$data["province"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["Name"]." >".$row["Name"]."</option>";}?> 
                                    </select>

                            
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

                <button onclick="location.href='../admin/addUser'">back</button>
                <button type="submit" name="submit" value="villager">Submit</button>
                

                



            </form>

             <form class="woform"  method="POST" action="../admin/addUser?error=&success=">
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
                            

                            <select class="text" name="ofn" id="ofn" required>
                                <option>Select Office Number</option>
                                <?php $rows=$data["office"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["officeNo"]." >".$row["officeNo"]."</option>";}?> 
                            </select>
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
                

               <button onclick="location.href='../admin/addUser'">back</button>
               <button type="submit"  name="submit" value="wildlife officer">Submit</button>



            </form>



            <form class="roform"  method="POST" action="../admin/addUser?error=&success=">
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
                            <select class="text" name="ofn" id="ofn" required>
                                <option>Select Office Number</option>
                                <?php $rows=$data["office"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["officeNo"]." >".$row["officeNo"]."</option>";}?> 
                            </select>
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
                



              <button onclick="location.href='../admin/addUser'">back</button>
              <button type="submit" name="submit" value="regional officer">Submit</button>

            </form>

            
            

        </div>


        


    </div>

       <script >

        



        function selectDistrict(x){
                                

    $.post("../admin/addUser",{provinceName:x},function(data,status){
          
        $("#districtvil").html(data);


        
    });

  }

  function selectDistrict1(x){
                                

    $.post("../admin/addUser",{provinceName:x},function(data,status){
          
        $("#districtgrama").html(data);


        
    });

  }

  function selectGN(x){
    
    
    $.post("../admin/addUser",{districtName:x},function(data,status){
         
          $('#gndvi').html(data);
        
        
    });


  }

  function selectGN1(x){
    
    
    $.post("../admin/addUser",{districtName:x},function(data,status){
         
          $('#gndgrama').html(data);
        
        
    });


  }

  function selectVil(x){
    
    
    $.post("../admin/addUser",{gnName:x},function(data,status){
           
          $('#villagevil').html(data);
        
        
    });


  }

</script>

</body>