<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_warrior
 */

?>

<footer id="colophon" class="site-footer">
    <style>

        /* Styles pour le footer */
        .site-footer {
            background: linear-gradient(to bottom, #ff6b6b, #ff4b4b); /* Dégradé rouge */
            color: black;
            text-align: center;
            position: relative;
            margin-top: auto;
            padding: 0;
			display: grid;
            height: 500px;
			width: 100vw;
        }

        /* Logo positionné à gauche */
        .site-footer .footer-logo {
            position: absolute;
            top: 20px; /* Espace du haut */
            left: 20px; /* Espace de la gauche */
        }

        .site-footer img {
            max-width: 250px; /* Agrandit le logo à 250px */
            height: auto;
        }

        /* Positionnement des éléments dans le footer */
        .site-footer .footer-content {
            position: absolute;
            bottom: 10px; /* Distance du bas du footer */
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; /* Espacement entre les éléments */
            font-size: 1rem;
            padding: 0 20px; /* Ajoute un peu d'espace sur les bords */
        }

        /* Uniformiser l'apparence des éléments dans le footer */
        .site-footer .footer-content p,
        .site-footer .footer-content a,
        .site-footer .footer-bottom-text {
            font-family: Arial, sans-serif; /* Utilise la même police pour tous */
            font-size: 1rem; /* Taille uniforme */
            color: black; /* Uniformiser la couleur du texte */
            margin: 0; /* Enlever les marges par défaut */
            padding: 0; /* Enlever les paddings par défaut */
            text-decoration: none; /* Enlever le soulignement sur les liens */
        }

        /* Ajouter un effet de survol au lien "Mentions légales" */
        .site-footer .footer-content a:hover {
            color: white; /* Change la couleur en blanc au survol */
        }

        /* Pour le texte copyright (en bas à droite) */
        .site-footer .footer-bottom-text {
            font-size: 0.8rem; /* Taille du texte copyright */
        }

        /* Styles pour les petits écrans (tablettes et téléphones) */
        @media (max-width: 768px) {
			.site-footer {
				height: 250px;
			}
            .site-footer .footer-content {
				grid-template-columns: 1fr;
				left: 0;
                font-size: 1rem; /* Réduit la taille de la police */
                padding: 0 20px; /* Ajoute un peu d'espace sur les bords */
				text-align: start;
            }

            .site-footer .footer-logo {
                position: relative;
                top: 0; /* Annule la position absolue pour qu'il soit centré */
                left: 0;
                margin-bottom: 20px; /* Ajoute un espacement sous le logo */
            }

            .site-footer .footer-logo img {
                max-width: 150px; /* Réduit la taille du logo sur les petits écrans */
            }

            .site-footer .footer-content p,
            .site-footer .footer-content a {
                margin: 5px 0; /* Ajoute un peu d'espace entre les éléments */
            }

            .site-footer .footer-content a {
                font-size: 1rem; /* Réduit la taille du lien sur les petits écrans */
            }

            .site-footer .footer-bottom-text {
                font-size: 0.7rem; /* Réduit la taille du texte copyright */
            }
        }

        /* Styles pour les très petits écrans (téléphones portables) */
        @media (max-width: 480px) {
            .site-footer .footer-content {
                padding: 0 10px; /* Réduit l'espace des bords */
            }

            .site-footer .footer-logo img {
                max-width: 120px; /* Réduit la taille du logo */
            }

            .site-footer .footer-content a {
                font-size: 0.9rem; /* Réduit encore la taille des liens */
            }

            .site-footer .footer-content p {
                font-size: 0.9rem; /* Réduit la taille du texte */
            }

            .site-footer .footer-bottom-text {
                font-size: 0.6rem; /* Réduit encore la taille du texte copyright */
            }
        }

    </style>

    <!-- Logo -->
    <div class="footer-logo">
        <?php the_custom_logo() ?>
    </div>

    <!-- Contenu principal du footer -->
    <div class="footer-content">
        <!-- www.rdgprod -->
        <p>www.rdgprod.com</p>

        <!-- Mentions légales -->
        <a href="<?php echo get_template_directory_uri(); ?>/mentions-legales.php">Mentions légales</a>

        <!-- Texte copyright -->
        <div class="footer-bottom-text">
            © <?php echo date('Y'); ?> RDG Prod
        </div>
    </div>
</footer>
</body>
</html>


<?php wp_footer(); ?>