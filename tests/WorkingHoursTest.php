<?php

namespace UnitTestWorkingHours;

use App\Helper\WorkingHours;
use PHPUnit\Framework\TestCase;

class WorkingHoursTest extends TestCase
{
    private WorkingHours $workingHours;

    protected function setUp(): void
    {
        $this->workingHours = new WorkingHours();
    }

    public function testWorkingHoursCheck(): void
    {
        $this->assertTrue(
            $this->
            workingHours->
            workingHoursCheck(
                "Пн.-Вс.:", "08", "00", "18", "00"
            ));
        $this->assertFalse(
            $this->
            workingHours->
            workingHoursCheck(
                "Пн.-Вс.:", "08", "00", "-18", "00"
            ));
    }
}
