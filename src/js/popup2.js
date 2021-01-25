var modal2 = document.getElementById("modalTip2");
var btn = document.getElementById("buttonTip2");
var span = document.getElementsByClassName("close2")[0];

btn.onclick = function() {
  modal2.style.display = "block";
}

span.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
