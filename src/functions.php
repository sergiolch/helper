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
/**
 * CSV field format, formats a field to be accepted as a CSV value
 * @param string $string
 * @return string
 */
function csv_field($string)
{
    if($string=='')
    {
        return '';
    }
    if(strpos($string, '"')!==false)
    {
        $string = '"'.str_replace('"', '""', $string).'"';
    }
    return $string;
}
