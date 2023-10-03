<?php
try {
    $pdo = new PDO("mysql:host=endfriction.com; dbname=DB_NAME", "USER_NAME", "PASSWORD");
} catch (PDOException $e) {
    echo "error" . $e->getmessage();
}
