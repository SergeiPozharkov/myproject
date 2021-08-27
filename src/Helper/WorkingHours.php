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
        if (is_string($weekDays) == true) {
            $result = true;
        } elseif ($startHours == abs($startHours)) {
            $result = true;
        } elseif ($startMinutes == abs($startMinutes)) {
            $result = true;
        } elseif ($endHours == abs($endHours)) {
            $result = true;
        } elseif ($endMinutes == abs($endMinutes)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}