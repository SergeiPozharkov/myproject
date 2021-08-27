<?php

namespace App\Helper;

class WorkingHours
{
    /**
     * Проверяет тип данных времени работы организации
     * @param string $weekDays
     * @param string|int $startHours
     * @param string|int $startMinutes
     * @param string|int $endHours
     * @param string|int $endMinutes
     * @return bool
     */
    public function workingHoursCheck(
        string     $weekDays,
        string|int $startHours,
        string|int $startMinutes,
        string|int $endHours,
        string|int $endMinutes
    ): bool
    {
        $result = true;
        if (is_string($weekDays) != true) {
            $result = false;
        } elseif ($startHours != abs($startHours)) {
            $result = false;
        } elseif ($startMinutes != abs($startMinutes)) {
            $result = false;
        } elseif ($endHours != abs($endHours)) {
            $result = false;
        } elseif ($endMinutes != abs($endMinutes)) {
            $result = false;
        }
        return $result;
    }

}