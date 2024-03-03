<?php

declare(strict_types=1);

namespace App\Http;

class Request
{
    // public static function getParam(string $method, string $param): string
    // {
        
    // }

    public static function get(string $param): string
    {
        $value = $_GET[$param] ?? die("Input {$param} not found in GET Requests");

        return strip_tags($value);
    }

    public static function post(string $param): string
    {
        $value = $_POST[$param] ?? die("Input {$param} not found in POST Requests");

        return strip_tags($value);
    }
}



