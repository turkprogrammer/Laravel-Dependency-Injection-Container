<?php

namespace App\Http\Controllers;

use App\Services\Video\Youtube;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(Youtube $service)
    {
        return view('di', [
            'service' => $service
        ]);
    }
}
