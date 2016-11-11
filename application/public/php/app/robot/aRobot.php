<?php

namespace App\Robot;


abstract class aRobot
{
    abstract protected function makeRequest();

    abstract protected function getRobot();

    abstract protected function checkStatusCode($header);

    abstract protected function checkLength($header, $content);

    abstract protected function checkDirectives($content);

    protected function getStatusCode($header)
    {
        $parts = explode(' ', trim($header));
        return (int)$parts[1];
    }

    protected function getCount($directive, $string)
    {
        return substr_count($string, $directive);
    }

    protected function getSize($header, $content)
    {
        return strpos('Content-Length:', $header) !== false ? str_replace('Content-Length:', '', trim($header)) :
            strlen(trim($content));
    }
}