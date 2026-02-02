<?php get_header(); ?>

<h1> <?php the_title(); ?> </h1>
<p> <?= get_the_content(); ?> </p>
<a href="<?= get_the_permalink(); ?>" title="Lien vers la page actuelle">Lien</a>

<?php
$about_title = get_field('title_about');
$about_text = get_field('text_about');
$about_image = get_field('image_about');
?>

<section>
    <h2><?= $about_title ?></h2>
    <p><?= $about_text ?></p>
    <img src="<?= $about_image['url']  ?>"
         alt="<?= $about_image['alt'] ?>"
         height="<?= $about_image['width'] ?>"
         width="<?= $about_image['width'] ?>">
</section>


<?php get_footer(); ?>

