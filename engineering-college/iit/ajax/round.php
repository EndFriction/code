<?php
    include '../iit-load.php'; 
    $category=$_POST["categoryinfo"];
    $year=$_POST["yearinfo"];
    $seatpool=$_POST["seatpoolinfo"];
    $collegeId=$_POST["collegeIdinfo"];  
    $round41 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 1);
    $round42 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 2);
    $round43 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 3);
    $round44 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 4);
    $round45 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 5);
    $round46 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 6);
    $round47 = $Create->getCutoffRoundYr4($category,$year,$seatpool,$collegeId, 7);
    $round51 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 1);
    $round52 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 2);
    $round53 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 3);
    $round54 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 4);
    $round55 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 5);
    $round56 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 6);
    $round57 = $Create->getCutoffRoundYr5($category,$year,$seatpool,$collegeId, 7);
    echo $round41 . "," . $round42 . "," . $round43 . "," . $round44 . "," . $round45 . "," . $round46  . "," . $round47  . "," . $round51 . "," . $round52 . "," . $round53 . "," . $round54 . "," . $round55 . "," . $round56 . "," .  $round57; 
?>
