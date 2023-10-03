<?php
include '../load.php';
    $collegeId=$_POST["collegeIdinfo"];
    $row  = $Create->getFestVideoDetails($collegeId);
    $fest = new Fest($row);
    $src= $fest->getFestSrc();
    echo $src;
?>