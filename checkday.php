<?php
include "Mycalendar.php";


$nday = $_POST["nday"];
$nmouth = $_POST["nmouth"];

$c1 = new Mycalendar();

echo "Day Name is".$c1->checkDayNameOfDate($nday,$nmouth);
?>