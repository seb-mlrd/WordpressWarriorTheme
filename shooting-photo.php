<?php 
/**
 * Template Name: Shooting photo
 */
get_header();
?>
<div class="espace"></div>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<div class="background_button">
    <div class="buttons_photo_2">
        <div class="button_photo_left_2">
            <p><i class="arrow_photo_2 arrow_photo_left_2"></i></p>
        </div>
        <div class="button_photo_right_2">
            <p><i class="arrow_photo_2 arrow_photo_right_2"></i></p>
        </div>
    </div>
</div>

<section class="container-categories">
    <a href="" class="buttonLink">Prix</a>
    <h3>Notre Grille Tarifaire</h3>
    <div class="tarif-card">
        <div class="tarif-container-price">
            <div>
                <p>Séance 1h</p>
                <h4>100€</h4>
                <p>pour un shooting rapide et éfficace</p>
            </div>
            <a href="" class="contact">Nous Contacter</a>
        </div>
        <div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>50 photos</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>15 retouches</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>Livraison des photos sous 72h</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>
    <div class="tarif-card">
        <div class="tarif-container-price">
            <div>
                <p>Séance 2h</p>
                <h4>180€</h4>
                <p>pour un maximum de cliché</p>
            </div>
            <a href="" class="contact-middle">Nous Contacter</a>
        </div>
        <div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>50 photos</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>15 retouches</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>Livraison des photos sous 72h</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>
    <div class="tarif-card">
        <div class="tarif-container-price">
            <div>
                <p>Séance collective</p>
                <h4>300€</h4>
                <p>pour les groupes</p>
            </div>
            <a href="" class="contact">Nous Contacter</a>
        </div>
        <div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>50 photos</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>15 retouches</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#d53126" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <p>Livraison des photos sous 72h</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
            <div class="tarif-container-info">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#999999" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                <p>Lorem ipsum</p>
            </div>
        </div>
    </div>
</section>
<section class="container-categories">
    <a href="" class="buttonLink">Galerie</a>
    <p class="galerie textCategorie"> Découvrez l'art de mettre en valeur votre musique grâce à nos clips vidéo unique</p>
    <?php dynamic_sidebar('SecondWall'); ?>
</section>
<section class="container-categories">
        <a href="" class="buttonLink">Contact</a>
        <p class="galerie textCategorie">Un projet en tête ? Contactez nous.</p>
        <div class="container-social">
            <a href="" class="social-link">Instagram</a>
            <a href="" class="social-link">Facebook</a>
            <a href="" class="social-link">Twitter (x)</a>
        </div>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Prénom et Nom">
            <input type="email" name="email" id="email" placeholder="Votre adresse email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </section>
<?php
dynamic_sidebar('Faq');
get_footer();