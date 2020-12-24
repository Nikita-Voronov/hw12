<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function PageWelcome() {
        return view('Navbar.welcome');
    }
}
