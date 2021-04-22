<?php $title = 'List of Computers' ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hostname</th>
      <th scope="col">Room</th>
      <th scope="col">Patch</th>
    </tr>
  </thead>
        <tbody>
            <?php foreach ($computers as $computer): ?>
            <tr>
                <td><?= $computer['id'] ?></td>
                <td><a href="/show.php?id=<?= $computer['id'] ?>"><?= $computer['hostname'] ?></a></td>
                <td><a href="/show.php?id=<?= $computer['room_id'] ?>"><?= $computer['room_label'] ?></a></td>
                <td><a href="/show.php?id=<?= $computer['id'] ?>"><?= $computer['patch_label'] ?></a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php $content = ob_get_clean() ?>

<?php include 'layout.view.php' ?>