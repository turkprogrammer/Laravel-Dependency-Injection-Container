<?php

namespace App\Services\Video;

class Youtube
{

    protected $random;

    public function __construct()
    {
        $this->random = rand(0, 100000);
    }

    public function showMeString()
    {
        return $this->random;
    }
}


