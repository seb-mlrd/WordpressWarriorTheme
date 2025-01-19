<?php 
/**
 * Template Name: About
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
<section class="container-categories">
    <a href="" class="buttonLink">A propos</a>
    <h3>A PROPOS RDG PROD</h3>
    <div class="container-about">
        <div class="about"><strong>10+</strong>ans depuis la création</div>
        <div class="about"><strong>50+</strong> clients satisfaits</div>
        <div class="about"><strong>10+</strong>clip réaliser</div>
        <div class="about"><strong>05+</strong>International Shoots</div>
    </div>
</section>
<section class="container-categories">
    <a href="" class="buttonLink">Notre équipe</a>
    <p class="galerie textCategorie text-gradient">Decouvrez notre équipe talentueuse qui rende vos projets possible</p>
    <div class="container-team">
        <div class="client">
            <figure>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2025/01/logo-steam-1.png" alt="image d'un membre de l'équipe">
                <figcaption>Sarah Conor <span>Monteur vidéo</span></figcaption>
            </figure>
            <div class="social">
                <a href="" class="social-link">I</a>
                <a href="" class="social-link">X</a>
                <a href="" class="social-link">L</a>
            </div>
        </div>
        <div class="client">
            <figure>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2025/01/logo-steam-1.png" alt="image d'un membre de l'équipe">
                <figcaption>Sarah Conor <span>Monteur vidéo</span></figcaption>
            </figure>
            <div class="social">
                <a href="" class="social-link">I</a>
                <a href="" class="social-link">X</a>
                <a href="" class="social-link">L</a>
            </div>
        </div>
        <div class="client">
            <figure>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2025/01/logo-steam-1.png" alt="image d'un membre de l'équipe">
                <figcaption>Sarah Conor <span>Monteur vidéo</span></figcaption>
            </figure>
            <div class="social">
                <a href="" class="social-link">I</a>
                <a href="" class="social-link">X</a>
                <a href="" class="social-link">L</a>
            </div>
        </div>
        <div class="client">
            <figure>
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2025/01/logo-steam-1.png" alt="image d'un membre de l'équipe">
                <figcaption>Sarah Conor <span>Monteur vidéo</span></figcaption>
            </figure>
            <div class="social">
                <a href="" class="social-link">I</a>
                <a href="" class="social-link">X</a>
                <a href="" class="social-link">L</a>
            </div>
        </div>
    </div>
</section>
<section class="container-categories">
    <a href="" class="buttonLink">Avis Clients</a>
    <p class="avis-client textCategorie">Nous aidons nos clients grâce a des visuels qui leurs correspondent</p>
    <?php dynamic_sidebar('Avis'); ?>
</section>
<section class="container-categories-contact">
    <div class="container-contact">
        <a href="" class="buttonLink">Contact</a>
        <p class="galerie textCategorie">Un projet en tête ? Contactez nous.</p>
        <div class="container-social">
            <a href="" class="social-link">Instagram</a>
            <a href="" class="social-link">Facebook</a>
            <a href="" class="social-link">Twitter (x)</a>
        </div>
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