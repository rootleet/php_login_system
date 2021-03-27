<?php
    $host = 'localhost';
    $user = 'root';
    $db_key = 'Sunderland@411';
    $db = 'login_sys';

    $route = mysqli_connect($host , $user , $db_key , $db);

    if (!$route)
    {
        die("Could not connect to database");
    }


