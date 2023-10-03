<?php
include '../load.php';
    $year=$_POST["yearinfo"];
    $collegeId=$_POST["collegeIdinfo"];
    $row  = $Create->getPlacementJson($year, $collegeId);
    $placement = new Placement($row);
    $placementDomesticJson = $placement->getPlacementDomesticJson();
    $internationalJson = $placement->getPlacementInternationalJson();
    echo $placementDomesticJson . "=" . $internationalJson;
?>