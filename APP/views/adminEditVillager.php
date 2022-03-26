
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/adminEditVillager.css">
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
                        <a href="../admin/viewProfile">View Profile</a>
                        <a href="../user/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

  
    <div class="container">

        <div class="registrationHeader">
            <ul>
                <li><h3>Edit USER</h3></li>
                
                
                
            </ul>
         
    
        </div>

         

        <div id="notification">
            <?php  
              if(!empty($_GET["error"]))
                echo "<div id=\"errordiv\"><img src=\"../Public/images/error-icon.png\" alt=\"icon\" class=\"icon\"><br><h2 id=\"error\"> Unsuccessfull!!".$_GET["error"]."</h2></div>";
              else if(!empty($_GET["success"]))
                echo "<div id=\"successdiv\"><img src=\"../Public/images/success.png\" alt=\"icon\" class=\"icon\"><br><h2 id=\"success\">".$_GET["success"]."</h2></div>";
            ?>
              
        </div>

       

       
        <div class="container-2">


            


             


             <form name="vilForm" class="vilform"  method="POST" action="../admin/editVillager" onsubmit="return nicPasswordValidate('villager')">
                <table>
                    

                    <tr>
                        <td>
                            <label for="nic">NIC</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["NIC"]?> type="text" name="nic"  id="nic" required>
                            <label class="id-error" id="vil-NIC">Please Enter NIC Right Format</label>
                        </td>
                        

                        
                    </tr>

                    <tr>
                        <td>
                            <label for="fname">First Name</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["Fname"]?> type="text" name="fname" id="fname" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="lname">Last Name</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["Lname"]?> type="text" name="lname" id="lname" required>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><label for="gender">Gender</label></td>
        
                        <td>
                            <?php $forMale="";$forFemale="";if($data["gender"]=='M')$forMale="checked";else $forFemale="checked"?>
                            <input <?php echo $forMale;?> type="radio" id="male" name="gender" value="M"/>
                            <label for="male">Male</label>
                            <input <?php echo $forFemale;?> type="radio" id="female " name="gender" value="F" />
                            <label for="female">Female</label><br />
                        </td>
      
                    </tr>

                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["BOD"];?> type="Date" name="dob" id="dob" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="address">Address</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["Address"];?> type="text" name="address" id="address" required>
                        </td>
                    </tr>

                    <!-- <tr>
                        <td>
                            <label for="villagevil">Village</label>
                        </td>
                        <td>
                            <select class="text" onclick="checkVil()" name="village" id="villagevil"    required>
                            
                                  
                               </select>
                              
                        </td>
                        <td id="vil-vil"><p>Please fill GN Division,District and, Province first</p></td>
                    </tr>



                    <tr>
                        <td>
                            <label for="gndvil">GN Division</label>

                        </td>

                        <td>
                            <select  name="gnd" id="gndvi" onclick="checkGn()" onchange ="selectVil(this.value)" required>
                                     
                         
                            </select>
                            
                        </td>
                        
                        <td id="vil-gn"><p>Please fill District and Province first</p></td>  


                        
                    </tr>

                    <tr>

                        <td>
                                 <label for="districtvil">District</label>
                           </td>
                         <td>
                                <select class="text" name="district" onclick="checkDis()" id="districtvil"  onchange ="selectGN(this.value)" required>
                                     
                         
                               </select>
                           </td>

                         <td id="vil-dis"><p>Please fill  Province first</p></td>
                        
                    </tr>
                    
                    <tr>
                       
                            <td><label for="province">Province</label></td>

                          <td>
                               <select class="text" name="province" id="province-vil"   onchange ="selectDistrict(this.value)"  required>
                                  <option>Select Province</option>
                                   <?php $rows=$data["province"]; foreach($rows as $row){ echo "<option"?><?php echo " value=".$row["Name"]." >".$row["Name"]."</option>";}?> 
                                    </select>

                            
                           </td>

                          
                          
                    </tr> -->


                

                    <tr>
                        <td>
                            <label for="mobile">Mobile number</label>
                        </td>
                        <td>
                            <input <?php echo "value=0".$data["mobileNo"]?> type="text" name="mobile" id="mobile" required>
                        </td>
                    </tr>

                     <tr>
                        <td>
                            <label for="email">E mail</label>
                        </td>
                        <td>
                            <input <?php echo "value=".$data["email"]?> type="email" name="email" id="email" required>
                        </td>
                    </tr>

                    <!-- <tr>
                        <td>
                            <label for="password">Tempory Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                            <label class="error-password" id="vil-pass">Password must conation more than 7 characters and atleast one lowercase, one upprecase, one digit and one special character(@#$%^&*..)</label>
                        </td>
                    </tr> -->




                </table>

                <button onclick="location.href='../admin/viewUser'">back</button>
                <button type="submit" name="submit" value="villager">Submit</button>
                

                



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

  <?php if(isset($_GET["error"]) || isset($_GET["success"])){?>

  $(document).ready(function(){
    $("#notification").delay(5000).fadeOut();
  })

  <?php } ?>

  <?php if(empty($_GET["error"]) && empty($_GET["success"])){?>

  $(document).ready(function(){
    $("#notification").hide();
  })

  <?php } ?>

   


   function nicPasswordValidate(x){
    switch(x){
        case "gramaNiladhari":{
            var NIC=document.forms["gnForm"]["nic"].value;
            var errorElement=document.getElementById("gn-NIC");
            var password=document.forms["gnForm"]["password"].value;
            var passwordErrorElement=document.getElementById("gn-pass");
        }
        break;
        case "veterinarian":{
            var NIC=document.forms["vetForm"]["nic"].value;
            var errorElement=document.getElementById("vet-NIC");
            var password=document.forms["vetForm"]["password"].value;
            var passwordErrorElement=document.getElementById("vet-pass");
        }
        break;
        case "wildlifeOfficer":{
            var NIC=document.forms["wilForm"]["nic"].value;
            var errorElement=document.getElementById("wil-NIC");
            var password=document.forms["wilForm"]["password"].value;
            var passwordErrorElement=document.getElementById("wil-pass");
        }
        break;
        case "regionalOfficer":{
            var NIC=document.forms["regForm"]["nic"].value;
            var errorElement=document.getElementById("reg-NIC");
            var password=document.forms["regForm"]["password"].value;
            var passwordErrorElement=document.getElementById("reg-pass");
        }
        break;
        case "villager":{
            var NIC=document.forms["vilForm"]["nic"].value;
            var errorElement=document.getElementById("vil-NIC");
            var password=document.forms["vilForm"]["password"].value;
            var passwordErrorElement=document.getElementById("vil-pass");
        }
        break;
     }
    
    

    if(NIC.length==10)
    {
        if(NIC.charAt(9)=='V' || NIC.charAt(9)=='X')
        {
            if(password.length<8)
             { 
                alert(password);
                passwordErrorElement.style.display="block";
                return false;


             }
             else if(password.search(/[a-z]/)==-1|| password.search(/[A-Z]/)==-1 || password.search(/[0-9]/)==-1 || password.search(/[@#$%^&*!.,+]/)==-1 )
             { 
                passwordErrorElement.style.display="block";
                return false;

             }
             else
                return true;

            
        }

        else{
            errorElement.style.display="block";
            return false;
            

        }

            
    }

    else if(NIC.length==12)
    {
        if((NIC.search(/[a-z]/)==-1)&&(NIC.search(/[A-Z]/)==-1)&&(NIC.search(/[!@#\$%\^\&*.+]/)==-1))
        {
            if(password.length<8)
             { 
                passwordErrorElement.style.display="block";
                return false;


             }
             else if(password.search(/[a-z]/)==-1|| password.search(/[A-Z]/)==-1 || password.search(/[0-9]/)==-1 || password.search(/[@#$%^&*!.,+]/)==-1 )
             { 
                passwordErrorElement.style.display="block";
                return false;

             }
             else
                return true;
        }


            
        else{
            errorElement.style.display="block";
            return false;
            

        }
    }
    else{  
            errorElement.style.display="block";
            return false;
            

        }


   }

   function checkVil()
   {
     var gnInfo=document.getElementById("gndvi").value;
     var disInfo=document.getElementById("districtvil").value;
     var proInfo=document.getElementById("province").value;
    
    
     if(gnInfo===''||disInfo===''||proInfo==='')
     { var msg = new SpeechSynthesisUtterance('Please fill GN Division,District and, Province first');
       window.speechSynthesis.speak(msg);
        document.getElementById("vil-vil").style.display="block";

         setTimeout(function() {
          $('#vil-vil').fadeOut('fast');
         }, 5000);

     }
     

        
   }

   function checkGn()
   {  
     
     var disInfo=document.getElementById("districtvil").value;
     var proInfo=document.getElementById("province").value;

    
     if(disInfo===''||proInfo==='')
     {   var msg = new SpeechSynthesisUtterance('Please fill District and Province first');
       window.speechSynthesis.speak(msg);
        document.getElementById("vil-gn").style.display="block";

         setTimeout(function() {
          $('#vil-gn').fadeOut('fast');
         }, 5000);

     }
     

        
   }

   function checkDis()
   {  
     var proInfo=document.getElementById("province-vil").value;

    
     if(proInfo==='Select Province')
     {    
        var msg = new SpeechSynthesisUtterance('Please fill Province first');
         window.speechSynthesis.speak(msg);
     
        document.getElementById("vil-dis").style.display="block";

         setTimeout(function() {
          $('#vil-dis').fadeOut('fast');
         }, 5000);

     }
     

        
   }

</script>

</body>
</html>