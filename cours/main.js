const menubtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menubtn.addEventListener("click", () => {
  navLinks.classList.toggle("mobile-menu");
});




// fonction pour le pop-up

// obtenir la référence du pop-up
const popup = document.getElementById("popup");

// afficher le pop-up
console.log(popup)
popup.style.display = "block";


// écouter l'événement clic sur le bouton "fermer"
const closeBtn = document.getElementById("close-btn");
// console.log(closeBtn);
closeBtn.addEventListener("click", function () {
  // cacher le pop-up
  popup.style.display = "none";
});



//Lorsque j'essaie d'ecrire un tweet sans m'etre connecté

const open_popup = document.getElementById("open_popup");
open_popup.addEventListener("click", function () {
  // cacher le pop-up
  popup.style.display = "block";

});