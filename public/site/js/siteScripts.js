function openPage(link) {
  window.open(link, "_blank").focus();
}

function darkMode(event) {
  if (event.target.checked){
    document.getElementById('light-symbol').style.display = "none";
    document.getElementById('dark-symbol').style.display = "block";
    document.body.classList('darkmode').toggle("darkmode");
  } else {
    document.getElementById('light-symbol').style.display = "block";
    document.getElementById('dark-symbol').style.display = "none";
    document.body.classList('darkmode').toggle("darkmode");
  }
}
