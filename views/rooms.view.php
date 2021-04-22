<?php $title = 'List of Rooms' ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>
    <ul>
    <?php foreach ($rooms as $room): ?>
        <li>
            <a href="/show.php?id=<?= $room['id'] ?>">
                <?= $room['label'] ?>            
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.view.php' ?>