<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
    # Rendering the homepage...
        return view('welcome');
    }
}
