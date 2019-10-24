let toggle = document.getElementsByClassName("toggle-button")[0];
let navbarLinks = document.getElementsByClassName("navbar-links")[0];

toggle.addEventListener("click", () =>{
  navbarLinks.classList.toggle("active");
});
