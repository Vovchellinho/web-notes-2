<?php 

    require_once('db/setting.php');

    $connection = new mysqli($host, $user, $pass, $data);
    if($connection->connect_error) die('Error connection!');

?>