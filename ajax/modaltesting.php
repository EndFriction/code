<?php 
include("../load.php");
$mentorinfo = $_POST["mentorinfo"];
$emailinfo = $_POST["emailinfo"];
$phoneinfo = $_POST["phoneinfo"];
$timeinfo = $_POST["timeinfo"];
$fullnameinfo = $_POST["fullnameinfo"];
$cityinfo = $_POST["cityinfo"];
$languageinfo = $_POST["languageinfo"];
$doubtinfo = $_POST["doubtinfo"];
$success = $Create->schedule($mentorinfo, $fullnameinfo, $emailinfo, $phoneinfo, $cityinfo, $timeinfo, $languageinfo, $doubtinfo);
echo $success;
?>