<?php

namespace App\Services\CalendarServices;

use Carbon\Carbon;
use Morilog\Jalali\Jalalian;


class CalendarService
{
    static public function getPersianDate($date, $format = 'Y/m/d'): ?string
    {
        if (!$date) {
            return null;
        }
        return verta($date)->format($format);
    }

    static public function getDate($date, $format = 'Y-m-d H:i:s'): ?string
    {
        if (!$date) {
            return null;
        }

        return Carbon::parse($date)->format($format);
    }


    static public function humanDate($date, $format = ' %d %B %Y'): ?string
    {
        if (!$date) {
            return null;
        }

        return  Jalalian::fromCarbon($date)->format($format);
    }

    static public function timeDiffInHuman($date, $format = 'Y/m/d'): ?string
    {
        if (!$date) {
            return null;
        }

        return  Jalalian::fromCarbon($date)->ago() ;
    }

    static public function gregorianDate($date, $format = 'Y/m/d'): ?string
    {
        if (!$date) {
            return null;
        }

        return Jalalian::fromFormat($format, $date)->toCarbon();
    }


}
