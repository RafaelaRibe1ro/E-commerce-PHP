function openPage(link) {
  window.open(link, "_blank").focus();
}

function darkMode(event) {
  if (event.target.checked){
    document.getElementById('light-symbol').style.display = "none";
    document.getElementById('dark-symbol').style.display = "block";
    document.body.classList.toggle("darkmode");
  } else {
    document.getElementById('light-symbol').style.display = "block";
    document.getElementById('dark-symbol').style.display = "none";
    document.body.classList.toggle("darkmode");
  }
}

function surchClient(name) {
  let produtos = document.getElementsByClassName('index-produto');

  for(let i = 0; i < produtos.length; i++) {
    if (produtos[i].getAttribute("key") === name) {
        produtos[i].style.display = "none";
    }
  }
}