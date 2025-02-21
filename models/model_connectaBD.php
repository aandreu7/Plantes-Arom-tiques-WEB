<?php

    function getConn()
    {
        $host = "ep-empty-mud-a9rrezv3-pooler.gwc.azure.neon.tech"; $dbname = "neondb"; $user = "neondb_owner"; $password = "npg_8LejhKs2qotZ";

        $conn = pg_connect("host='$host' dbname='$dbname' user='$user' password='$password'");

        return $conn;
    }

?>
