<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPage extends Controller
{
    public function user() {
        return view('user')
        ->with('id', '1')
        ->with('name', 'Ferly');
    }
}