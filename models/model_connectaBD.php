<?php

    function getConn()
    {
        $host = getenv('host'); $dbname = getenv('dbname'); $user = getenv('user'); $password = getenv('password');

        $conn = pg_connect("host='$host' dbname='$dbname' user='$user' password='$password'");

        return $conn;
    }

?>
