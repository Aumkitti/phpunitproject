<?php

class Mycalendar {
    public function checkDayNameOfDate($nday,$nmouth){

        $input_date = $nday."/".$nmouth."/"."2023";
        $datetime = DateTime::createFromFormat('d/m/Y',$input_date);
    echo $datetime->format('l');

    }
}