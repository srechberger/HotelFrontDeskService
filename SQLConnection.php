<?php
    try{
        $connection = new PDO(
            'mysql:host=localhost;dbname=hotelfrontdesk',
            'root',
           '9+PDzp=;E9s9r&mv'
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM guest";

        foreach($connection->query($sql) as $row) {
            echo($row['svnr']. " ". $row['firstname']);
        }

    } catch (PDOException $ex) {
        echo("An error occurred: ".$ex);
    }
?>