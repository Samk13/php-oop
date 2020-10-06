<?php
class Weather {
    public static $temp_conditions = ['cold','mild','warm'];
    public static function celsiusToFarenheit ($c)
    {
        return $c * 9 / 5 +32;
    }

    public static function tempreture_condition ($f)
    {
        if ($f < 40)
        {
            return self::$temp_conditions[0];
        } else if ($f < 70)
        {
            return self::$temp_conditions[1];
        } else
        {
            return self::$temp_conditions[2];
        }
    }
}
echo Weather::tempreture_condition(10);