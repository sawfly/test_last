<?php

namespace App\Robot;

use App\Url\Url;

abstract class aRobotForUrl extends aRobot
{
    const NO_STATUS_HEADER = 'no header with status code';
    protected $headers;
    protected $robotContent;
    protected $statusCode;
    protected $url;

    public function __construct($url)
    {
        $this->url = new Url($url);
        $this->url->validate();
    }

    protected function makeRequest()
    {
        if ($this->url->getUrl()) {
            $this->headers = get_headers($this->url->getUrl() . "/robots.txt");
            return true;
        }
        return false;
    }

    protected function getRobot()
    {
        $header = $this->getHeaderWithStatus();
        if ($header !== self::NO_STATUS_HEADER && $this->checkStatusCode($header)) {
            $this->robotContent = file_get_contents($this->url->getUrl() . "/robots.txt");
            return true;
        }
        return false;
    }

    protected function getHeaderWithStatus()
    {
        foreach ($this->headers as $header) {
            if (strpos($header, 'HTTP/') !== false) {
                return $header;
            }
        }
        return self::NO_STATUS_HEADER;
    }

    protected function getHeaderWithLength()
    {
        foreach ($this->headers as $header) {
            if (strpos($header, 'Content-Length:') !== false) {
                return $header;
            }
        }
        return '';
    }
}