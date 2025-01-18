
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

// });