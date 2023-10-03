<?php
try {
    $pdo = new PDO("mysql:host=endfriction.com; dbname=endfrict_DB", "endfrict_amarjeet", "ArYaeZ@123");
} catch (PDOException $e) {
    echo "error" . $e->getmessage();
}
