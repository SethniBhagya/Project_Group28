function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "mybar") {
        x.className += " responsive";
    } else {
        x.className = "mybar";
    }
}