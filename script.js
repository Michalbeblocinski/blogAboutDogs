const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

/*  Zamykanie burgera

const navLink = document.querySelectorAll(".nav-link");
navLink.forEach(n => n.addEventListener("click", closeMenu));


function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
*/
function flip(x) {
    document.getElementById(x).classList.add("flipped");
    document.getElementById(x).classList.remove("notflipped");
}
function flop(x) {
    document.getElementById(x).classList.remove("flipped");
    document.getElementById(x).classList.add("notflipped");
}

function navbarAction(x) {
   
    document.getElementById('item1').classList.remove("navbar-active");
    document.getElementById('item2').classList.remove("navbar-active");
    document.getElementById('item3').classList.remove("navbar-active");
    document.getElementById('item4').classList.remove("navbar-active");
   
    document.getElementById(x).classList.add("navbar-active");
}

function zoom(x) {
    document.getElementById(x).classList.add("scaled");
    document.getElementById(x).classList.remove("noscaled");
  }
  function zoomoff(x) {
    document.getElementById(x).classList.remove("scaled");
    document.getElementById(x).classList.add("noscaled");
  }
 