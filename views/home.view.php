<?php $title = 'BITS' ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>
    <ul>
        <li><a href="computers.php">Computers</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="patches.php">Patches</a></li>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.view.php' ?>