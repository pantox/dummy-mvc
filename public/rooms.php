<?php

require '../app/database.php';

$rooms = get_all_rooms();

require '../views/rooms.view.php';