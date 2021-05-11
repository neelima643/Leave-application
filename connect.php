<?php

    $con = mysqli_connect("localhost", "neelima", "Neelima@123", "log");
    if(!$con) {
        echo("Connection failed: ". mysqli_connect_error());
    }
?>