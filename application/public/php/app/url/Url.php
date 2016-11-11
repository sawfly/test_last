<?php
namespace App\Url;

class Url implements iUrl
{

    protected $url;
    protected $patternFull = '/^(http(s)?:\/\/)([a-z.0-9-]+\/?)*$/';
    protected $patternClean = '/^(http(s)?:\/\/)[a-z.0-9-]+/';

    public function __construct($url = '')
    {
        $this->url = $url;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function validate()
    {
        $url = substr($this->url, 0, 255);
        if (preg_match($this->patternFull, $url)) {
            if (preg_match($this->patternClean, $url, $matches)) {
                if (!empty($matches) && array_key_exists(0, $matches)) {
                    $this->url = $matches[0];
                    return true;
                }
            }
        }
        $this->url = '';
        return false;
    }

}