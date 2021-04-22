<?php

function open_database_connection()
{
    $connection = new PDO("mysql:host=localhost;dbname=bits", 'root', '');

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function _get_all($query)
{
    $connection = open_database_connection();

    $result = $connection->query($query);

    $data = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    close_database_connection($connection);

    return $data;    
}

function get_all_computers()
{
    //$query = 'SELECT id, hostname FROM computers';
    $query = 
    "SELECT 
        computers.id, computers.hostname, computers.timestamp,   
        patches.label as 'patch_label',
        rooms.id as 'room_id', rooms.label as 'room_label'
    FROM computers 
    JOIN patches ON computers.patch_id=patches.ID 
    JOIN rooms ON computers.room_id=rooms.ID 
    ORDER BY computers.id";

    return _get_all($query);
}

function get_all_rooms()
{
    $query = 'SELECT id, label FROM rooms';

    return _get_all($query);}

function get_all_patches()
{
    $query = 'SELECT id, label FROM patches';

    return _get_all($query);
}