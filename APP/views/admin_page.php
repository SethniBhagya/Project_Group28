<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="../Public/css/admin_page.css">
     <script src="../Public/Javascript/admin.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    <title>Document</title>
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
                        <a href="logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container1">
        <h1>Administrator</h1>
        <div class="btn">
            <ul>
                <li>
                    <div class="user-btn">
                          <button onclick="location.href='../admin/viewUser'">Users</button>
                    
                    </div>
                </li>
                <li>
                     <div class="notice-btn">
                        <button>Notices</button>
                     </div>
                    
                </li>

            </ul>
        </div>

            
           
            
        </div>

         <div class="container2">
           

             <select id="selectInci" name="selectInci" onchange ="selectInci(this.value)">
                <option value="active">Active Cases</option>
                 <option value="week">This Week</option>
                 <option value="month">This Month</option>
                 <option value="year">This Year</option>

             </select>

             <div class="container2-inci">
                <div class="active">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>1</h2>
                    <input type="checkbox" id="show1">
                    <label for="show1">View</label>

                    <div class="detail1">
                         <label for="show1" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active elephnats are in village</h1>
            <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Office No</th>
                        <th>No of elephants</th>
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>5</td>
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>5</td>
                    

                </tr>
                </tbody>
            </table>
                    </div>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>2</h2>
                    <input type="checkbox" id="show2">
                    <label for="show2">View</label>
                    <div class="detail2">
                        <label for="show2" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active Other animals are in village</h1>

                         <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Office No</th>
                        <th>Animal</th>
                        <th>No of Animals</th>
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    <td>Tiger</td>
                    <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                    

                </tr>
                </tbody>
            </table>
                    </div>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>1</h2>
                    <input type="checkbox" id="show3">
                    <label for="show3">View</label>
                    <div class="detail3">
                        <label for="show3" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active animals are in danger</h1>
                           <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Office No</th>
                        <th>Animal</th>
                        <th>No of Animals</th>
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    <td>Tiger</td>
                    <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>Tiger</td>
                       <td>5</td>
                    

                </tr>
                </tbody>
            </table>


                    </div>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>0</h2>
                    <input type="checkbox" id="show4">
                    <label for="show4">View</label>
                    <div class="detail4">
                        <label for="show4" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active illegal thinsg</h1>
                           <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Office No</th>
                        
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    
                    
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                    

                </tr>
                </tbody>
            </table>
                    </div>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>0</h2>
                    <input type="checkbox" id="show5">
                    <label for="show5">View</label>
                    <div class="detail5">
                        <label for="show5" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active elephnats are in village</h1>

                        <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Grama Niladhari NIC</th>
                        <th>Cause Animal</th>
                        <th>Extent of damaged land(ha)</th>

                        
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>elephant</td>
                       <td>8</td>

                       
                       
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    <td>elephant</td>
                       <td>8</td>
                    
                    
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>elephant</td>
                       <td>8</td>
                       
                       
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       <td>elephant</td>
                       <td>8</td>
                       
                       
                    

                </tr>
                </tbody>
            </table>
                    </div>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>0</h2>
                    <input type="checkbox" id="show6">
                    <label for="show6">View</label>
                    <div class="detail6">
                        <label for="show6" class="close-btn1 fas fa-times"></label>
                        <h1>Detailed Details about active damge fences</h1>

                        <table>

                <thead>
                    <tr>
                        <th>Incident ID</th>
                        <th>Reporter NIC</th>
                        <th>Village</th>
                        <th>Office No</th>
                        
                        
                   </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                       
                       

                   </tr>
                 <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>Gampola</td>
                    <td>12</td>
                    
                    
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                    

                </tr>
                 <tr>
                    <td>1</td>
                       <td>1234</td>
                       <td>Gampola</td>
                       <td>12</td>
                       
                       
                    

                </tr>
                </tbody>
            </table>
                    </div>
                        
                 </div>

                 <div id="map">
             <script >
               
               function initMap(){

                var location={lat:7.216440,lng:80.848387};
                
                var map= new google.maps.Map(document.getElementById("map"),{
                    zoom:10,
                    center:location
                });

                


                var marker=new google.maps.Marker({
                    position:location,
                    map: map
                });

                
               }
           </script>
          <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6bqTtd9axLl6pZb3eeSkRgRfXVjW1zkQ&callback=initMap">
    </script> 
       </div>

                 <div class="active-dis-chart">
                    <canvas id="active-dis"></canvas>
                    <h3>Active Cases By districts</h3>
                     
                 </div>

                 <script >
                     let activeDis=document.getElementById("active-dis").getContext("2d");
    let activeDisLabels=["polonnaruwa","anuradhapura","ampara","hambanthota"];
    let activeDisData=[1,2,4,3];
     let activeDisColor=["#6495ED","#7FFFD4","#8A2BE2","#A52A2A"];
    let activeDisChart=new Chart(activeDis, {
      type:"bar",
      data:{
        labels:activeDisLabels,
        datasets:[{
          data:activeDisData,
          backgroundColor:activeDisColor
        }]
      },
      options:{
        title:{
          text:"Active Cases By districts",
          display:true
        },
        legend:{
        display:false
      }
      }
      

    });
                 </script>

             </div>
                 

             <div class="week">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>4</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>3</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>3</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>1</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>2</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>4</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>


                 <div class="week-dis-chart">
                    <canvas id="week-dis"></canvas>
                    <h3>Reported Incidents By districts</h3>

                     
                 </div>
                     <script >
                     let weekDis=document.getElementById("week-dis").getContext("2d");
    let weekDisLabels=["polonnaruwa","anuradhapura","ampara","hambanthota"];
    let weekDisData=[6,5,4,3];
     let weekDisColor=["#6495ED","#7FFFD4","#8A2BE2","#A52A2A"];
    let weekDisChart=new Chart(weekDis, {
      type:"bar",
      data:{
        labels:weekDisLabels,
        datasets:[{
          data:weekDisData,
          backgroundColor:weekDisColor
        }]
      },
      options:{
        title:{
          text:"Last week incidents",
          display:true
        },
        legend:{
        display:false
      }
      }
      

    });
                 </script>


                 <div class="week-inci-chart">
                    <canvas id="week-inci"></canvas>
                    <h3>Reported Incidents By Category</h3>

                     
                 </div>
                 <script >
                     let weekInci=document.getElementById("week-inci").getContext("2d");
    let weekInciLabels=["Elephants in village","Other animals in village","Animals are in danger","Illegal things","Damage elephnat fence","Crop damage"];
    let weekInciData=[6,5,4,3,4,5];
     let weekInciColor=["#DEB887","#5F9EA0","#8A2BE2","#2F4F4F","#BDB76B","brown"];
    let weekInciChart=new Chart(weekInci, {
      type:"pie",
      data:{
        labels:weekInciLabels,
        datasets:[{
          data:weekInciData,
          backgroundColor:weekInciColor
        }]
      },
      options:{
        title:{
          text:"Last week incidents",
          display:true
        }
      }
      

    });
                 </script>

                 <div class="week-status-chart">
                    <canvas id="week-status"></canvas>
                     <h3>Reported Incidents Status</h3>

                     
                 </div>

                 <script >
                     let weekStatus=document.getElementById("week-status").getContext("2d");
    let weekStatusLabels=["Success","Pending","Unsuccess"];
    let weekStatusData=[5,2,1];
     let weekStatusColor=["green","#7FFFD4","red"];
    let weekStatusChart=new Chart(weekStatus, {
      type:"doughnut",
      data:{
        labels:weekStatusLabels,
        datasets:[{
          data:weekStatusData,
          backgroundColor:weekStatusColor
        }]
      },
      options:{
        title:{
          text:"Last week incident status",
          display:true
        }
      }
      

    });
                 </script>

             </div>

             <div class="month">

                  <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>10</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                     <h2>8</h2>
                     
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                     <h2>6</h2>
                   
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                     <h2>1</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                     <h2>1</h2>
                     
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>4</h2>
                   
                    <p>Incidets Reported</p>
                 </div>


                 <div class="month-dis-chart">
                    <canvas id="month-dis"></canvas>
                    <h3>Reported Incidents By districts</h3>

                     
                 </div>
                     <script >
                     let monthDis=document.getElementById("month-dis").getContext("2d");
    let monthDisLabels=["polonnaruwa","anuradhapura","ampara","hambanthota"];
    let monthDisData=[11,9,24,13];
     let monthDisColor=["#6495ED","#7FFFD4","#8A2BE2","#A52A2A"];
    let monthDisChart=new Chart(monthDis, {
      type:"bar",
      data:{
        labels:monthDisLabels,
        datasets:[{
          data:monthDisData,
          backgroundColor:monthDisColor
        }]
      },
      options:{
        title:{
          text:"Last month incidents",
          display:true
        },
        legend:{
        display:false
      }
      }
      

    });
                 </script>


                 <div class="month-inci-chart">
                    <canvas id="month-inci"></canvas>
                    <h3>Reported Incidents By Category</h3>

                     
                 </div>
                 <script >
                     let monthInci=document.getElementById("month-inci").getContext("2d");
    let monthInciLabels=["Elephants in village","Other animals in village","Animals are in danger","Illegal things","Damage elephnat fence","Crop damage"];
    let monthInciData=[26,15,14,3,14,5];
     let monthInciColor=["#DEB887","#5F9EA0","#8A2BE2","#2F4F4F","#BDB76B","brown"];
    let monthInciChart=new Chart(monthInci, {
      type:"pie",
      data:{
        labels:monthInciLabels,
        datasets:[{
          data:monthInciData,
          backgroundColor:monthInciColor
        }]
      },
      options:{
        title:{
          text:"Last month incidents",
          display:true
        }
      }
      

    });
                 </script>

                 <div class="month-status-chart">
                    <canvas id="month-status"></canvas>
                    <h3>Reported Incidents Status</h3>

                     
                 </div>

                 <script >
                     let monthStatus=document.getElementById("month-status").getContext("2d");
    let monthStatusLabels=["Success","Pending","Unsuccess"];
    let monthStatusData=[5,6,1];
     let monthStatusColor=["green","#7FFFD4","red"];
    let monthStatusChart=new Chart(monthStatus, {
      type:"doughnut",
      data:{
        labels:monthStatusLabels,
        datasets:[{
          data:monthStatusData,
          backgroundColor:monthStatusColor
        }]
      },
      options:{
        title:{
          text:"Last month incident status",
          display:true
        }
      }
      

    });
                 </script>

             </div>

                 

             
             <div class="year">

                <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>121</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>24</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>62</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>15</h2>
                   
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>98</h2>
                    
                    <p>Incidets Reported</p>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>28</h2>

                    <p>Incidets Reported</p>
                        
                 </div>


                  <div class="year-dis-chart">
                    <canvas id="year-dis"></canvas>
                    <h3>Reported Incidents By districts</h3>

                     
                 </div>
                     <script >
                     let yearDis=document.getElementById("year-dis").getContext("2d");
    let yearDisLabels=["polonnaruwa","anuradhapura","ampara","hambanthota"];
    let yearDisData=[116,55,14,343];
     let yearDisColor=["#6495ED","#7FFFD4","#8A2BE2","#A52A2A"];
    let yearDisChart=new Chart(yearDis, {
      type:"bar",
      data:{
        labels:yearDisLabels,
        datasets:[{
          data:yearDisData,
          backgroundColor:yearDisColor
        }]
      },
      options:{
        title:{
          text:"Last year incidents",
          display:true
        },
        legend:{
        display:false
      }
      }
      

    });
                 </script>


                 <div class="year-inci-chart">
                    <canvas id="year-inci"></canvas>
                    <h3>Reported Incidents By Category</h3>

                     
                 </div>
                 <script >
                     let yearInci=document.getElementById("year-inci").getContext("2d");
    let yearInciLabels=["Elephants in village","Other animals in village","Animals are in danger","Illegal things","Damage elephnat fence","Crop damage"];
    let yearInciData=[116,45,124,213,14,65];
     let yearInciColor=["#DEB887","#5F9EA0","#8A2BE2","#2F4F4F","#BDB76B","brown"];
    let yearInciChart=new Chart(yearInci, {
      type:"pie",
      data:{
        labels:yearInciLabels,
        datasets:[{
          data:yearInciData,
          backgroundColor:yearInciColor
        }]
      },
      options:{
        title:{
          text:"Last year incidents",
          display:true
        }
      }
      

    });
                 </script>

                 <div class="year-status-chart">
                    <canvas id="year-status"></canvas>
                    <h3>Reported Incidents Status</h3>

                     
                 </div>

                 <script >
                     let yearStatus=document.getElementById("year-status").getContext("2d");
    let yearStatusLabels=["Success","Pending","Unsuccess"];
    let yearStatusData=[125,32,42];
     let yearStatusColor=["green","#7FFFD4","red"];
    let yearStatusChart=new Chart(yearStatus, {
      type:"doughnut",
      data:{
        labels:yearStatusLabels,
        datasets:[{
          data:yearStatusData,
          backgroundColor:yearStatusColor
        }]
      },
      options:{
        title:{
          text:"Last year incident status",
          display:true
        }
      }
      

    });
                 </script>


                 

             </div>

             </div>
           
        </div>


            

       

   <!--  <div class="container2">
       
       

        <span>
           <div id="map">
             <script >
               
               function initMap(){

                var location={lat:7.216440,lng:80.848387};
                var location1={lat:7.316440,lng:80.948387};
                 var location2={lat:7.116440,lng:80.448387};
                var map= new google.maps.Map(document.getElementById("map"),{
                    zoom:10,
                    center:location
                });

                


                var marker=new google.maps.Marker({
                    position:location,
                    map: map
                });

                var marker1=new google.maps.Marker({
                    position:location1,
                    map: map
                });

                var marker2=new google.maps.Marker({
                    position:location2,
                    map: map
                });
               }
           </script>
 -->          <!--   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap">  </script> -->
         <!--    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6bqTtd9axLl6pZb3eeSkRgRfXVjW1zkQ&callback=initMap">
    </script> -->
            
            <!--  <script type="text/javascript" src="https://maps.google.com/maps?q=Tangesir%20Dates%20Products">  </script> -->

        <!--    </div>
          
            
        </span>
        <span>
           
             
            
        </span>

        

    </div> -->


    <div class="container3">
       
           <select  id="selectDis" name="selectDis" onchange ="selectDis(this.value)">
               <option value="polonnaruwa">Polonnaruwa</option>
               <option value="anuradhapura">Anuradhapura</option>
               <option value="ampara">Ampara</option>
               <option value="hambanthota">Hambanthota</option>
           </select>

           <div class="container3-dis">
             <div class="polonnaruwa">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>1</h2>
                   
                    <label > Active Incidents </label>
                    
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>2</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>1</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>


                  <div id="map-polonnaruwa">
             <!-- <script >
               
               function initMap1(){

                var location1={lat:7.316440,lng:80.848387};
                
                var map1= new google.maps.Map(document.getElementById("map-polonnaruwa"),{
                    zoom:10,
                    center:location
                });

                


                var marker1=new google.maps.Marker({
                    position:location1,
                    map: map1
                });

                
               }
           </script>
         <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
         <iframe src="http://maps.google.com/maps?q=7.316440,80.848387&z=10&output=embed" height="500" width="600"></iframe>
             </div>


             <div class="polonnaruwa-status-chart">
                    <canvas id="polonnaruwa-status"></canvas>
                    <h3>Reported Incident Status</h3>

                     
                 </div>

                 <script >
                     let polonnaruwaStatus=document.getElementById("polonnaruwa-status").getContext("2d");
    let polonnaruwaStatusLabels=["Success","Pending","Unsuccess"];
    let polonnaruwaStatusData=[15,12,2];
     let polonnaruwaStatusColor=["green","#7FFFD4","red"];
    let polonnaruwaStatusChart=new Chart(polonnaruwaStatus, {
      type:"doughnut",
      data:{
        labels:polonnaruwaStatusLabels,
        datasets:[{
          data:polonnaruwaStatusData,
          backgroundColor:polonnaruwaStatusColor
        }]
      },
      options:{
        title:{
          text:"Last polonnaruwa incident status",
          display:true
        }
      }
      

    });
                 </script>
         </div>


             <div class="anuradhapura">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>3</h2>
                   
                    <label >Active Incidents </label>
                    
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>1</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>0</h2>
                    <label >Active Incidents </label>
                        
                 </div>


                 <div id="map-anuradhapura">
            <!--  <script >
               
               function initMap2(){

                var location={lat:7.216440,lng:80.848387};
                
                var map= new google.maps.Map(document.getElementById("map-anuradhapura"),{
                    zoom:10,
                    center:location
                });

                


                var marker=new google.maps.Marker({
                    position:location,
                    map: map
                });

                
               }
           </script>
          <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6bqTtd9axLl6pZb3eeSkRgRfXVjW1zkQ&callback=initMap2">
    </script>  -->
    <iframe src="http://maps.google.com/maps?q=7.216440,80.848387&z=10&output=embed" height="500" width="600"></iframe>
             </div>

             <div class="anuradhapura-status-chart">
                    <canvas id="anuradhapura-status"></canvas>
                    <h3>Reported Incident Status</h3>

                     
                 </div>

                 <script >
                     let anuradhapuraStatus=document.getElementById("anuradhapura-status").getContext("2d");
    let anuradhapuraStatusLabels=["Success","Pending","Unsuccess"];
    let anuradhapuraStatusData=[5,22,5];
     let anuradhapuraStatusColor=["green","#7FFFD4","red"];
    let anuradhapuraStatusChart=new Chart(anuradhapuraStatus, {
      type:"doughnut",
      data:{
        labels:anuradhapuraStatusLabels,
        datasets:[{
          data:anuradhapuraStatusData,
          backgroundColor:anuradhapuraStatusColor
        }]
      },
      options:{
        title:{
          text:"Last anuradhapura incident status",
          display:true
        }
      }
      

    });
                 </script>
         </div>
               
               <div class="ampara">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>1</h2>
                   
                    <label >Active Incidents </label>
                    
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>2</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>1</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>1</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>3</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>2</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                   <div id="map-ampara">
             <!-- <script >
               
               function initMap3(){

                var location={lat:7.216440,lng:80.848387};
                
                var map= new google.maps.Map(document.getElementById("map-ampara"),{
                    zoom:10,
                    center:location
                });

                


                var marker=new google.maps.Marker({
                    position:location,
                    map: map
                });

                
               }
           </script>
          <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6bqTtd9axLl6pZb3eeSkRgRfXVjW1zkQ&callback=initMap3">
    </script>  -->

            <iframe src="http://maps.google.com/maps?q=7.416440,80.848387&z=10&output=embed" height="500" width="600"></iframe>

             </div>



             <div class="ampara-status-chart">
                    <canvas id="ampara-status"></canvas>
                    <h3>Reported Incident Status</h3>

                     
                 </div>

                 <script >
                     let amparaStatus=document.getElementById("ampara-status").getContext("2d");
    let amparaStatusLabels=["Success","Pending","Unsuccess"];
    let amparaStatusData=[25,7,1];
     let amparaStatusColor=["green","#7FFFD4","red"];
    let amparaStatusChart=new Chart(amparaStatus, {
      type:"doughnut",
      data:{
        labels:amparaStatusLabels,
        datasets:[{
          data:amparaStatusData,
          backgroundColor:amparaStatusColor
        }]
      },
      options:{
        title:{
          text:"Last ampara incident status",
          display:true
        }
      }
      

    });
                 </script>
         </div>
               

               <div class="hambanthota">

                 <div class="inci">
                    <img src="../Public/images/elephant.png">
                    <h2>1</h2>
                   
                    <label >Active Incidents </label>
                    
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/animal.png">
                    <h2>2</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/danger.png">
                    <h2>1</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/illegal.png">
                    <h2>4</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/crop.png">
                    <h2>5</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                 <div class="inci">
                    <img src="../Public/images/fence.png">
                    <h2>6</h2>
                    <label >Active Incidents </label>
                        
                 </div>
                   <div id="map-hambanthota">
            <!--  <script >
               
               function initMap4(){

                var location={lat:7.416440,lng:80.848387};
                
                var map= new google.maps.Map(document.getElementById("map-hambanthota"),{
                    zoom:10,
                    center:location
                });

                


                var marker=new google.maps.Marker({
                    position:location,
                    map: map
                });

                
               }
           </script>
          <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6bqTtd9axLl6pZb3eeSkRgRfXVjW1zkQ&callback=initMap4">
    </script>  -->
    <iframe src="http://maps.google.com/maps?q=7.316440,80.448387&z=10&output=embed" height="500" width="600"></iframe>
             </div>

             <div class="hambanthota-status-chart">
                    <canvas id="hambanthota-status"></canvas>
                    <h3>Reported Incident Status</h3>

                     
                 </div>

                 <script >
                     let hambanthotaStatus=document.getElementById("hambanthota-status").getContext("2d");
    let hambanthotaStatusLabels=["Success","Pending","Unsuccess"];
    let hambanthotaStatusData=[15,12,2];
     let hambanthotaStatusColor=["green","#7FFFD4","red"];
    let hambanthotaStatusChart=new Chart(hambanthotaStatus, {
      type:"doughnut",
      data:{
        labels:hambanthotaStatusLabels,
        datasets:[{
          data:hambanthotaStatusData,
          backgroundColor:hambanthotaStatusColor
        }]
      },
      options:{
        title:{
          text:"Last hambanthota incident status",
          display:true
        }
      }
      

    });
                 </script>

         </div>
               
               
          
           </div>
        

        

    </div>


    <div class="container4">
        <h1>Users</h1>

        <ul>
            <li>
                <div class="allUsers">
                    <h2>All Users</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>User Type</th>
                                <th>Number of Users</th>
                            </tr>
                            
                        </thead>
                        <tr>
                            <td>Regional Officers</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>Wildlife Officers</td>
                            <td>125</td>
                        </tr>
                        <tr>
                            <td>Villagers</td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td>Grama Niladhari</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>Veterinarian</td>
                            <td>45</td>
                        </tr>
                        

                        <tbody>
                            
                        </tbody>
                    </table>


                    
                </div>
            </li>
            <li>
                <div class="activeUsers">
                    <h2>Active Users</h2>

                     <table class="table">
                        <thead>
                            <tr>
                                <th>User Type</th>
                                <th>Number of Users</th>
                            </tr>
                            
                        </thead>
                        <tr>
                            <td>Regional Officers</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Wildlife Officers</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <td>Villagers</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td>Grama Niladhari</td>
                            <td>42</td>
                        </tr>
                        <tr>
                            <td>Veterinarian</td>
                            <td>12</td>
                        </tr>
                        

                        <tbody>
                            
                        </tbody>
                    </table>
                    
                </div>
            </li>
            

        </ul>
        


    </div>



</body>
</html>