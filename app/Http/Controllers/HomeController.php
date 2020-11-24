<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\User;
use App\Tweet;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


}
