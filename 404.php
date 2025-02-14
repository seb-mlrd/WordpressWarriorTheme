<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpress_warrior
 */

get_header();
?>

<style>
    /* Styles CSS pour le design personnalisé de la page 404 */

    .error-404 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 70vh; /* Réduit la hauteur de la section pour la visibilité du footer */
        padding: 20px;
    }

    .error-404 h1 {
        font-size: 4rem;
        margin: 0;
        margin-top: 20px;
    }

    .error-404 p {
        font-size: 2rem;
        margin: 10px 0 20px;
    }

    .home-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 1.2rem;
        color: white;
        text-decoration: none;
        background-color: #1a1a1a;
        border: 1px solid #4d4d4d;
        border-radius: 50px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .home-button::before {
        content: '';
        width: 10px;
        height: 10px;
        background-color: red;
        border-radius: 50%;
    }

    .home-button:hover {
        background-color: #333;
        border-color: #666;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .error-404 h1 {
            font-size: 3rem;
        }

        .error-404 p {
            font-size: 1.8rem;
        }

        .home-button {
            padding: 10px 15px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .error-404 h1 {
            font-size: 2.5rem;
        }

        .error-404 p {
            font-size: 1.5rem;
        }

        .home-button {
            padding: 8px 12px;
            font-size: 0.9rem;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( '404 - error', 'wordpress_warrior' ); ?></h1>
            <p><?php esc_html_e( 'Page non trouvée', 'wordpress_warrior' ); ?></p>
        </header><!-- .page-header -->

        <div class="page-content">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-button"><?php esc_html_e( 'Page d\'accueil', 'wordpress_warrior' ); ?></a>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
<?php
get_footer();
?>
