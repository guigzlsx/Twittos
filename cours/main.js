const menubtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menubtn.addEventListener("click", () => {
  navLinks.classList.toggle("mobile-menu");
});

// fonction pour le pop-up

// obtenir la référence du pop-up
const popup = document.getElementById("popup");

// afficher le pop-up
console.log(popup);
popup.style.display = "block";

// écouter l'événement clic sur le bouton "fermer"
const closeBtn = document.getElementById("close-btn");
// console.log(closeBtn);
closeBtn.addEventListener("click", function () {
  // cacher le pop-up
  popup.style.display = "none";
});

// Sélectionnez l'élément de la barre de navigation latérale
const sideNav = document.querySelector(".sidenav");

// Sélectionnez le bouton de la barre de navigation
const toggleButton = document.querySelector(".navbar-bouton");

// Ajoutez un écouteur d'événements au clic sur le bouton de la barre de navigation
toggleButton.addEventListener("click", function () {
  // Basculez la classe 'active' sur la barre de navigation latérale et le contenu principal
  sideNav.classList.toggle("active");
});

// localhost
// document.addEventListener("DOMContentLoaded", () => {
//   const articles = document.querySelectorAll(".article");

//   articles.forEach((article, index) => {
//     localStorage.setItem(`article_${index}`, article.innerHTML);
//   });

//   const articleKeys = Object.keys(localStorage).filter((key) =>
//     key.startsWith("article_")
//   );

//   articleKeys.forEach((key) => {
//     const articleIndex = key.split("_")[1];
//     const articleContent = localStorage.getItem(key);
//     document.querySelector(
//       `.articles .article:nth-child(${Number(articleIndex) + 1})`
//     ).innerHTML = articleContent;
//   });
// });


document.addEventListener('DOMContentLoaded', function() {
  const tags = document.querySelectorAll('.tag');
  const articles = document.querySelectorAll('.article');
  const showAllBtn = document.getElementById('show-all-btn');

  tags.forEach(function(tag) {
    tag.addEventListener('click', function() {
      const selectedTag = tag.getAttribute('data-tag');

      articles.forEach(function(article) {
        const articleTag = article.getAttribute('data-tag');
        if (articleTag === selectedTag || selectedTag === null) {
          article.style.display = 'block';
          article.classList.add('show');
        } else {
          article.style.display = 'none';
          article.classList.remove('show');
        }
      });

      const body = document.body;
      const tagsContainer = document.querySelector('.tags');
      if (selectedTag === null) {
        body.classList.remove('filtered');
        tagsContainer.classList.remove('filtered');
      } else {
        body.classList.add('filtered');
        tagsContainer.classList.add('filtered');
      }
    });
  });

  showAllBtn.addEventListener('click', function() {
    articles.forEach(function(article) {
      article.style.display = 'block';
      article.classList.remove('show');
    });

  });
});




