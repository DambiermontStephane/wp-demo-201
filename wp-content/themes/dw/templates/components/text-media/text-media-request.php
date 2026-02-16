<?php


$dm_title = get_field('dm_title');
$dm_text = get_field('dm_text');
$dm_link = get_field('dm_link');
$dm_bg_image = get_field('dm_bg_image');

?>

<section>
    <h2> <?= $dm_title ?> </h2>
    <div>
        <?= $dm_text ?>
    </div>
    <img src="<?= $dm_bg_image['url'] ?>"
         alt="<?= $dm_bg_image['alt'] ?>"
         width="<?= $dm_bg_image['width'] ?>"
         height="<?= $dm_bg_image['height'] ?>">

    <?php if (!empty($dm_link)): ?>
        <a href="<?= $dm_link['url'] ?>"
           title="<?= $dm_link['title'] ?>"
           target="<?= $dm_link['target'] ?>"
        >
            <?= $dm_link['title'] ?>
        </a>
    <?php endif; ?>
</section>
