$(document).ready(function(){

    setInterval(function(){
        loadNotice();
    },3000);



    function loadNotice(){

        $.ajax({
            url:"../regionalOfficer/getNotice",
            method:"POST",
            success:function(data){
                $("#notice-box").html(data);


            }
        })

          
 

    }

    
});


function endNotice(x){
    
    
    $.post("../regionalOfficer/endNotice",{noticeId:x},function(data,status){
           
          
        
        
    });


  }
