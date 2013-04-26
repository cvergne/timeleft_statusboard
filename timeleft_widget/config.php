<?php
    define('EXCLAM_ICON', '
data:image/png;base64,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');

    $_terms = array(
        'en' => array(
            'now' => 'Now',
            'minute' => 'minute',
            'minutes' => 'minutes',
            'hour' => 'hour',
            'hours' => 'hours',
            'day' => 'day',
            'days' => 'days',
            'month' => 'month',
            'months' => 'months',
            'year' => 'year',
            'years' => 'years'
        ),
        'fr' => array(
            'now' => 'Maintenant',
            'minute' => 'minute',
            'minutes' => 'minutes',
            'hour' => 'heure',
            'hours' => 'heures',
            'day' => 'jour',
            'days' => 'jours',
            'month' => 'mois',
            'months' => 'mois',
            'year' => 'année',
            'years' => 'années'
        ),
        'de' => array(
            'now' => 'Jetzt',
            'minute' => 'Minute',
            'minutes' => 'Minuten',
            'hour' => 'Stunde',
            'hours' => 'Stunden',
            'day' => 'Tag',
            'days' => 'Tage',
            'month' => 'Monat',
            'months' => 'Monate',
            'year' => 'Jahr',
            'years' => 'Jahre'
        )
    );

    function getTerm($key, $lang='en') {
        global $_terms, $_GET;

        $_defaultlang = 'en';

        if (isset($_GET['lang']) && in_array($_GET['lang'], array_keys($_terms))) {
            $lang = (string)$_GET['lang'];
        }

        if (isset($_terms[$lang][$key])) {
            return $_terms[$lang][$key];
        }
        else if(isset($_terms[$_defaultlang][$key])) {
            return $_terms[$_defaultlang][$key];
        }
        else {
            return $key;
        }
    }

    function calcDate($future) {
        $date = strtotime($future);
        $diff_time = $date - time();

        $key = 'minutes';
        $time = round($diff_time / 60);                   // minutes
        if ($time == 1) {
            $key = 'minute';
        }
        if ($time > 59) {
            $time = round($time / 60);                    // hours
            $key = 'hours';
            if ($time == 1) {
                $key = 'hour';
            }
            if ($time > 23) {
                $time = round($time / 24);                    // days
                $key = 'days';
                if ($time == 1) {
                    $key = 'day';
                }
                if ($time >= 30) {
                    $time = round($time / 30);                    // months
                    $key = 'months';
                    if ($time == 1) {
                        $key = 'month';
                    }
                    if ($time > 11) {
                        $time = round($time / 12);                    // year
                        $key = 'years';
                        if ($time == 1) {
                            $key = 'year';
                        }
                    }
                }
            }
        }

        if ($time <= 0) {
            return getTerm('now');
        }

        return $time . ' ' . getTerm($key);
    }

    $_autorefresh = 59;
    if (isset($_GET['autorefresh'])) {
        if ($_GET['autorefresh'] === false) {
            $_autorefresh = false;
        }
        else if (!empty($_GET['autorefresh'])) {
            $_autorefresh = intval($_GET['autorefresh']);
        }
    }
?>