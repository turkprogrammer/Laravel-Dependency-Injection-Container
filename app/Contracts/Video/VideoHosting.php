<?php

namespace App\Contracts\Video;

interface VideoHosting
{
    /*
    * атомарные методы чтобы на выходе получить примитивные типы данных, но не массив
    */
    public function getVideoWidt();
    public function getVideHeigt();
    public function showString();
}
