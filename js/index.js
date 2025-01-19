
const fancy = document.querySelectorAll('.service-list');
const content = document.querySelectorAll('.contentService');

fancy.forEach((item, index) => {
    item.addEventListener('click', function () {
        // Réinitialiser tous les services
        content.forEach((service) => {
            service.classList.remove('active'); // Retirer la classe active de .contentService
        });

        fancy.forEach((fancyItem) => {
            const test = fancyItem.querySelector('.test');
            if (test) {
                test.style.setProperty('--after-background', '#999999'); // Couleur par défaut pour les autres tests
            }
        });

        // Activer l'élément correspondant dans .contentService
        const service = content[index];
        if (service) {
            service.classList.add('active'); // Ajoute la classe active au bon .contentService
        }

        // Modifier la couleur pour le .test dans l'élément cliqué
        const test = item.querySelector('.test');
        if (test) {
            test.style.setProperty('--after-background', 'red'); // Couleur active
        }
    });
});


const fancyFaq = document.querySelectorAll('.container-faq-list');
const contentFaq = document.querySelectorAll('.contentFaq');

fancyFaq.forEach((faq, index) => {
    faq.addEventListener('click', function () {
        
        contentFaq.forEach((content) => {
            content.classList.remove('active');
        });

        fancyFaq.forEach((fancyFaqItem) => {
            const question = fancyFaqItem.querySelector('.question');
            if (question) {
                question.style.setProperty('--after-background', '#999999'); // Couleur par défaut pour les autres tests
            }
        });

        const content = contentFaq[index];
        if (content) {
            content.classList.add('active');
        }

        const question = faq.querySelector('.question');
        if (question) {
            question.style.setProperty('--after-background', 'red'); // Couleur active
        }
    });
});

// menu burger
// document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.burger-icon');
const menuContainer = document.querySelector('.main-navigation');

// Variable pour suivre l'état du menu (ouvert/fermé)
let menuOpen = false;

menuToggle.addEventListener('click', () => {
    if (!menuOpen) {
        // Ouvrir le menu
        menuContainer.style.left = "0px";
        menuContainer.style.transition = "1s";
        menuOpen = true;
    } else {
        // Fermer le menu
        menuContainer.style.left = "800px";
        menuContainer.style.transition = "1s";
        menuOpen = false;
    }
});

// nav



const navItems = document.querySelectorAll('.nav-link-rdg');

    // Récupérer le lien actif depuis le localStorage
const activeLinkIndex = localStorage.getItem('activeLinkIndex');

if (activeLinkIndex) {
    navItems[activeLinkIndex].classList.add('activeLink');
}
if (activeLinkIndex === null) {
    activeLinkIndex = 0;  // Le premier élément (index 0) par défaut
}


// Ajouter un écouteur d'événements pour gérer les clics
navItems.forEach((item, index) => {
    item.addEventListener('click', function () {
        // Réinitialiser tous les éléments en retirant la classe 'activeLink'
        navItems.forEach((navItem) => {
            navItem.classList.remove('activeLink');
        });

        // Ajouter la classe 'activeLink' à l'élément cliqué
        item.classList.add('activeLink');

        // Sauvegarder l'index du lien actif dans le localStorage
        localStorage.setItem('activeLinkIndex', index);
    });
});


//slider img 




// const figures_2 = Array.from(document.querySelectorAll('#slider-shooting figure')); // Toutes les balises figure
// const rightButton = document.getElementsByClassName('button_photo_right_2')
// const leftButton = document.getElementsByClassName('button_photo_left_2')
// const carroussel_2 = document.getElementById('carroussel_2')
// let currentIndex_2 = 0;
// console.log(figures_2);


// //création du container du carroussel
// let div = document.createElement('div');
// // carroussel_2.classList('container_carroussel');
// carroussel_2.appendChild(figures_2)

// rightButton.addEventListener('click', () =>{
//     console.log("button droite");
//     // div.remove()
//     // let div = document.createElement('div');
//     // div.classList('container_carroussel');
//     carroussel_2.appendChild(shiftRight(figures_2));
//     console.log("button droite");
// })

// leftButton.addEventListener('click', () =>{
//     console.log("button gauche");
//     // div.remove()
//     // let div = document.createElement('div');
//     // div.classList('container_carroussel');
//     carroussel_2.appendChild(shiftLeft(figures_2));
//     console.log("button gauche");
// })



// // deplacer a droite

// function shiftRight(array) {
//     if (array.length > 1) {
//         const lastElement = array.pop(); // Enlever le dernier élément
//         array.unshift(lastElement); // Ajouter l'élément au début du tableau
//     }
// }


// // deplacer a gauche    
// function shiftLeft(array) {
//     if (array.length > 1) {
//         const firstElement = array.shift(); // Enlever le premier élément
//         array.push(firstElement); // Ajouter l'élément à la fin du tableau
//     }
// }


const figures_2 = Array.from(document.querySelectorAll('#slider-shooting figure')); // Toutes les balises figure
const rightButton = document.getElementsByClassName('button_photo_right_2')[0]; // Sélectionner le premier bouton
const leftButton = document.getElementsByClassName('button_photo_left_2')[0]; // Sélectionner le premier bouton
const carroussel_2 = document.getElementById('carroussel_2');

let currentIndex_2 = 0;

// Afficher les figures dans le carrousel
function updateCarrousel() {
    carroussel_2.innerHTML = ''; // Réinitialiser le contenu du carrousel
    carroussel_2.appendChild(figures_2[currentIndex_2]); // Ajouter l'élément à la position actuelle
}

// Fonction pour faire défiler à droite
function shiftRight() {
    currentIndex_2 = (currentIndex_2 + 1) % figures_2.length; // Passer à l'élément suivant (circularité)
    updateCarrousel(); // Mettre à jour le carrousel
}

// Fonction pour faire défiler à gauche
function shiftLeft() {
    currentIndex_2 = (currentIndex_2 - 1 + figures_2.length) % figures_2.length; // Passer à l'élément précédent (circularité)
    updateCarrousel(); // Mettre à jour le carrousel
}

// Écouteurs d'événements pour les boutons
rightButton.addEventListener('click', () => {
    console.log("Button droite");
    shiftRight(); // Déplacer à droite
});

leftButton.addEventListener('click', () => {
    console.log("Button gauche");
    shiftLeft(); // Déplacer à gauche
});

// Initialiser le carrousel avec la première image
updateCarrousel();