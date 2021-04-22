<?php $title = 'List of Patches' ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>
    <ul>
    <?php foreach ($patches as $patch): ?>
        <li>
            <a href="/show.php?id=<?= $patch['id'] ?>">
                <?= $patch['label'] ?>            
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.view.php' ?>