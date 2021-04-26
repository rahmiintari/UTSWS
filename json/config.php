<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'mysql');
    define('DB', 'uts_ws');

    $db_connect = mysqli_connect( HOST, USER, PASS, DB) or die ('Database tidak ditemukan');

    header('Content-Type: application/json');


?>