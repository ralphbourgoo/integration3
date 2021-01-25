var modal5 = document.getElementById("modalTip5");
var btn = document.getElementById("buttonTip5");
var span = document.getElementsByClassName("close5")[0];

btn.onclick = function() {
  modal5.style.display = "block";
}

span.onclick = function() {
  modal5.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
