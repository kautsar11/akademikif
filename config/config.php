<?php

define("HOST", 'localhost');
define("USERNAME", 'root');
define("PASS", '');
define("DBNAME", 'akademik');

function connect_to_database()
{
    try {
        $conn = mysqli_connect(HOST, USERNAME, PASS, DBNAME);
        return $conn;
    } catch (Exception $e) {
        $e->getMessage();
    }
}
