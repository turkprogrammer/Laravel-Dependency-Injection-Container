<?php

namespace App\Services\Video;

class Vimeo
{

    protected $random;

    public function __construct()
    {
        $this->random = rand(0, 100000);
    }

    public function showMeRandomString()
    {
        return $this->random;
    }
}


