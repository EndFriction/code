<?php
try
{
$pdo= new PDO("mysql:host=localhost; dbname=endfriction","root","");

}
catch(PDOException $e)
{
    echo "error". $e->getmessage();
}
?>