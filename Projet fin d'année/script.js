const slider = document.querySelector('.contenant-image-slider');
const slides = slider.querySelectorAll('.slide-image');
const prevBtn = document.querySelector('.fleche-gauche');
const nextBtn = document.querySelector('.fleche-droite');
const dots = document.querySelectorAll('.btn-nav');
let slideIndex = 0;

function showSlide(n) {
  // Affiche le slide correspondant à l'index donné
  slides.forEach(slide => slide.style.display = 'none');
  dots.forEach(dot => dot.classList.remove('active'));
  slides[n].style.display = 'block';
  dots[n].classList.add('active');
}

function nextSlide() {
  // Passe au slide suivant
  slideIndex++;
  if (slideIndex > slides.length - 1) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
  
  // Met à jour le bouton actif
  updateActiveButton();
}

function prevSlide() {
  // Passe au slide précédent
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  showSlide(slideIndex);
  
  // Met à jour le bouton actif
  updateActiveButton();
}

function currentSlide(n) {
  // Affiche le slide correspondant au bouton cliqué
  slideIndex = n;
  showSlide(slideIndex);
  
  // Met à jour le bouton actif
  updateActiveButton();
}

function updateActiveButton() {
  // Met à jour le bouton actif
  dots.forEach((dot, index) => {
    if (index === slideIndex) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}

// Affiche le premier slide et le bouton actif au chargement de la page
showSlide(slideIndex);
updateActiveButton();

// Ajoute les événements click pour les flèches et les boutons
prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);
dots.forEach((dot, index) => {
  dot.addEventListener('click', () => currentSlide(index));
  // Met à jour le bouton actif lorsqu'il est cliqué
  dot.addEventListener('click', updateActiveButton);
});

// Définit l'intervalle de temps entre chaque changement de slide en millisecondes
const intervalTime = 5000;

// Démarre l'animation automatique
let slideInterval = setInterval(() => {
  nextSlide();
}, intervalTime);

// Arrête l'animation automatique lorsqu'un bouton est cliqué
const sliderContainer = document.querySelector('.contenant-slider');
sliderContainer.addEventListener('click', () => {
  clearInterval(slideInterval);
  slideInterval = setInterval(() => {
    nextSlide();
  }, intervalTime);
});


const menuHamburger = document.querySelector(".menu-hamburger");
const dropDownMenu = document.querySelector(".dropdown_menu");
menuHamburger.addEventListener('click', function () {
    dropDownMenu.classList.toggle('open');
    });
window.addEventListener('click', function(e) {
    if (!dropDownMenu.contains(e.target) && !menuHamburger.contains(e.target)) {
      dropDownMenu.classList.remove('open');
    }
});