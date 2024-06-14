function showmenu() {
    let x = document.getElementById("menu-overlay");
  if (window.innerWidth <= 730) {
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
}

function closemenu() {
  let x = document.getElementById("menu-overlay");
  x.style.display = "none";
}

function handleResize() {
    let x = document.getElementById("menu-overlay");
    if (window.innerWidth > 730) {
        x.style.display = "none";
    }
}

window.addEventListener('resize', handleResize);