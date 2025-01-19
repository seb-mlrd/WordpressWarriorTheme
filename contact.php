<?php 
/**
 * Template Name: Contact
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