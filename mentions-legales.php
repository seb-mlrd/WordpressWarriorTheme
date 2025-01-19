<?php
require_once('../../../wp-load.php'); // Chemin vers wp-load.php

get_header(); 
?>

<style>
    /* Styles globaux */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: black;
        color: white;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        font-size: 2.5rem;
    }

    /* Conteneur principal */
    .mentions-legales-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        line-height: 1.8;
        font-size: 1rem;
    }

    .mentions-legales-container h2 {
        font-size: 1.5rem;
        margin-top: 30px;
        color: rgb(253, 253, 253);
        margin-bottom: 15px; /* Ajout d'un espace sous chaque titre */
    }

    .mentions-legales-container p {
        margin: 10px 0;
        margin-top: 10px; /* Ajout d'un espace au-dessus de chaque paragraphe */
    }

    /* Ajout d'indentation pour les listes spécifiques */
    .mentions-legales-container ul {
        padding-left: 30px; /* Ajoute un décalage à gauche pour les listes */
    }

    .mentions-legales-container li {
        margin-bottom: 10px; /* Espacement entre chaque élément de liste */
    }

    /* Footer */
    footer.site-footer {
        background: linear-gradient(to bottom, #ff6b6b, #ff4b4b);
        color: black;
        text-align: center;
        position: relative;
        margin-top: 50px;
        padding: 20px 0;
    }

    .site-footer .footer-logo {
        margin-top: 20px;
    }

    .site-footer .footer-logo img {
        max-width: 150px;
        height: auto;
    }

    .footer-bottom-text {
        margin-top: 20px;
        font-size: 0.8rem;
    }

    /* Liens dans le footer */
    .footer-content a {
        color: black;
        text-decoration: none;
        font-size: 1rem;
        transition: color 0.3s;
    }

    .footer-content a:hover {
        color: white;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .mentions-legales-container {
            padding: 10px;
        }

        footer.site-footer .footer-logo img {
            max-width: 120px;
        }
    }
</style>

<main id="main-content">
    <h1>Mentions Légales</h1>

    <div class="mentions-legales-container">
        <h2>1. Informations Légales</h2>
        <p><strong>Nom de la société :</strong> RDG Production</p>
        <p><strong>Forme juridique :</strong> Auto Entreprise</p>
        <p><strong>Adresse siège social :</strong> [Adresse complète]</p>
        <p><strong>SIREN :</strong></p>
        <p><strong>E-mail de contact :</strong> ridgeomb@gmail.com</p>
        <p><strong>Téléphone :</strong> [Numéro de téléphone]</p>

        <h2>2. Directeur de la publication</h2>
        <p>Le directeur de la publication est : [Nom, fonction au sein de l'entreprise].</p>

        <h2>3. Hébergeur du site</h2>
        <p><strong>Nom de l'hébergeur :</strong> 02 Switch</p>
        <p><strong>Adresse :</strong> Chemin des Pardiaux - 63000 Clermont-Ferrand.</p>
        <p><strong>Téléphone :</strong> [Numéro de téléphone]</p>

        <h2>4. Propriété intellectuelle</h2>
        <p>Le contenu du site Internet <a href="https://www.rdg-production.com" target="_blank">https://www.rdg-production.com</a>, incluant, de manière non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, et icônes ainsi que leur mise en forme, sont la propriété exclusive de RDG Production, à l'exception des éléments appartenant à des tiers partenaires ou auteurs mentionnés explicitement.</p>
        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de RDG Production.</p>

        <h2>5. Protection des données personnelles</h2>
        <p>En conformité avec le Règlement Général sur la Protection des Données (RGPD) et la loi Informatique et Libertés, RDG Production s'engage à protéger les données personnelles des utilisateurs.</p>
        <p>Les données collectées via le site RDG Production sont destinées à :</p>
        <ul>
            <li>Traitement des demandes de contact</li>
        </ul>
        <p>Ces données sont conservées pour une durée de 3 ans et ne sont jamais cédées à des tiers sans consentement préalable de l'utilisateur.</p>
        <p>Conformément à la loi, vous disposez des droits suivants :</p>
        <ul>
            <li>Droit d'accès à vos données</li>
            <li>Droit de rectification</li>
            <li>Droit à l'effacement</li>
            <li>Droit à la portabilité des données</li>
            <li>Droit d'opposition au traitement</li>
        </ul>
        <p>Pour exercer ces droits, contactez-nous à : ridgeomb@gmail.com</p>

        <h2>6. Limitation de responsabilité</h2>
        <p>RDG Production met tout en œuvre pour fournir des informations exactes sur son site internet. Cependant, la société ne peut garantir l'exactitude, la complétude ou l'actualité des informations présentées.</p>
        <p>La responsabilité de RDG Production ne pourra être engagée en cas d'erreurs ou d'omissions, ou en cas de dommages directs ou indirects résultant de l'utilisation du site.</p>

        <h2>7. Loi applicable et juridiction</h2>
        <p>Les présentes mentions légales sont régies par la loi française. Tout litige relatif à leur interprétation ou exécution sera soumis aux tribunaux compétents du ressort de Franconville.</p>
    </div>
</main>

<?php
get_footer();
?>  
