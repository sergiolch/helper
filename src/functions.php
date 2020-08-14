<?php
namespace sergiolch\helper;

if(!defined('PRE_TAG'))
{
    define('PRE_TAG', '<pre style="font-family: Monaco, Menlo, Consolas, Courier New, monospace;color: #333333;display: block;padding: 9.5px;margin: 0 0 10px;font-size: 10px;line-height: 20px;word-break: break-all;word-wrap: break-word;white-space: pre-wrap;background-color: #f5f5f5;border: 1px solid rgba(0, 0, 0, 0.15);-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;max-height: 490px;overflow-y: scroll;">');
}
if(!defined('CODE_TAG'))
{
    define('CODE_TAG', '<code style="color:#c25;padding:1px 3px;background-color: #f7f7f9;border:1px solid #e1e1e8;border-radius:3px;font-size:.72rem;line-height:.72rem;">');
}

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
