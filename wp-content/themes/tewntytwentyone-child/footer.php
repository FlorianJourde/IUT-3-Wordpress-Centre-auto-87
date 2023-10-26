<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main>
		</div>
	</div>

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

    <footer>
        <div class="wrapper">
            <a href="<?= get_site_url(); ?>" class="website-infos">
                <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="">
                <div class="right-website-infos">
                    <h2 class="website-title uppercase"><?= get_bloginfo('name'); ?></h2>
                    <!--                <h2 class="website-title">--><?php //get_template_part( 'template-parts/header/site-branding' ); ?><!--</h2>-->
                    <p class="website-baseline uppercase"><?= get_bloginfo('description'); ?></p>
                    <!--                <p class="website-baseline">--><?php //get_template_part( 'template-parts/header/site-nav' ); ?><!--</p>-->
                </div>
            </a>
        </div>
    </footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>-->
<?php wp_footer(); ?>

</body>
</html>
