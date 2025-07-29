<?php

class Utility
{
    /**
     * Inspect a value(s)
     * 
     * @param mixed $value
     * @return void
     */
    public static function inspect($value)
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

    /**
     * Inspect a value(s) and terminate the script
     * 
     * @param mixed $value
     * @return void
     */
    public static function inspectAndDie($value)
    {
        echo '<pre>';
        die(var_dump($value));
        echo '</pre>';
    }

    /**
     * Redirect to a given URL
     * 
     * @param string $url
     * @return void
     */
    public static function redirect($url)
    {
        header("Location: {$url}");
        exit;
    }
}
