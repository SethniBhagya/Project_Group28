function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.Content || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function filterFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filter").value;
 switch (input) {
   case "1.Elephants are in The Village":
     filter=1;
     break;
     case "2.Other Wild Animals are in The Village":
      filter=2;
      break;
      case "3.Breakdown of Elephant Fences":
     filter=3;
     break;
     case "4.Wild Animal is in Danger":
     filter=4;
     break;
     case "5.Crop Damages":
     filter=5;
     break;
   default:
    filter=6;
     break;
 }
  // filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.Content || td.innerText;
      if (txtValue==filter) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function loadMap()
{
  // The location of Uluru
  var Matara = { lat: 5.9549, lng: 80.5550 };
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"),
    {
      zoom: 100,
      center: Matara
    }
  );
}

