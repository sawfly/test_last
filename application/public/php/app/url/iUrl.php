<?php

namespace App\Url;

interface iUrl {
    public function setUrl($url);
    public function getUrl();
    public function validate();
}