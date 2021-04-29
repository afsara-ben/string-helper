<?php


namespace Afsara\StringHelper;


class StringHelper
{
    public static function makeLower(string $str): string
    {
        return strtolower($str);
    }

    public static function makeUpper(string $str): string
    {
        return strtoupper($str);
    }
}
