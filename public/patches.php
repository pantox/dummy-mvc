<?php

require '../app/database.php';

$patches = get_all_patches();

require '../views/patches.view.php';