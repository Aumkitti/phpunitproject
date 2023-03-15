<?php declare(strict_types=1);
include "Mycalendar.php";
use PHPUnit\Framework\Testcase;

class MycalendarTest extends Testcase{
    public function testcheckDayNameOfDate(){
        $c1 = new Mycalendar();
$this->assertEquals("Wednesday",$c1->checkDayNameOfDate("15","03"));
        }
    }