<?php

namespace App\Services\Video;

use App\Contracts\Video\VideoHosting;

class Vimeo implements VideoHosting
{

    protected $random;

    public function __construct()
    {
        $this->random = 'Vimeo ' . rand(0, 100000);
    }

    public function showMeRandomString()
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
        return $this->showMeRandomString();
    }
}
