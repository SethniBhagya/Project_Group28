function myFunction_1(x) {
    var y = document.getElementById("navbar");
    if (y.className === "mybar") {
        y.className += " responsive";
        x.classlist.toggle("change");
    } else {
        y.className = "mybar";
        x.classlist.toggle("icon");
    }
}
//language Select Option
function myFunction_2() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
window.onclick = function myFunction_2(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  function myFunction_3() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
window.onclick = function myFunction_2(event) {
    if (!event.target.matches('.user_btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


 function selectForm(x){
                  
                var parent=document.getElementsByClassName("container2");
                var allForms=parent[0].children;

                for(var i=0;i<allForms.length;i++)
                {
                    allForms[i].style.display="none";
                }



                   



                 var form=document.getElementsByClassName(x);
                 
                  form[0].style.display="block";
                  
                 ;





              

               }
