function openView() {
    document.getElementById('myview').style.display = 'block'

}

function closeView() {
    document.getElementById('myview').style.display = 'none';

    var model = document.getElementById('myview');

    //modal.display='block'
    window.onclick = function closeView(event) {
        if (event.target == view-1) {
            modal.style.display = "none";
        }
    }
}
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.12),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }

