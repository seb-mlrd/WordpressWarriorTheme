<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="container-logo">
        <h1 class="logo">
            <?php the_custom_logo(); ?>
        </h1>
    </div>
    <?php dynamic_sidebar('FirstWall'); ?>
    <div class="container-introduction">
        <p class="introduction"><span class="degrader-red">Experts en photo et vidéo,</span> nous transformons vos moments en histoires visuelles qui marquent les esprits et captivent les regards.</p>
    </div>
    
</main>
<section class="container-wall">
    <a href="" class="buttonLink">Galerie</a>
    <p class="galerie textCategorie">Découvrez l'art de capturer l'instant à travers notre galerie photo et vidéo.</p>
    <?php dynamic_sidebar('SecondWall'); ?>
</section>

<?php dynamic_sidebar('Services'); ?>

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
