<?php
    include 'includes/config.php';
    include 'includes/classes/Create.php';
    include 'includes/classes/College.php';
    include 'includes/classes/cutoff.php';
    include 'includes/classes/Alumni.php';
    include 'includes/classes/Placement.php';
    include 'includes/classes/Fest.php';

    
    // include 'includes/classes/fee.php';


    Global $pdo;

    $Create =new Create($pdo);

?>