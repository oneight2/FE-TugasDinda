<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bihypetherap";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection)
    {
        die("Connextion Failed : ".mysqli_connect_error());
    }
