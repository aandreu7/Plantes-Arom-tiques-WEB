<?php

    function getConn()
    {
        $host = "127.0.0.1"; $dbname = "tdiw-m5"; $user = "tdiw-m5"; $password = "TLWFawJr";

        $conn = pg_connect("host='$host' dbname='$dbname' user='$user' password='$password'");

        return $conn;
    }

?>