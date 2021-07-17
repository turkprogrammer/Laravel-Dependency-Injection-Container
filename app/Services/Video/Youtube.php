<?php

namespace App\Services\Video;

use App\Contracts\Video\VideoHosting;

class Youtube implements VideoHosting
{

    protected $random;

    public function __construct()
    {
        $this->random = 'Youtube ' . rand(0, 100000);
    }

    public function showMeString()
    {
        return $this->random;
    }
    public function getVideoWidt()
    {
    }
    public function getVideHeigt()
    {
    }
    public function showString()
    {
        return $this->showMeString();
    }
}
