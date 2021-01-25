var modal4 = document.getElementById("modalTip4");
var btn = document.getElementById("buttonTip4");
var span = document.getElementsByClassName("close4")[0];

btn.onclick = function() {
  modal4.style.display = "block";
}

span.onclick = function() {
  modal4.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
