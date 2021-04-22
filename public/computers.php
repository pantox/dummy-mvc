<?php

require '../app/database.php';

$computers = get_all_computers();

require '../views/computer.view.php';