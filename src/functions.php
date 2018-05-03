<?php
namespace sergiolch\helper;

/**
 * Removes all whitespace from a string
 * @param string $string
 * @return string
 */
function super_trim($string)
{
    $string = trim($string);
    while(strpos($string, '  ')!==false)
    {
        $string = str_replace('  ', ' ', $string);
    }
    return $string;
}
