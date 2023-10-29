<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<!--<div class="wrapper">-->


<section>
<div class="wrapper">

    <?php
        $groups = acf_get_field_groups(array('post_type' => 'voitures'));
        $fields = acf_get_fields($groups[0]['ID']);
//        var_dump($fields);
        $brands = $fields[0]['choices'];
//        $prices = $fields[2]['value'];
//        var_dump($prices);
    ?>

    <form method="GET" action="<?php echo get_post_type_archive_link( 'voitures' ); ?>">
        <label for="brands">Marque</label>
        <select name="marque" id="brands">
            <?php foreach ($brands as $brand) :?>
                <option value="<?php echo $brand?>"><?php echo $brand ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Rechercher">
    </form>

<!--    <form method="GET" action="--><?php //echo get_post_type_archive_link( 'voitures' ); ?><!--">-->
<!--        <label for="price">Prix</label>-->
<!--        <input name="prix" id="price" type="number">Prix<input>-->
<!--        <input type="submit" value="Rechercher par prix">-->
<!--    </form>-->

    <a href="<?php echo get_post_type_archive_link( 'voitures' ); ?>">Réinitialiser les filtres</a>
</div>

</section>

<section class="cars-section box">
    <div class="wrapper">

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<?php
get_footer();
