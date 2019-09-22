<?php

/**
 * Get environment variable
 * @param $key
 * @param string $default
 * @return string
 */
function get_server_env($key, $default = '')
{
    return isset($_SERVER[$key]) ? $_SERVER[$key] : $default;
}