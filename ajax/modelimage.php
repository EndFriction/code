<?php 

include("../load.php");
$mentorId = $_POST["mentoridinfo"];

echo $Create->getModalCard($mentorId);

?>
