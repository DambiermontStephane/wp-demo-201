<?php


$stage_title = get_field('stage_title');
$stage_text = get_field('stage_text');
$stage_link = get_field('stage_link');
$stage_image = get_field('stage_image');

?>

<section>
    <h1> <?= $stage_title ?> </h1>
    <div>
        <?= $stage_text ?>
    </div>
    <img src="<?= $stage_image['url'] ?>"
         alt="<?= $stage_image['alt'] ?>"
         width="<?= $stage_image['width'] ?>"
         height="<?= $stage_image['height'] ?>">

    <?php if (!empty($stage_link)): ?>
        <a href="<?= $stage_link['url'] ?>"
           title="<?= $stage_link['title'] ?>"
           target="<?= $stage_link['target'] ?>"
        >
            <?= $stage_link['title'] ?>
        </a>
    <?php endif; ?>
</section>
