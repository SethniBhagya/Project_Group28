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

              <li id="home"><a href="">HOME</a></li>
              <li id="report"><a href="">REPORT</a></li>
              <li id="register"><a href="">REGISTER</a></li>
              <li id="login"><a id=login_text href="">LOGIN</a></li>
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
  


  <div class="contanier3">
    <div class="register_header">
          <h3>Registration</h3>
    </div>
    <div class="otp">
      <div class="des">Confirm Your Email<br>
        Code send to __________<br><br><br>
      </div>
      <form action="" method="post">
      <div class="flex-content">
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num1" /></div>
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num2"/></div>
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num3"/></div>
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num4"/></div>
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num5"/></div>
        <div ><input class="otp1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="num6"/></div>
      
      </div>
    </div>
    
    <div class="des"><br><br><br><a href="">Send Code Again</a> <br>
     <br><br>
    </div>
    <div class="sumbit2">
      <input
        type="submit" 
        onclick=""
        name="submit2"
        value="Register"/>
     </div>
   </div >
    </form>

<div class="last">
     
</div>
    


  
  
</div> 

  </body>
</html>