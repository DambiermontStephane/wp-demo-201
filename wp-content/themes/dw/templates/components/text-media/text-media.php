<?php

$title = get_field('tm_title');
$text = get_field('tm_text');
$image = get_field('tm_image');
$link = get_field('tm_link');
$image_position = get_field('tm_image-position');

?>

<section>
    <?php if (!empty($title)): ?>
    <h2><?= $title ?></h2>
    <?php endif; ?>

    <div>
        <?php if (!empty($text)): ?>
        <?= $text ?>
        <?php endif; ?>
    </div>

    <?php if (!empty($link)): ?>
    <a title="<?= $link['title'] ?>" target="<?= $link['target'] ?>" href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
    <?php endif; ?>

    <?php if (!empty($text)): ?>
    <img src="<?= $image['url'] ?>"
         alt="<?= $image['alt'] ?>"
         width="<?= $image['width'] ?>"
         height="<?= $image['height'] ?>"
         class="text-media__image text-media__image--position<?= $image_position ?>"
    >
    <?php endif; ?>
</section>
