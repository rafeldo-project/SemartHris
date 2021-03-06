<?php

namespace KejawenLab\Application\SemartHris\Util;

use KejawenLab\Application\SemartHris\Component\Setting\Setting as Base;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.id>
 */
class Setting
{
    const DATE_FORMAT = 'date_format';
    const TIME_FORMAT = 'time_format';
    const DATE_TIME_FORMAT = 'date_time_format';
    const FIRST_DATE_FORMAT = 'first_date_format';
    const LAST_DATE_FORMAT = 'last_date_format';
    const UPDATE_DESTIONATION = 'upload_destination';
    const ATTENDANCE_UPLOAD_PATH = 'attendance_upload_path';

    public static function get(string $key)
    {
        return Base::get(Base::getKey($key));
    }
}
