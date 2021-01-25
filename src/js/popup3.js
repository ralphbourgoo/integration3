var modal3 = document.getElementById("modalTip3");
var btn = document.getElementById("buttonTip3");
var span = document.getElementsByClassName("close3")[0];

btn.onclick = function() {
  modal3.style.display = "block";
}

span.onclick = function() {
  modal3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
