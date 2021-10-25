<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="../Public/css/adminNotice.css">
     <script src="../Public/Javascript/admin.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    <title>Place Notice</title>
</head>
<body >
    <header id="main">
        <img src="../Public/images/icon.png" alt="icon" id="icon">
        <nav id="navbar" class="mybar">
            <div href="javascript:void(0);" class="icon" onclick="myFunction_1(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul class="nav-menu">
                <li id="home" class="nav-menu-item"><a href="../">Home</a></li>
                <li id="dashboard" class="nav-menu-item"><a href="../">Dashboard</a></li>
                
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

    <div id="container1">
        <h1>Add Emergency Notice</h1>
        
    </div>

     <div id="container2">
       <select>
         <option>Select Village</option>
         <option>Darmigama</option>
         <option>Sooriyawewa</option>
       </select>
       <form id="frm">
         <label for="subject" >Subject :</label>
         <input type="text" name="subject" id="subject">
         <br>
         <label for="Description" id="lbl-description">Description :</label>
         <textarea rows="10" cols="10" form="fmr" id="Description"></textarea>
         <button type="submit" name="back" id="back" > <a href="../regionalOfficer/dashboard">Back</a> </button>
         <button type="submit" name="submit" id="submit">Submit</button>

           
       </form>
      
      
       
       
     
       

        
    </div>

</body>