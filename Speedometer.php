<?php


class Speedometer
{
    const km =[
        1 => 1.6,
        2 => 3.2,
        3 => 4.8,
        4 => 6.4,
        5 => 8,
    ];
public static function convertKmtoMile($speed){
    return array_key_exists($speed, self::km) ? self::km[$speed] : null;
}

}