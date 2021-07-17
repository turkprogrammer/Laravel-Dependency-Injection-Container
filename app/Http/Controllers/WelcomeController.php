<?php

namespace App\Http\Controllers;

use App\Contracts\Video\VideoHosting;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(VideoHosting $service)//внедряем интерфейс, независим от конкретной реализации
    {
        return view('di', [
            'service' => $service
        ]);
    }
}
