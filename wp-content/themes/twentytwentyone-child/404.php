<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

    <section class="page-section box offset-top">
        <div class="wrapper">
            <h2>Oups !</h2>
            <div class="text-with-button">
                <p class="<?= is_front_page() ? "title-decoration" : ""?>">Il semblerait que la page recherchée n'existe pas...</p>
                <div class="buttons-wrapper">
                    <a class="button-primary button-red" href="<?= get_home_url() ?>">Page d'accueil</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
