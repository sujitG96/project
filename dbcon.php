<?php
    
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "my_db_connection");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if (!$connection) {
        die("Connection failed");
    }

    else{
        echo "";
    }
?>