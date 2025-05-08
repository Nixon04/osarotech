<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class View extends Controller
{
    public function Home(){
        return Inertia::render('home');
    }
}
