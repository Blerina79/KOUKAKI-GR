// Sélectionne le bouton du menu burger et l'élément de navigation dans le DOM.
const burgerButton = document.querySelector(".nav-toggle")
const navigation = document.querySelector("nav");
//Ajoute un écouteur d'événement sur le bouton du menu burger pour déclencher la fonction toggleNav lors d'un clic.
burgerButton.addEventListener("click", toggleNav);
function toggleNav() {
    // La fonction toggleNav ajoute ou supprime la classe 'active' du bouton burger et de l'élément de navigation,
    // ce qui est généralement utilisé pour contrôler leur affichage ou leur style en CSS.
    burgerButton.classList.toggle("active");
    navigation.classList.toggle("active");
}
// ******************* GESTION DU MENU BURGER ******************* //
    // Ajout d'une classe pour gérer l'ouverture et fermeture du menu
    // Ajout d'un écouteur d'événement sur un élément ayant la classe 'toggle',
    // pour ajouter ou supprimer la classe 'open' du corps du document.
    // Cela pourrait être utilisé pour afficher ou masquer un menu ou d'autres éléments interactifs en CSS.
    let toggle = document.querySelector(".toggle");
    let body = document.querySelector("body");
    toggle.addEventListener('click', function () {
        body.classList.toggle('open');
});


//  Swiper init 

const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: "auto",
    pagination: ".swiper-pagination",
    coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 20,
        modifier: 1,
        slideShadows: false,
    },
    loop:true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    slidesOffsetBefore:500,
});


//----Deplacement des nuages au scroll -----------//



document.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY; // La position actuelle du scroll
    var totalHeight = document.body.scrollHeight - window.innerHeight; // Hauteur totale de défilement possible
    var scrollRatio = scrollPosition / totalHeight; // Ratio de défilement actuel
    
    var distanceDeplacementLittleCloud = 1200; // Définit la distance maximale de déplacement pour le petit nuage.
    var distanceDeplacementBigCloud = 1000; // Définit la distance maximale de déplacement pour le gros nuage.

    // Calcule le déplacement du petit nuage basé sur le ratio de défilement.
    var littleCloudMove = distanceDeplacementLittleCloud - (scrollRatio * distanceDeplacementLittleCloud);

    // Calcule le déplacement du gros nuage de la même manière.
    var bigCloudMove = distanceDeplacementBigCloud - (scrollRatio * distanceDeplacementBigCloud);

    var littleCloud = document.querySelector('.little-cloud');// Sélectionne le petit nuage dans le DOM.
    var bigCloud = document.querySelector('.big-cloud');// Sélectionne le gros nuage dans le DOM.

    if (littleCloud) {
        littleCloud.style.transform = `translateX(${littleCloudMove}px)`;// Applique le déplacement calculé au petit nuage
    }
    if (bigCloud) {
        bigCloud.style.transform = `translateX(${bigCloudMove}px)`;// Applique le déplacement calculé au gros nuage.
    }
});





// Sélection de l'élément HTML avec la classe 'banner img'
const effetParallaxe = document.querySelector(".banner_logo");

// Écouteur d'événement pour le défilement de la page
window.addEventListener("scroll", () => {
  // Récupération de la position de défilement verticale
  const scrollenY = window.scrollY;

  // Translation maximale autorisée sur l'axe Y (250 pixels)
  const maxTranslationY = 240;

  // Application de l'effet de parallaxe si la position de défilement est inférieure ou égale à la translation maximale
  if (scrollenY <= maxTranslationY) {
    // Déplacement vertical de l'élément '.banner img' en fonction de la position de défilement
    effetParallaxe.style.transform = `translateY(${scrollenY}px)`;
  }

});








// Sélection de l'élément HTML avec la classe 'banner_logo'

/*const parallaxe = document.querySelector(".banner img");

window.addEventListener("scroll", () => {

    const scroll =window.scrollY;

    const maxDown =240;


    if(scroll <= maxDown) {
        parallaxe.style.transform = 'translateY(${parallaxe}px';
    }
});*/








/*let banner = document.getElementById("banner_logo");
window.addEventListener('scroll',function() {
    var scroll = window.scrollY;

    banner.style.down = scroll * 9 +'px';
});*/





/*const parallax = document.getElementById("banner_logo");
window.addEventListener("scroll", function{} 
{

    let scrollPosition = window.scroll
    console.log ('scroll:' + scrollPosition);

} )*/






/*window.addEventListener('scroll',function () {
    const parallax = document.querySelector('.banner_logo');
    let scrollPosition = window.scrollY;

    parallax.style.transform = 'translateY(' + scrollPosition ()* - .9 + 'px)';
   
});*/





/*document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        var logo = document.getElementById('banner_logo');
        if (!logo) return; // S'assure que le logo existe avant de continuer.
        var scrollPosition = window.scrollY;
        // Limite la position Y à 500px maximum.
        var newPositionY = Math.min(scrollPosition, 500);
        logo.style.transform = `translateY(${newPositionY}px)`;
    });
});*/