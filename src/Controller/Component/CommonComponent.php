<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Configure;

/**
 * Common component
 */
class CommonComponent extends Component
{
    /**
     * Get user IP
     * status: chua duoc su dung
     */
    public function getUserIP()
    {
        if (env("HTTP_X_FORWARDED_FOR")) {
            $ip = env("HTTP_X_FORWARDED_FOR");
            if (strpos($ip, ",")) {
                $exp_ip = explode(",", $ip);
                $ip = $exp_ip[0];
            }
        } elseif (env("HTTP_CLIENT_IP")) {
            $ip = env("HTTP_CLIENT_IP");
        } else {
            $ip = env("REMOTE_ADDR");
        }
        return $ip;
    }

    /**
     * Tinh toan thoi gian bid
     * @param dateTime $endTime
     * @return array
     */
    public function calTimeRemain($endTime)
    {
        $date = strtotime($endTime);
        $remaining = $date - time();
        $d2S = Configure::read('Common.DateTime.ToSecond.Day');
        $h2S = Configure::read('Common.DateTime.ToSecond.Hour');
        $m2S = Configure::read('Common.DateTime.ToSecond.Minute');
        $zer0 = Configure::read('Common.Number.Zero');
        $daysRemain = floor($remaining / $d2S);
        $hoursRemain = floor(($remaining % $d2S) / $h2S);
        $minsRemain = floor((($remaining % $d2S) % $h2S) / $m2S);
        $daysLeft = $daysRemain >= $zer0 ? $daysRemain : $zer0;
        $hoursLeft = $hoursRemain >= $zer0 ? $hoursRemain : $zer0;
        $minsLeft = $minsRemain >= $zer0 ? $minsRemain : Configure::read('Common.Number.One');
        return array('days' => $daysLeft, 'hours' => $hoursLeft, 'minutes' => $minsLeft);
    }

    /**
     * tra ve chuoi thoi gian sau khi tinh toan
     * @param array $endTime
     * @return string $arrayTime
     */
    public function strTimeRemain($endTime)
    {
        $on3 = Configure::read('Common.Number.One');
        $arrayTime = $this->calTimeRemain($endTime);
        if ($arrayTime['days'] >= $on3) {
            return $arrayTime['days'] . Configure::read('Common.Text.Day');
        } elseif ($arrayTime['hours'] >= $on3) {
            $minsStr = $arrayTime['hours'] > $on3 ? "" : $arrayTime['minutes'] . Configure::read('Common.Text.Mins');
            return $arrayTime['hours'] . Configure::read('Common.Text.Hour') . $minsStr;
        } elseif ($arrayTime['minutes'] >= $on3) {
            return $arrayTime['minutes'] . Configure::read('Common.Text.Mins');
        }
    }

    /**
     * Create date string to display
     * @param dateTime $dateTime
     * @return value: date string
     */
    public function setEndDateDisplay($dateTime)
    {
        $string = $dateTime->i18nFormat('YYYY-MM-dd HH:mm:ss');
        $dayArray = array();
        $dayArray[0] = Configure::read('Calendar.Day.Sun');
        $dayArray[1] = Configure::read('Calendar.Day.Mon');
        $dayArray[2] = Configure::read('Calendar.Day.Tue');
        $dayArray[3] = Configure::read('Calendar.Day.Wed');
        $dayArray[4] = Configure::read('Calendar.Day.Thu');
        $dayArray[5] = Configure::read('Calendar.Day.Fri');
        $dayArray[6] = Configure::read('Calendar.Day.Sat');
        $list = str_split($string, 10);
        $stringDate = explode("-", $list[0]);
        $stringTime = explode(":", $list[1]);
        $dayName = date("w", mktime(0, 0, 0, intval($stringDate[1]), intval($stringDate[2]), intval($stringDate[0])));
        //$value = $stringDate[0] . "年" . $stringDate[1] . "月" . $stringDate[2] . "日" . $dayArray[$dayName] . $stringTime[0] . "時" . $stringTime[1] . "分";
        $value = $dayArray[$dayName] .' ng'. $stringDate[2] .' th'. $stringDate[1] .' n'. $stringDate[0] .' '. $stringTime[0] .'g:'. $stringTime[1].'p';
        return $value;
    }

}
